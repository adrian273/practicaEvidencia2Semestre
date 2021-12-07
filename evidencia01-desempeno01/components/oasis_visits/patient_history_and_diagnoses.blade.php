@component($cardComponent, [
    'title' => '(M1000) Impatient Facilities',
    ])
    @component($checkBoxBtn, [
        'title' => 'From which of the following Inpatient Facilities was the patient discharged within the past 14 days?',
        'name' => 'M0102_PHYSN_ORDRD_SOCROC_DT_NA',
        'groupName' => 'M1000',
        'data' => [
            'M1000_DC_LTC_14_DA' => [
                'value' => '1',
                'text' => '1 - Long-term nursing facility (NF)',
                'checkThis' => $data->M1000_DC_LTC_14_DA,
            ],
            'M1000_DC_SNF_14_DA' => [
                'value' => '1',
                'text' => '2 - Skilled nursing facility (SNF/TCU)',
                'checkThis' => $data->M1000_DC_SNF_14_DA
            ],
            'M1000_DC_IPPS_14_DA' => [
                'value' => '1',
                'text' => '3 - Short-stay acute hospital (IPPS)',
                'checkThis' => $data->M1000_DC_IPPS_14_DA
            ],
            'M1000_DC_LTCH_14_DA' => [
                'value' => '1',
                'text' => '4 - Long-term care hospital (LTCH)',
                'checkThis' => $data->M1000_DC_LTCH_14_DA
            ],
            'M1000_DC_IRF_14_DA' => [
                'value' => '1',
                'text' => '5 - Inpatient rehabilitation hospital or unit (IRF)',
                'checkThis' => $data->M1000_DC_IRF_14_DA
            ],
            'M1000_DC_PSYCH_14_DA' => [
                'value' => '1',
                'text' => '6 - Psychiatric hospital or unit',
                'checkThis' => $data->M1000_DC_PSYCH_14_DA
            ],
            'M1000_DC_OTH_14_DA' => [
                'value' => '1',
                'text' => '7 - Other (specify)',
                'checkThis' => $data->M1000_DC_OTH_14_DA
            ],
            'M1000_DC_NONE_14_DA' => [
                'value' => '1',
                'text' => 'NA - Patient was not discharged from an inpatient facility <b>[Go to M1021]</b>',
                'checkThis' => $data->M1000_DC_NONE_14_DA
            ],
        ]
    ])
    @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1005) Inpatient Discharge Date',
    ])

    @component($inputCheckComponent, [
            'name' => 'M1005_INP_DISCHARGE_DT',
            'value' => $data->M1005_INP_DISCHARGE_DT,
            'max_length' => 9,
            'col_top_num' => 'col-md-2',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true,
            'class' => 'M1005_INP_DSCHG_UNKNOWN_child date calendar'
        ])
            @component($checkBoxBtn, [
                'name' => 'M1005_INP_DSCHG_UNKNOWN',
                'data' => [
                    'M1005_INP_DSCHG_UNKNOWN' => [
                        'value' => '1',
                        'text' => 'UK - Unknown',
                        'checkThis' => $data->M1005_INP_DSCHG_UNKNOWN,
                    ],
                ]
            ])
            @endcomponent
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1021) Primary Diagnosis & (M1023) Other Diagnoses',
    ])
    <div class="row">
        <div class="col-md-12">
            <p class="text-justify">
                <b class="mb-2">(M1021/1023) Diagnoses and Symptom Control:</b>
            </p>
            <p class="text-justify">
                List each diagnosis for which the patient is receiving home care in
                Column 1, and enter its ICD-10-CM code at the level of highest specificity in Column 2 (diagnosis codes only – no
                surgical or procedure codes allowed). Diagnoses are listed in the order that best reflects the seriousness of each
                condition and supports the disciplines and services provided. Rate the degree of symptom control for each condition
                in Column 2. ICD-10-CM sequencing requirements must be followed if multiple coding is indicated for any diagnoses.
            </p>
            <p class="text-justify">
                <b>Code each row according to the following directions for each column:</b>
            </p>
            <p class="text-justify">
                <b>Column 1:</b> Enter the description of the diagnosis. Sequencing of diagnoses should reflect the seriousness of each
                condition and support the disciplines and services provided.
            </p>
            <p class="text-justify">
                <b>Column 2:</b> Enter the ICD-10-CM code for the condition described in Column 1 – no surgical or procedure codes
                allowed. Codes must be entered at the level of highest specificity and ICD-10-CM coding rules and
                sequencing requirements must be followed. Note that external cause codes (ICD-10-CM codes
                beginning with V, W, X, or Y) may not be reported in M1021 (Primary Diagnosis) but may be reported in
                M1023 (Secondary Diagnoses). Also note that when a Z-code is reported in Column 2, the code for the
                underlying condition can often be entered in Column 2, as long as it is an active on-going condition
                impacting home health care.
                Rate the degree of symptom control for the condition listed in Column 1. Do not assign a symptom
                control rating if the diagnosis code is a V, W, X, Y or Z-code. Choose one value that represents the
                degree of symptom control appropriate for each diagnosis using the following scale:</p>
                <ul class="list-group clear-list">
                    <li class="list-group-item fist-item">
                        0 - Asymptomatic, no treatment needed at this time
                    </li>
                    <li class="list-group-item">
                        1 - Symptoms well controlled with current therapy
                    </li>
                    <li class="list-group-item">
                        2 - Symptoms controlled with difficulty, affecting daily functioning; patient needs ongoing monitoring
                    </li>
                    <li class="list-group-item">
                        3 - Symptoms poorly controlled; patient needs frequent adjustment in treatment and dose
                        monitoring
                    </li>
                    <li class="list-group-item">
                        4 - Symptoms poorly controlled; history of re-hospitalizations
                    </li>
                </ul>
                <p class="text-justify">
                    <b>Note</b> that the rating for symptom control in Column 2 should not be used to determine the sequencing of
                    the diagnoses listed in Column 1. These are separate items and sequencing may not coincide.
                </p>
        </div>
    </div>
<div class="row">
    {{-- /////////////////////////////////////////// --}}
    <div class="col-md-4">
        <ul class="list-group clear-list">
            <li class="list-group-item  fist-item">
                <b>Column 1</b>
            </li>
            <li class="list-group-item">
                <p class="text-justify">
                    Diagnoses (Sequencing of diagnoses should reflect the
                    seriousness of each condition and support the disciplines
                    and services provided).
                </p>
            </li>
        </ul>
    </div>
    {{-- ////////////////////////////////////////// --}}
    <div class="col-md-8">
        <ul class="list-group clear-list">
            <li class="list-group-item  fist-item">
                <b>Column 2</b>
            </li>
            <li class="list-group-item">
                <p class="text-justify">
                    ICD-10-CM and symptom control rating for each condition.
                    Note that the sequencing of these ratings may not match the
                    sequencing of the diagnoses.
                </p>
            </li>
        </ul>
    </div>
</div>
@endcomponent

@component($cardComponent, [
    'title' => 'M1021. Primary Diagnosis',
    ])
    @component($inputGroupComponent, [
        'name' => 'M1021_PRIMARY_DIAG_ICD',
        'value' => $data->M1021_PRIMARY_DIAG_ICD,
        'max_length' => 8,
        'text' => ($data->M1021PrimaryDiagCdText) ? $data->M1021PrimaryDiagCdText->code." [".$data->M1021PrimaryDiagCdText->description."]" : null,
        'last_item' => true,
        'col_top_num' => 'col-md-4',
        'col_bottom_num' => 'col-md-8',
        'type' => 'select-ajax',
        'class' => 'icd10-codes-select'
    ])
        @component($radioBtn, [
            'name' => 'M1021_PRIMARY_DIAG_SEVERITY',
            'checkThis' => $data->M1021_PRIMARY_DIAG_SEVERITY,
            'titleFormat' => true,
            'type' => 'horizontal',
            'data' => [
                '00' => '0',
                '01' => '1',
                '02' => '2',
                '03' => '3',
                '04' => '4'
            ],
        ])
        @endcomponent
    @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => 'M1023. Other Diagnoses',
    ])
    @component($inputGroupComponent, [
        'name' => 'M1023_OTH_DIAG1_ICD',
        'value' => $data->M1023_OTH_DIAG1_ICD,
        'text' => ($data->M1023OthDiag1IcdText) ? $data->M1023OthDiag1IcdText->code." [".$data->M1023OthDiag1IcdText->description."]" : null,
        'max_length' => 8,
        'col_top_num' => 'col-md-4',
        'col_bottom_num' => 'col-md-8',
        'type' => 'select-ajax',
        'class' => 'icd10-codes-select'
    ])
        @component($radioBtn, [
            'name' => 'M1023_OTH_DIAG1_SEVERITY',
            'checkThis' => $data->M1023_OTH_DIAG1_SEVERITY,
            'titleFormat' => true,
            'type' => 'horizontal',
            'data' => [
                '00' => '0',
                '01' => '1',
                '02' => '2',
                '03' => '3',
                '04' => '4'
            ],
        ])
        @endcomponent
    @endcomponent

    @component($inputGroupComponent, [
        'name' => 'M1023_OTH_DIAG2_ICD',
        'value' => $data->M1023_OTH_DIAG2_ICD,
        'text' => ($data->M1023OthDiag2IcdText) ? $data->M1023OthDiag2IcdText->code." [".$data->M1023OthDiag2IcdText->description."]" : null,
        'max_length' => 8,
        'col_top_num' => 'col-md-4',
        'col_bottom_num' => 'col-md-8',
        'type' => 'select-ajax',
        'class' => 'icd10-codes-select'
    ])
        @component($radioBtn, [
            'name' => 'M1023_OTH_DIAG2_SEVERITY',
            'checkThis' => $data->M1023_OTH_DIAG2_SEVERITY,
            'titleFormat' => true,
            'type' => 'horizontal',
            'data' => [
                '00' => '0',
                '01' => '1',
                '02' => '2',
                '03' => '3',
                '04' => '4'
            ],
        ])
        @endcomponent
    @endcomponent

    @component($inputGroupComponent, [
        'name' => 'M1023_OTH_DIAG3_ICD',
        'value' => $data->M1023_OTH_DIAG3_ICD,
        'text' => ($data->M1023OthDiag3IcdText) ? $data->M1023OthDiag3IcdText->code." [".$data->M1023OthDiag3IcdText->description."]" : null,
        'max_length' => 8,
        'col_top_num' => 'col-md-4',
        'col_bottom_num' => 'col-md-8',
        'type' => 'select-ajax',
        'class' => 'icd10-codes-select'
    ])
        @component($radioBtn, [
            'name' => 'M1023_OTH_DIAG3_SEVERITY',
            'checkThis' => $data->M1023_OTH_DIAG3_SEVERITY,
            'titleFormat' => true,
            'type' => 'horizontal',
            'data' => [
                '00' => '0',
                '01' => '1',
                '02' => '2',
                '03' => '3',
                '04' => '4'
            ],
        ])
        @endcomponent
    @endcomponent

    @component($inputGroupComponent, [
        'name' => 'M1023_OTH_DIAG4_ICD',
        'value' => $data->M1023_OTH_DIAG4_ICD,
        'text' => ($data->M1023OthDiag4IcdText) ? $data->M1023OthDiag4IcdText->code." [".$data->M1023OthDiag4IcdText->description."]" : null,
        'max_length' => 8,
        'col_top_num' => 'col-md-4',
        'col_bottom_num' => 'col-md-8',
        'type' => 'select-ajax',
        'class' => 'icd10-codes-select'
    ])
        @component($radioBtn, [
            'name' => 'M1023_OTH_DIAG4_SEVERITY',
            'checkThis' => $data->M1023_OTH_DIAG4_SEVERITY,
            'titleFormat' => true,
            'type' => 'horizontal',
            'data' => [
                '00' => '0',
                '01' => '1',
                '02' => '2',
                '03' => '3',
                '04' => '4'
            ],
        ])
        @endcomponent
    @endcomponent

    @component($inputGroupComponent, [
        'name' => 'M1023_OTH_DIAG5_ICD',
        'value' => $data->M1023_OTH_DIAG5_ICD,
        'text' => ($data->M1023OthDiag5IcdText) ? $data->M1023OthDiag5IcdText->code." [".$data->M1023OthDiag5IcdText->description."]" : null,
        'max_length' => 8,
        'last_item' => true,
        'col_top_num' => 'col-md-4',
        'col_bottom_num' => 'col-md-8',
        'type' => 'select-ajax',
        'class' => 'icd10-codes-select'
    ])
        @component($radioBtn, [
            'name' => 'M1023_OTH_DIAG5_SEVERITY',
            'checkThis' => $data->M1023_OTH_DIAG5_SEVERITY,
            'titleFormat' => true,
            'type' => 'horizontal',
            'data' => [
                '00' => '0',
                '01' => '1',
                '02' => '2',
                '03' => '3',
                '04' => '4'
            ],
        ])
        @endcomponent
    @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1028) Active Diagnoses',
    ])
     @component($checkBoxBtn, [
        'title' => 'Comorbidities and Co-existing Conditions – Check all that apply
                    See OASIS Guidance Manual for a complete list of relevant ICD-10 codes.',
        'checkAll' => true,
        'groupName' => 'M1028',
        'data' => [
            'M1028_ACTV_DIAG_PVD_PAD' => [
                'value' => '1',
                'text' => '1 - Peripheral Vascular Disease (PVD) or Peripheral Arterial Disease (PAD)',
                'checkThis' => $data->M1028_ACTV_DIAG_PVD_PAD
            ],
            'M1028_ACTV_DIAG_DM' => [
                'value' => '1',
                'text' => '2 - Diabetes Mellitus (DM)',
                'checkThis' => $data->M1028_ACTV_DIAG_DM
            ],
            'M1028_ACTV_DIAG_NOA' => [
                'value' => '1',
                'text' => '3 - None of the above',
                'checkThis' => $data->M1028_ACTV_DIAG_NOA
            ],
        ]
    ])
    @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1030) Therapies',
    ])
     @component($checkBoxBtn, [
        'title' => 'Therapies the patient receives at home.',
        'checkAll' => true,
        'groupName' => 'M1030',
        'data' => [
            'M1030_THH_IV_INFUSION' => [
                'value' => '1',
                'text' => '1 - Intravenous or infusion therapy (excludes TPN)',
                'checkThis' => $data->M1030_THH_IV_INFUSION
            ],
            'M1030_THH_PAR_NUTRITION' => [
                'value' => '1',
                'text' => '2 - Parenteral nutrition (TPN or lipids)',
                'checkThis' => $data->M1030_THH_PAR_NUTRITION
            ],
            'M1030_THH_ENT_NUTRITION' => [
                'value' => '1',
                'text' => '3 - Enteral nutrition (nasogastric, gastrostomy, jejunostomy,
                    or any other artificial entry into the alimentary canal)',
                'checkThis' => $data->M1030_THH_ENT_NUTRITION
            ],
            'M1030_THH_NONE_ABOVE' => [
                'value' => '1',
                'text' => '4 - None of the above',
                'checkThis' => $data->M1030_THH_NONE_ABOVE
            ],
        ]
    ])
    @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1033) Risk for Hospitalization',
    ])
     @component($checkBoxBtn, [
        'title' => 'Which of the following signs or symptoms characterize this patient as at risk for
                    hospitalization?',
        'groupName' => 'M1033',
        'data' => [
            'M1033_HOSP_RISK_HSTRY_FALLS' => [
                'value' => '1',
                'text' => '1 - History of falls (2 or more falls – or any fall with an injury – in the past 12 months)',
                'checkThis' => $data->M1033_HOSP_RISK_HSTRY_FALLS
            ],
            'M1033_HOSP_RISK_WEIGHT_LOSS' => [
                'value' => '1',
                'text' => '2 - Unintentional weight loss of a total of 10 pounds or more in the past 12 months',
                'checkThis' => $data->M1033_HOSP_RISK_WEIGHT_LOSS
            ],
            'M1033_HOSP_RISK_MLTPL_HOSPZTN' => [
                'value' => '1',
                'text' => '3 - Multiple hospitalizations (2 or more) in the past 6 months',
                'checkThis' => $data->M1033_HOSP_RISK_MLTPL_HOSPZTN
            ],
            'M1033_HOSP_RISK_MLTPL_ED_VISIT' => [
                'value' => '1',
                'text' => '4 - Multiple emergency department visits (2 or more) in the past 6 months',
                'checkThis' => $data->M1033_HOSP_RISK_MLTPL_ED_VISIT
            ],
            'M1033_HOSP_RISK_MNTL_BHV_DCLN' => [
                'value' => '1',
                'text' => '5 - Decline in mental, emotional, or behavioral status in the past 3 months',
                'checkThis' => $data->M1033_HOSP_RISK_MNTL_BHV_DCLN
            ],
            'M1033_HOSP_RISK_COMPLIANCE' => [
                'value' => '1',
                'text' => '6 - Reported or observed history of difficulty complying with any medical instructions (for example,
                            medications, diet, exercise) in the past 3 months',
                'checkThis' => $data->M1033_HOSP_RISK_COMPLIANCE
            ],
            'M1033_HOSP_RISK_5PLUS_MDCTN' => [
                'value' => '1',
                'text' => '7 - Currently taking 5 or more medications',
                'checkThis' => $data->M1033_HOSP_RISK_5PLUS_MDCTN
            ],
            'M1033_HOSP_RISK_CRNT_EXHSTN' => [
                'value' => '1',
                'text' => '8 - Currently reports exhaustion',
                'checkThis' => $data->M1033_HOSP_RISK_CRNT_EXHSTN
            ],
            'M1033_HOSP_RISK_OTHR_RISK' => [
                'value' => '1',
                'text' => '9 - Other risk(s) not listed in 1 - 8 ',
                'checkThis' => $data->M1033_HOSP_RISK_OTHR_RISK
            ],
            'M1033_HOSP_RISK_NONE_ABOVE' => [
                'value' => '1',
                'text' => '10 - None of the above',
                'checkThis' => $data->M1033_HOSP_RISK_NONE_ABOVE
            ],
        ]
    ])
    @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1060) Height and Weight',
    'subTitle' => 'Height and Weight – While measuring, if the number is X.1-X.4 round down; X.5 or greater round up.'
    ])
    @component($inputGroupComponent, [
        'name' => 'M1060_HEIGHT_A',
        'value' => $data->M1060_HEIGHT_A,
        'max_length' => 2,
        'input_span' => 'Inches',
        'last_item' => true
    ])
        <b>a. Height (in inches).</b> Record most recent height measure since the most recent SOC/ROC.
    @endcomponent
    @component($inputGroupComponent, [
        'name' => 'M1060_WEIGHT_B',
        'value' => $data->M1060_WEIGHT_B,
        'max_length' => 2,
        'input_span' => 'Pounds',
        'last_item' => true
    ])
        <b>b. Weight (in pounds).</b> Base weight on most recent measure in last 30 days; measure weight
        consistently, according to standard agency practice (for example, in a.m. after voiding, before meal,
        with shoes off, etc.).
    @endcomponent
@endcomponent
