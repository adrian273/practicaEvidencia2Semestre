<?php

namespace Modules\Home\Http\Library\Oasis;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Rules\Oasis as Rule;

class OasisValidationLibrary {

    public static function validations( Request $request ) {

        // For Star care Oasis Docs < Change in the future >
        $validator = Validator::make($request->all(), [
            'TRANS_TYPE_CD' => [
                'required',
                new Rule\Id3060\TransTypeCd,
                new Rule\Id3330($request->M0090_INFO_COMPLETED_DT),
                new Rule\Id3340($request->CORRECTION_NUM),
                //new Rule\Id3340(1), // for testing, any number != 0;
                new Rule\Id3341($request->CORRECTION_NUM),
                new Rule\Id5300($request->M0100_ASSMT_REASON, null),
                //new Id5300(3, '04'),
                new Rule\Id9160($request->M0100_ASSMT_REASON, $request->ITM_SBST_CD)
            ],
            'ITM_SBST_CD' => [
                'required',
                new Rule\Id3060\ItmSbstCd,
                //new id 9160 in use too here from other item,
            ],
            'CORRECTION_NUM' => [
                'required',
                new Rule\Id3090
            ]
        ]);

        return $validator;
    }

}
