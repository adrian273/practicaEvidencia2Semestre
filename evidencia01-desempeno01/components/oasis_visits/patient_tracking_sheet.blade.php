@component($cardComponent, [
    'title' => '(M0010) CMS Certification Number'
    ])
        @component($inputGroupComponent, [
            'name' => 'M0010_CCN',
            'value' => $data->M0010_CCN,
            'max_length' => 6,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0014) Branch State'
    ])
        @component($inputGroupComponent, [
            'name' => 'M0014_BRANCH_STATE',
            'value' => $data->M0014_BRANCH_STATE,
            'required' => true,
            'data_parent' => 0,
            'max_length' => 10,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0016) Branch ID Number'
    ])
        @component($inputGroupComponent, [
            'name' => 'M0016_BRANCH_ID',
            'value' => $data->M0016_BRANCH_ID,
            'required' => true,
            'data_parent' => 0,
            'max_length' => 10,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0018) National Provider Identifier (NPI)',
    'subTitle' => 'For the attending physician who has signed the plan of care.'
    ])
        {{--  @component($inputGroupComponent, [
            'name' => 'M0018_PHYSICIAN_ID',
            'value' => $data->M0018_PHYSICIAN_ID,
            'max_length' => 10,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true
        ])
            @component($checkBoxBtn, [
                'name' => 'M0018_PHYSICIAN_UK',
                'data' => [
                    'M0018_PHYSICIAN_UK' => [
                        'value' => '1',
                        'text' => 'UK – Unknown or Not Available',
                        'checkThis' => $data->M0018_PHYSICIAN_UK,
                    ],
                ]
            ])
            @endcomponent
        @endcomponent --}}

        @component($inputCheckComponent, [
            'name' => 'M0018_PHYSICIAN_ID',
            'value' => $data->M0018_PHYSICIAN_ID,
            'max_length' => 10,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true,
            'class' => 'M0018_PHYSICIAN_UK_child'
        ])
            @component($checkBoxBtn, [
                'name' => 'M0018_PHYSICIAN_UK',
                'class' => '',
                'data' => [
                    'M0018_PHYSICIAN_UK' => [
                        'value' => '1',
                        'text' => 'UK – Unknown or Not Available',
                        'checkThis' => $data->M0018_PHYSICIAN_UK,
                    ],
                ]
            ])
            @endcomponent
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0020) Patient ID Number'
    ])
        @component($inputGroupComponent, [
            'name' => 'M0020_PAT_ID',
            'value' => $data->M0020_PAT_ID,
            'max_length' => 20,
            'col_top_num' => 'col-md-3',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0030) Start of Care Date'
    ])
        @component($inputGroupComponent, [
            'name' => 'M0030_START_CARE_DT',
            'value' => $data->M0030_START_CARE_DT,
            'required' => true,
            'data_parent' => 0,
            'class' => 'date calendar',
            'max_length' => 8,
            'col_top_num' => 'col-md-2',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0040) Patient Name'
    ])
{{--
    @component($inputGroupComponent, [
        'name' => 'M0040_PAT_FNAME',
        'value' => $data->M0040_PAT_FNAME,
        'required' => true,
        'data_parent' => 0,
        'max_length' => 12,
        'col_top_num' => 'col-md-4',
        'col_bottom_num' => 'col-md-8',
    ])
        <b>First Name</b>
    @endcomponent
    @component($inputGroupComponent, [
        'name' => 'M0040_PAT_MI',
        'value' => $data->M0040_PAT_MI,
        'max_length' => 1,
        'col_top_num' => 'col-md-4',
        'col_bottom_num' => 'col-md-8',
        'input_col' => true
    ])
        <b>MI</b>
    @endcomponent
    @component($inputGroupComponent, [
        'name' => 'M0040_PAT_LNAME',
        'value' => $data->M0040_PAT_LNAME,
        'required' => true,
        'data_parent' => 0,
        'max_length' => 18,
        'col_top_num' => 'col-md-4',
        'col_bottom_num' => 'col-md-8'
    ])
        <b>Last Name</b>
    @endcomponent
    @component($inputGroupComponent, [
            'name' => 'M0040_PAT_SUFFIX',
            'value' => $data->M0040_PAT_SUFFIX,
            'max_length' => 3,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true
        ])
        <b>Suffix</b>
    @endcomponent --}}
        <div class="row">
            <div class="col-md-4">
                <span>First Name</span>
                <input type="text" name="M0040_PAT_FNAME" class="form-control"
                    value="">
            </div>
            <div class="col-md-2">
                <span>MI</span>
                <input type="text" name="" class="form-control"
                value="">
            </div>
            <div class="col-md-4">
                <span>Last Name</span>
                <input type="text" name="" class="form-control" value="">
            </div>
            <div class="col-md-2">
                <span>Suffix</span>
                <input type="text" name="" class="form-control">
            </div>
        </div>
@endcomponent

@component($cardComponent, [
    'title' => '(M0050) Patient State of Residence'
    ])
        @component($inputGroupComponent, [
            'name' => 'M0050_PAT_ST',
            'value' => $data->M0050_PAT_ST,
            'required' => true,
            'data_parent' => 0,
            'max_length' => 2,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0060) Patient ZIP Code'
    ])
        @component($inputGroupComponent, [
            'name' => 'M0060_PAT_ZIP',
            'value' => $data->M0060_PAT_ZIP,
            'required' => true,
            'data_parent' => 0,
            'max_length' => 11,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0063) Medicare Number',
    ])
        @component($inputCheckComponent, [
            'name' => 'M0063_MEDICARE_NUM',
            'value' => $data->M0063_MEDICARE_NUM,
            'max_length' => 12,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true,
            'class' => 'M0063_MEDICARE_NA_child'
        ])
            @component($checkBoxBtn, [
                'name' => 'M0063_MEDICARE_NA',
                'data' => [
                    'M0063_MEDICARE_NA' => [
                        'value' => '1',
                        'text' => 'NA – No Medicare',
                        'checkThis' => $data->M0063_MEDICARE_NA,
                    ],
                ]
            ])
            @endcomponent
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0064) Social Security Number',
    ])
        @component($inputCheckComponent, [
            'name' => 'M0064_SSN',
            'value' => $data->M0064_SSN,
            'max_length' => 9,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true,
            'class' => 'M0064_SSN_UK_child'
        ])
            @component($checkBoxBtn, [
                'name' => 'M0064_SSN_UK',
                'data' => [
                    'M0064_SSN_UK' => [
                        'value' => '1',
                        'text' => 'UK – Unknown or Not Available',
                        'checkThis' => $data->M0064_SSN_UK,
                    ],
                ]
            ])
            @endcomponent
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0065) Medicaid Number',
    ])
        @component($inputCheckComponent, [
            'name' => 'M0065_MEDICAID_NUM',
            'value' => $data->M0065_MEDICAID_NUM,
            'max_length' => 9,
            'col_top_num' => 'col-md-4',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true,
            'class' => 'M0065_MEDICAID_NA_child'
        ])
            @component($checkBoxBtn, [
                'name' => 'M0065_MEDICAID_NA',
                'data' => [
                    'M0065_MEDICAID_NA' => [
                        'value' => '1',
                        'text' => 'NA – No Medicaid',
                        'checkThis' => $data->M0065_MEDICAID_NA,
                    ],
                ]
            ])
            @endcomponent
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0066) Birth Date'
    ])
        @component($inputGroupComponent, [
            'name' => 'M0066_PAT_BIRTH_DT',
            'value' => $data->M0066_PAT_BIRTH_DT,
            'required' => true,
            'data_parent' => 0,
            'class' => 'date calendar',
            'max_length' => 8,
            'col_top_num' => 'col-md-2',
            'col_bottom_num' => 'col-md-8',
            'last_item' => true
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0069) Gender'
    ])
        @php $SEX = null; @endphp
        @switch($calendar->patient->sex)
            @case("M")
                @php $SEX = 1; @endphp
                @break
            @case("F")
                @php $SEX = 2; @endphp
                @break
            @default
               @break
        @endswitch
        <input type="hidden" name="M0069_PAT_GENDER" id="M0069_PAT_GENDER" value="{{ $SEX }}">
        @component($radioBtn, [
            'name' => 'M0069_PAT_GENDER_TEMP',
            'checkThis' => $SEX,
            'disable' => true,
            'data' => [
                '1' => 'Male',
                '2' => 'Female',
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0140) Race/Ethnicity',
    ])
     @component($checkBoxBtn, [
        'groupName' => 'M0114',
        'data' => [
            'M0140_ETHNIC_AI_AN' => [
                'value' => '1',
                'text' => '1 - American Indian or Alaska Native',
                'checkThis' => $data->M0140_ETHNIC_AI_AN,
            ],
            'M0140_ETHNIC_ASIAN' => [
                'value' => '1',
                'text' => '2 - Asian',
                'checkThis' => $data->M0140_ETHNIC_ASIAN
            ],
            'M0140_ETHNIC_BLACK' => [
                'value' => '1',
                'text' => '3 - Black or African-American',
                'checkThis' => $data->M0140_ETHNIC_BLACK
            ],
            'M0140_ETHNIC_HISP' => [
                'value' => '1',
                'text' => '4 - Hispanic or Latino',
                'checkThis' => $data->M0140_ETHNIC_HISP
            ],
            'M0140_ETHNIC_NH_PI' => [
                'value' => '1',
                'text' => '5 - Native Hawaiian or Pacific Islander',
                'checkThis' => $data->M0140_ETHNIC_NH_PI
            ],
            'M0140_ETHNIC_WHITE' => [
                'value' => '1',
                'text' => '6 - White',
                'checkThis' => $data->M0140_ETHNIC_WHITE
            ]
        ]
    ])
    @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0150) Current Payment Sources for Home Care',
    ])
     @component($checkBoxBtn, [
        'groupName' => 'M0150',
        'data' => [
            'M0150_CPAY_NONE' => [
                'value' => '1',
                'text' => '0 - None; no charge for current services',
                'checkThis' => $data->M0150_CPAY_NONE
            ],
            'M0150_CPAY_MCARE_FFS' => [
                'value' => '1',
                'text' => '1 - Medicare (traditional fee-for-service)',
                'checkThis' => $data->M0150_CPAY_MCARE_FFS
            ],
            'M0150_CPAY_MCARE_HMO' => [
                'value' => '1',
                'text' => '2 - Medicare (HMO/managed care/Advantage plan)',
                'checkThis' => $data->M0150_CPAY_MCARE_HMO
            ],
            'M0150_CPAY_MCAID_FFS' => [
                'value' => '1',
                'text' => '3 - Medicaid (traditional fee-for-service)',
                'checkThis' => $data->M0150_CPAY_MCAID_FFS
            ],
            'M0150_CPAY_MCAID_HMO' => [
                'value' => '1',
                'text' => '4 - Medicaid (HMO/managed care)',
                'checkThis' => $data->M0150_CPAY_MCAID_HMO
            ],
            'M0150_CPAY_WRKCOMP' => [
                'value' => '1',
                'text' => "5 - Workers' compensation",
                'checkThis' => $data->M0150_CPAY_WRKCOMP
            ],
            'M0150_CPAY_TITLEPGMS' => [
                'value' => '1',
                'text' => "6 - Title programs (for example, Title III, V, or XX)",
                'checkThis' => $data->M0150_CPAY_TITLEPGMS
            ],
            'M0150_CPAY_OTH_GOVT' => [
                'value' => '1',
                'text' => "7 - Other government (for example, TriCare, VA) ",
                'checkThis' => $data->M0150_CPAY_OTH_GOVT
            ],
            'M0150_CPAY_PRIV_INS' => [
                'value' => '1',
                'text' => "8 - Private insurance",
                'checkThis' => $data->M0150_CPAY_PRIV_INS
            ],
            'M0150_CPAY_PRIV_HMO' => [
                'value' => '1',
                'text' => "9 - Private HMO/managed care",
                'checkThis' => $data->M0150_CPAY_PRIV_HMO
            ],
            'M0150_CPAY_SELFPAY' => [
                'value' => '1',
                'text' => "10 - Self-pay",
                'checkThis' => $data->M0150_CPAY_SELFPAY
            ],
            'M0150_CPAY_OTHER' => [
                'value' => '1',
                'text' => "11 - Other (specify)",
                'checkThis' => $data->M0150_CPAY_OTHER
            ],
            'M0150_CPAY_UK' => [
                'value' => '1',
                'text' => "UK - Unknown",
                'checkThis' => $data->M0150_CPAY_UK
            ]
        ]
    ])
    @endcomponent
@endcomponent
