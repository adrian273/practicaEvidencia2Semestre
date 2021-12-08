<?php

namespace Modules\Home\Http\Controllers\agency\patient\calendar_visits\oasis_visits;

use App\Calendar;
use App\OasisDSoc;
use App\Icd10Master;
use App\State;
use App\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use Modules\Home\Http\Library\TCPDF\MyPdf;
use Modules\Home\Http\Controllers\agency\patient\calendar_visits\CalendarVisitBaseController;
use Modules\Home\Http\Repository\oasis\OasisStore;
use Modules\Home\Http\Library\Oasis\OasisValidationLibrary;

class StartOfCareController extends CalendarVisitBaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->visitType_controller_path = 'oasis_start_of_care';
    }

    public function index(Request $request)
    {
        $calendar_id = base64_decode($request->calendar_id);
        $calendar = Calendar::findOrFail($calendar_id);
        return $this->showData($calendar);
    }

    public function showData(Calendar $calendar, bool $ajax = false)
    {
        $relations = [];
        $company_id = Session::get('company_id');
        $agency_state = Agency::find($company_id)->state;
        $data = OasisDSoc::where('calendar_id', $calendar->id)->first();
        if (!$data) {
            abort(404);
        }
        $state_list = State::select('id','state_name_long', 'state_name_short')->get();
        $datas = [
            'calendar' => $calendar->prepareVisitDuration(),
            'data' => $data,
            #'physicians' => $this->getPhysicians($calendar, 'OT'),
            #'patient_signature' => $data->pt_signature,
            'ajax' => $ajax,
            'approve' => $this->getDataApprove(),
            'visit_type_id' => $this->visit_status_id,
            'user_company_id' => Session::get('user_company_id'),
            'state_list' => $state_list,
            'agency_state' => $agency_state
        ];
        if ($ajax) {
            return view('home::agency.patient.calendar_visits.oasis_visits.start_of_care.start_of_care_form', $datas)->render();
        } else {
            return view('home::agency.patient.calendar_visits.oasis_visits.start_of_care.start_of_care_layout', $datas);
        }
    }


    public function edit(Request $request)
    {

        $calendar = $this->edit_calendar($request);

        $validator = OasisValidationLibrary::validations($request);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()->getMessages(),
                'silent' => $request->silent
            ], 422);
        }

        if (is_array($calendar)) {
            return response($calendar);
        }

        if ($calendar->save()) {
            DB::beginTransaction();
            try {
                $this->store($request);
            } catch (\Exception $e) {
                DB::rollback();
                DB::commit();
            }
            DB::commit();

            if ($request->has('save') && $request->input('save') == 'partial') {
                return response(['result' => 'success']);
            }

            if ($request->silent == 1)
                return 'success';
            return response(['result' => 'success', 'html' => $this->showData($calendar, true)]);
        }
    }

    function store( $request ) {
        $oasis = OasisDSoc::find(base64_decode($request->oasis_id));
        $oasisStore = new OasisStore($oasis, $request);
        $oasisStore->generalRecords();
        $oasisStore->patientTrackingSheet();
        $oasisStore->clinicalRecord();
        $oasisStore->patientHistory();
        $oasisStore->livingArragement();
        $oasisStore->sensorStatus();
        $oasisStore->integumentaryStatus();
        $oasisStore->respiratoryStatus();
        $oasisStore->eliminationStatus();
        $oasisStore->neuroEmotionalBehavioral();
        $oasisStore->adlIadl();
        $oasisStore->medications();
        $oasisStore->careManagement();
        $oasisStore->therapyNeedPlanOfCare();
        $oasisStore->functionalAbilitiesGoals();
        $oasisStore->selfCare();
        $oasisStore->mobility();
        $oasisStore->save();
    }

    public function getIcd10Codes(string $search) {
        $icd10_codes = Icd10Master::where(function ($query) use ($search) {
            $query->where('code', 'like', '%'.$search.'%')
                ->orWhere('description', 'like', '%'.$search.'%');
        })->get();
        return response()->json($icd10_codes);
    }

    public function viewXml() {

    }

    public function pdf(string $calendar_id, Calendar $calendar = null, Object $pdf = null)
    {
        $return_pdf = false;
        if (!$calendar) {
            $calendar_id = base64_decode($calendar_id);
            $calendar = Calendar::findOrFail($calendar_id);
        } else {
            $calendar_id = $calendar->id;
            $return_pdf = true;
        }

       $data = [];

        if (!$return_pdf) {
            $pdf = new MyPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        }

        $pdf->start($calendar->visit_type->name);

        if ($data->upload_visit) {
            $pdf->addFile(Storage::disk('privateDisk')->getDriver()->getAdapter()->getPathPrefix() . $data->upload_visit);
        } else {
            $this->headerPdf($pdf, $calendar, $data, $calendar->visit_type->name);

            $pdf->addHtml('<PDF_ROUTE>', [
                'calendar' => $calendar,
                'data' => $data,
            ], true);
        }

        if ($return_pdf) {
            return $pdf;
        } else {
            header('Content-type: application/pdf');
            $name = $calendar->patient->first_name . ' - ' . $calendar->patient->last_name . ' - ' . $calendar->visit_type->abbrev;
            $pdf->Output($name . '.pdf', 'I');
        }
    }

}
