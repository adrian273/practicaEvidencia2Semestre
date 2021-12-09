@include('home::agency.patient.components.header_form', [
    'title' => $calendar->visit_type->name,
    'status' => $calendar->status->option,
    'bgColorStatus' => "#ff650065",
    'linkPrint' => route('user.agency.patient.calendar_visits.oasis_start_of_care.pdf', base64_encode($calendar->id)),
    'patient_signature' => ($calendar->visit_type->requires_patient_sign == 'Y') ? (($calendar->visit_status_idx < 34) ? 'yes' : 'only img') : null
])
@php
    // Oasis Component <Routes>
    $radioBtn = 'home::agency.patient.components.oasis_visits.list_radio_btn_component';
    $checkBoxBtn = 'home::agency.patient.components.oasis_visits.list_check_btn_component';
    $selectComboBtn = 'home::agency.patient.components.oasis_visits.list_select_component';
    $cardComponent = 'home::agency.patient.components.oasis_visits.card_component';
    $inputGroupComponent = 'home::agency.patient.components.oasis_visits.input_group_component';
    $inputCheckComponent = 'home::agency.patient.components.oasis_visits.input_check_uk_component';
    // For section GG0130 / GG0170
    $GG01XXSectionCoding = 'home::agency.patient.components.oasis_visits.GG01XX_section_coding';
@endphp
{{--
    #Start Of Care Section
    --------------------------------------------------
    <Items Used>
    M0010-M0030, M0040-M0150, M1000-M1033,
    M1060-M1306, M1311-M2003, M2010, M2020-
    M2200, GG0100-GG0170
--}}
<div class="tabs-container">
    <div class="tab-content">
        <div class="tab-pane active">
            <div class="panel-body pt-1">
                <form method="post" id="form-ajax" action="{{ route('user.agency.patient.calendar_visits.oasis_start_of_care.edit') }}">
                    <div class="accordion" id="accordionExample">
                        {{-- ------- Calendar Section ------------------------------- --}}
                        @include('home::agency.patient.calendar_visits.calendar_form_header', [
                            'calendar' => $calendar
                        ])
                        {{-- ------- Calendar Section ------------------------------- --}}
                        @if (!$data->upload_visit)
                        {{-- General Records --}}
                        <input type="hidden" name="oasis_id" id="oasis_id" value="{{ base64_encode($data->id) }}">
                        <input type="hidden" name="TRANS_TYPE_CD" id="TRANS_TYPE_CD" value="{{ $data->TRANS_TYPE_CD ? $data->TRANS_TYPE_CD : 1 }}">
                        <input type="hidden" name="CORRECTION_NUM" id="CORRECTION_NUM" value="{{ $data->CORRECTION_NUM }}">
                        <input type="hidden" name="ITM_SBST_CD" id="ITM_SBST_CD" value="{{ $data->ITM_SBST_CD }}">
                        <input type="hidden" name="patient_id" id="patient_id" value="{{ base64_encode($calendar->patient->id) }}">
                        {{-- ----------------------------------------------------------------- --}}
                        @component('home::agency.patient.components.card_form', [
                            'target' => '0',
                            'title' => 'Home Health Patient Tracking Sheet',
                        ])
                            <a href="#" id="editPatientTracSheet">
                                <span class="badge badge-primary">Edit</span>
                            </a>
                            <input type="hidden" name="edit_patient_trac_sheet" id="edit_patient_trac_sheet" value="0" data-edit-patient="true" disabled>
                            @include('home::agency.patient.components.oasis_visits.patient_tracking_sheet')
                            <a href="#" class="btn_continue btn btn-info" data-current="0">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '1',
                            'title' => 'Clinical Record Items',
                        ])
                            @include('home::agency.patient.components.oasis_visits.clinical_record_items')
                            <a href="#" class="btn_continue btn btn-info" data-current="1">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '2',
                            'title' => 'Patient History and Diagnoses',
                        ])
                            @include('home::agency.patient.components.oasis_visits.patient_history_and_diagnoses')
                            <a href="#" class="btn_continue btn btn-info" data-current="2">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '3',
                            'title' => 'Living Arrangements',
                        ])
                            @include('home::agency.patient.components.oasis_visits.living_arrangement')
                            <a href="#" class="btn_continue btn btn-info" data-current="3">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '4',
                            'title' => 'Sensory Status',
                        ])
                            @include('home::agency.patient.components.oasis_visits.sensory_status')
                            <a href="#" class="btn_continue btn btn-info" data-current="4">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '5',
                            'title' => 'Integumentary status',
                        ])
                            @include('home::agency.patient.components.oasis_visits.integumentary_status')
                            <a href="#" class="btn_continue btn btn-info" data-current="5">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '6',
                            'title' => 'Respiratory Status',
                        ])
                            @include('home::agency.patient.components.oasis_visits.respiratory_status')
                            <a href="#" class="btn_continue btn btn-info" data-current="6">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '7',
                            'title' => 'Elimination Status',
                        ])
                            @include('home::agency.patient.components.oasis_visits.elimination_status')
                            <a href="#" class="btn_continue btn btn-info" data-current="7">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '8',
                            'title' => 'Neuro/Emotional/Behavioral Status',
                        ])
                            @include('home::agency.patient.components.oasis_visits.neuro_emotional_behavioral_status')
                            <a href="#" class="btn_continue btn btn-info" data-current="8">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '9',
                            'title' => 'ADL/IADLs',
                        ])
                            @include('home::agency.patient.components.oasis_visits.adl_iadls')
                            <a href="#" class="btn_continue btn btn-info" data-current="9">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '10',
                            'title' => 'Medications',
                        ])
                            @include('home::agency.patient.components.oasis_visits.medications')
                            <a href="#" class="btn_continue btn btn-info" data-current="10">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '11',
                            'title' => 'Care Manegement',
                        ])
                            @include('home::agency.patient.components.oasis_visits.care_management')
                            <a href="#" class="btn_continue btn btn-info" data-current="11">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '12',
                            'title' => 'Therapy Need and Plan of Care',
                        ])
                            @include('home::agency.patient.components.oasis_visits.therapy_need_and_plan_of_care')
                            <a href="#" class="btn_continue btn btn-info" data-current="12">Save and continue</a>
                        @endcomponent

                        @component('home::agency.patient.components.card_form', [
                            'target' => '13',
                            'title' => 'Functional Abilities and Goals',
                        ])
                            @include('home::agency.patient.components.oasis_visits.functional_abilities_goals')
                            <a href="#" class="btn_continue btn btn-info" data-current="13">Save and continue</a>
                        @endcomponent

                        @endif
                        @component('home::agency.patient.components.card_form', [
                            'target' => 'TwentyOne',
                            'title' => 'Comments Log <em>(This field is not printed)</em>',
                        ])
                            @include('home::agency.patient.components.comments_log')
                        @endcomponent
                    </div><!-- //.accordion -->
                    @include('home::agency.patient.components.btn_form_document')
                </form>
            </div>
        </div>
    </div>
</div>
@include('home::agency.patient.components.modal_change_status')
@push('script_document')
<script>

var edit_patient_status = false;
$(function() {
    initOasisFunc();
    $('#content-ajax').on('click', '.btn_continue', function(e) {
        e.preventDefault()
        let pos = parseInt($(this).data('current'))
        let current = '#headingCard' + pos
        let next = '#headingCard' + (++pos)
        let l = $(this).ladda();
        l.ladda('start');
        swal({
            title: "Are you sure?",
            text: "Save and continuos",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function(isConfirm){
            if (isConfirm){
                if(validateLayer(current)) {
                    if(saveAndContinue()){
                        $(current).trigger('click')
                        if($(next).length > 0) $(next).trigger('click')
                        $("#editPatientTracSheet").trigger('click')
                    } else {
                        swal("", "An error occurred", "error");
                    }
                } else {
                    swal("", "There are required fields that are empty. Please check.", "error");
                }
            }
        });

        l.ladda('stop');
    })
});

$(document).ajaxComplete(function(event, xhr, settings) {
    if (settings.type == "POST")
        initOasisFunc();
});

function validateLayer(parent) {
    let ready = true
    let ckeckeds = []
    let find = 0
    $(parent + ' h3').removeClass('text-danger border-left border-danger');
    $("#content-ajax *[data-parent='" + parent + "']").each(function(e,v) {
        if($(v).data('required')) {
            if((v.type == 'radio' || v.type == 'checkbox') && !$('input[name=' + v.name + ']').is(':checked')) {
                if($(v).data('guide')) {
                    find = 0
                    if($.inArray($(v).data('guide'), ckeckeds) == -1){
                        $('#' + $(v).data('guide') + ' input[type=checkbox]').each(function(p,t) {
                            if($(t).prop('checked')) {
                                ckeckeds[ckeckeds.length+1] = $(v).data('guide')
                                find = 1
                                return true
                            }
                        })
                        if(find==0) {
                            $('#' + $(v).data('guide') + ' input[type=checkbox]').each(function(p,t) {
                                $('label[for=' + $(t).attr('id') + ']').addClass('text-danger')
                            })
                            ready = false
                        } else {
                            $('#' + $(v).data('guide') + ' input[type=checkbox]').each(function(p,t) {
                                $('label[for=' + $(t).attr('id') + ']').removeClass('text-danger')
                            })
                        }
                    }
                } else {
                    $('label[for=' + $(v).attr('id') + ']').addClass('text-danger')
                    $(v).addClass('border-danger')
                    ready = false
                }
                // $('label[for=' + $(v).attr('id') + ']').removeClass('text-danger')

            } else if((v.type == 'text' || v.children.length > 0) && $(v).val() == '') {
                $(v).addClass('border-danger')
                ready = false
            }
        }
    })
    return ready
}

function saveAndContinue(){
    let result = false
    $.ajax({
        url: $('#form-ajax').attr('action') + '?save=partial',
        type: "POST",
        dataType: "json",
        async: false,
        data: $('#form-ajax').serialize() + '&silent=' + (!l ? 1 : null),
        success: function (resp) {
            result = (resp.result == 'success')
            edit_patient_status = true;
        }, error: function (xhr) {
            console.log('error')
        }
    })
    return result
}

function loadIcd10Select() {
    $('.icd10-codes-select').select2({
            ajax: {
                url: function(params) {
                    return `{{  route('user.agency.patient.calendar_visits.get_icd10_codes') }}/${params.term}`
                },
                processResults: function (data) {
                // Transforms the top-level key of the response object from 'items' to 'results'
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: `${item.code} [${item.description}]`,
                            id: item.code_dec
                        }
                    })
                };
            }
        }
    });
}

function checkUnknownInput() {
    $(".input-check-uk :checkbox").click(function() {
        disableInput(this.name);
    });
}

// When the document is recent open
function checkStatusUnkwonInput() {
    $(".input-check-uk :checkbox").each(function(index, element) {
        disableInput(element.name);
    });
}

function disableInput( name ) {
    var status = $(`#${name}`).is(':checked');
    $(`.${name}_child`).prop('disabled', status);
}

function initOasisFunc() {
    edit_patient_status= false;
    loadIcd10Select();
    checkUnknownInput();
    checkStatusUnkwonInput();
}

$("#editPatientTracSheet").click(function() {
    //console.log('click')
    console.log(edit_patient_status)
    $("#content-ajax #collapseCard0  *[data-edit-patient='true']").each(function(e,v) {
        console.log(this)
        if ($(this).is(':disabled') && !edit_patient_status) {
            $(this).prop('disabled', false);
        }
        else {
            $(this).prop('disabled', true);
        }
    });
    if (!edit_patient_status) {
        $("#edit_patient_trac_sheet").prop('value', 1);
    } else {
        $("#edit_patient_trac_sheet").prop('value', 0);
    }
});

</script>
@endpush
