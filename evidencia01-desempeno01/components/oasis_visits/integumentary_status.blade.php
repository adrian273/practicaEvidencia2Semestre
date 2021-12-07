@component($cardComponent, [
    'title' => '(M1306)  Unhealed Pressure Ulcer/Injury',
    ])
        @component($radioBtn, [
            'title' => "Does this patient have at least one Unhealed Pressure Ulcer/Injury at Stage 2 or Higher or
                designated as Unstageable? <br>(Excludes Stage 1 pressure injuries and all healed pressure
                ulcers/injuries).",
            'name' => 'M1306_UNHLD_STG2_PRSR_ULCR',
            'checkThis' => $data->M1306_UNHLD_STG2_PRSR_ULCR,
            'titleFormat' => true,
            'data' => [
                '0' => 'No <b> [Go to M1322 at SOC/ROC/FU; Go to M1324 at DC]</b>',
                '1' => "Yes",
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1311) Current Number of Unhealed Pressure Ulcers/Injuries at Each Stage',
    ])
        <div class="row mb-2">
            <div class="col-md-2">
                <b>Enter Codes in boxes
                    <i class="fa fa-arrow-down" aria-hidden="true"></i></b>
            </div>
            <div class="col-md-10">
            </div>
        </div>
        @component($inputGroupComponent, [
            'name' => 'M1311_NBR_PRSULC_STG2_A1',
            'value' => $data->M1311_NBR_PRSULC_STG2_A1,
            'max_length' => 2
        ])
            <b>A1. Stage 2:</b> Partial thickness loss of dermis presenting as a shallow open ulcer
            with a red or pink wound bed, without slough. May also present as an intact or
            open/ruptured blister.
            <b>Number of Stage 2 pressure ulcers</b>
        @endcomponent
        @component($inputGroupComponent, [
            'name' => 'M1311_NBR_PRSULC_STG3_B1',
            'value' => $data->M1311_NBR_PRSULC_STG3_B1,
            'max_length' => 2
        ])
            <b>B1. Stage 3:</b> Full thickness tissue loss. Subcutaneous fat may be visible but bone, tendon, or
            muscle is not exposed. Slough may be present but does not obscure the depth of tissue loss.
            May include undermining and tunneling.
            <b>Number of Stage 3 pressure ulcers</b>
        @endcomponent
        @component($inputGroupComponent, [
            'name' => 'M1311_NBR_PRSULC_STG4_C1',
            'value' => $data->M1311_NBR_PRSULC_STG4_C1,
            'max_length' => 2
        ])
            <b>C1. Stage 4:</b> Full thickness tissue loss with exposed bone, tendon, or muscle. Slough or eschar may
            be present on some parts of the wound bed. Often includes undermining and tunneling.
            <b>Number of Stage 4 pressure ulcers</b>
        @endcomponent
        @component($inputGroupComponent, [
            'name' => 'M1311_NSTG_DRSG_D1',
            'value' => $data->M1311_NSTG_DRSG_D1,
            'max_length' => 2
        ])
            <b>D1. Unstageable: Non-removable dressing/device:</b>
            Known but not stageable due to nonremovable dressing/device.
            <b>Number of unstageable pressure ulcers/injuries due to non-removable dressing/device</b>
        @endcomponent
        @component($inputGroupComponent, [
            'name' => 'M1311_NSTG_CVRG_E1',
            'value' => $data->M1311_NSTG_CVRG_E1,
            'max_length' => 2
        ])
            <b>E1. Unstageable: Slough and/or eschar:</b>
            Known but not stageable due to coverage of wound be by slough and/or eschar
            <b>Number of unstageable pressure ulcers/injuries due to coverage of wound bed by slough
                and/or eschar</b>
        @endcomponent
        @component($inputGroupComponent, [
            'name' => 'M1311_NSTG_DEEP_TSUE_F1',
            'value' => $data->M1311_NSTG_DEEP_TSUE_F1,
            'max_length' => 2,
            'last_item' => true
        ])
            <b>F1. Unstageable: Deep tissue injury
                Number of unstageable pressure injuries presenting as deep tissue injury</b>
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1322) Current Number of Stage 1 Pressure Injuries',
    ])
        @component($radioBtn, [
            'title' => "Intact skin with non-blanchable redness of a localized area usually over a
            bony prominence. Darkly pigmented skin may <br> not have a visible blanching; in dark skin tones
            only it may appear with persistent blue or purple hues.",
            'name' => 'M1322_NBR_PRSULC_STG1',
            'checkThis' => $data->M1322_NBR_PRSULC_STG1,
            'titleFormat' => true,
            'type' => 'horizontal',
            'data' => [
                '00' => '0',
                '01' => "1",
                '02' => '2',
                '03' => '3',
                '04' => '4 or more'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1324) Stage of Most Problematic Unhealed Pressure Ulcer/Injury that is Stageable',
    'groupId' => 'M1324'
    ])
        @component($radioBtn, [
            'title' => "(Excludes pressure ulcer/injury that cannot be staged due to a
                non-removable dressing/device, coverage of wound bed by slough and/or eschar,
                or deep tissue injury).",
            'name' => 'M1324_STG_PRBLM_ULCER',
            'checkThis' => $data->M1324_STG_PRBLM_ULCER,
            'data' => [
                '01' => "Stage 1",
                '02' => 'Stage 2',
                '03' => 'Stage 3',
                '04' => 'Stage 4',
                'NA' => 'Patient has no pressure ulcers or no stageable pressure ulcers'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1330) Does this patient have a Stasis Ulcer?',
    ])
        @component($radioBtn, [
            'name' => 'M1330_STAS_ULCR_PRSNT',
            'checkThis' => $data->M1330_STAS_ULCR_PRSNT,
            'data' => [
                '00' => 'No <b>[Go to M1340]</b>',
                '01' => "Yes, patient has BOTH observable and unobservable stasis ulcers",
                '02' => 'Yes, patient has observable stasis ulcers ONLY',
                '03' => 'Yes, patient has unobservable stasis ulcers ONLY (known but not observable
                    due to nonremovable dressing/device) <b>[Go to M1340]</b>',
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1332) Current Number of Stasis Ulcer(s) that are Observable',
    ])
        @component($radioBtn, [
            'name' => 'M1332_NBR_STAS_ULCR',
            'checkThis' => $data->M1332_NBR_STAS_ULCR,
            'data' => [
                '01' => "One",
                '02' => "Two",
                '03' => "Three",
                '04' => "Four or more"
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1334) Status of Most Problematic Stasis Ulcer that is Observable',
    ])
        @component($radioBtn, [
            'name' => 'M1334_STUS_PRBLM_STAS_ULCR',
            'checkThis' => $data->M1334_STUS_PRBLM_STAS_ULCR,
            'data' => [
                '01' => "Fully granulating",
                '02' => "Early/partial granulation",
                '03' => "Not healing",
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1340) Does this patient have a Surgical Wound?',
    ])
        @component($radioBtn, [
            'name' => 'M1340_SRGCL_WND_PRSNT',
            'checkThis' => $data->M1340_SRGCL_WND_PRSNT,
            'data' => [
                '00' => "No",
                '01' => "Yes, patient has at least one observable surgical wound",
                '02' => "Surgical wound known but not observable due to non-removable dressing/device"
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1342) Status of Most Problematic Surgical Wound that is Observable',
    ])
        @component($radioBtn, [
            'name' => 'M1342_STUS_PRBLM_SRGCL_WND',
            'checkThis' => $data->M1342_STUS_PRBLM_SRGCL_WND,
            'data' => [
                '00' => "Newly epithelialized (check migration*** note: developer)",
                '01' => "Fully granulating",
                '02' => "Early/partial granulation",
                '03' => "Not healing"
            ],
        ])
        @endcomponent
@endcomponent
