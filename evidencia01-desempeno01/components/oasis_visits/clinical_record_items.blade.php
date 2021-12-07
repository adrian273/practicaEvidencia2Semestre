@component($cardComponent, [
    'title' => '(M0080) Discipline of Person Completing Assessment',
    ])
        @component($radioBtn, [
            'name' => 'M0080_ASSESSOR_DISCIPLINE',
            'checkThis' => $data->M0080_ASSESSOR_DISCIPLINE,
            'data' => [
                '01' => 'RN',
                '02' => 'PT',
                '03' => 'SLP/ST',
                '04' => 'OT',
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0090) Date Assessment Completed',
    ])
    <div class="col-md-2 pl-0">
        <input type="text" class="date calendar form-control" name="M0090_INFO_COMPLETED_DT"
            id="M0090_INFO_COMPLETED_DT" value="{{ $data->M0090_INFO_COMPLETED_DT }}">
    </div>
@endcomponent

@component($cardComponent, [
    'title' => '(M0100) This Assessment is Currently Being Completed for the Following Reason',
    ])
        @component($radioBtn, [
            'title' => 'Start/Resumption of Care',
            'name' => 'M0100_ASSMT_REASON',
            'checkThis' => $data->M0100_ASSMT_REASON,
            'data' => [
                '01' => 'Start of care - further visits planned',
                '03' => 'Resumption of care (after inpatient stay)',
            ],
        ])
        @endcomponent
        @component($radioBtn, [
            'title' => 'Follow-Up',
            'name' => 'M0100_ASSMT_REASON',
            'checkThis' => $data->M0100_ASSMT_REASON,
            'data' => [
                '04' => 'Recertification (follow-up) reassessment <b>[Go to M0110]</b>',
                '05' => 'Other follow-up <b>[Go to M0110]</b>',
            ],
        ])
        @endcomponent
        @component($radioBtn, [
            'title' => 'Transfer to an Inpatient Facility',
            'name' => 'M0100_ASSMT_REASON',
            'checkThis' => $data->M0100_ASSMT_REASON,
            'data' => [
                '06' => 'Transferred to an inpatient facility – patient not discharged from agency <b>[Go to M1041]</b>',
                '07' => 'Transferred to an inpatient facility – patient discharged from agency </b>[Go to M1041]</b>',
            ],
        ])
        @endcomponent
        @component($radioBtn, [
            'title' => 'Discharge from Agency – Not to an Inpatient Facility',
            'name' => 'M0100_ASSMT_REASON',
            'checkThis' => $data->M0100_ASSMT_REASON,
            'data' => [
                '08' => 'Death at home <b>[Go to M2005]</b>',
                '09' => 'Discharge from agency <b>[Go to M1041]</b>',
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0102) Date of Physician-ordered Start of Care (Resumption of Care)',
    ])
    @component($inputCheckComponent, [
        'name' => 'M0102_PHYSN_ORDRD_SOCROC_DT',
        'value' => $data->M0102_PHYSN_ORDRD_SOCROC_DT,
        'max_length' => 9,
        'col_top_num' => 'col-md-2',
        'col_bottom_num' => 'col-md-8',
        'last_item' => true,
        'class' => 'M0102_PHYSN_ORDRD_SOCROC_DT_NA_child date calendar'
    ])
        @component($checkBoxBtn, [
            'name' => 'M0102_PHYSN_ORDRD_SOCROC_DT_NA',
            'data' => [
                'M0102_PHYSN_ORDRD_SOCROC_DT_NA' => [
                    'value' => '1',
                    'text' => 'NA - No specific SOC date ordered by physician',
                    'checkThis' => $data->M0102_PHYSN_ORDRD_SOCROC_DT_NA,
                ],
            ]
        ])
        @endcomponent
    @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M0104) Date of Referral',
    ])
    <div class="col-md-2 pl-0">
        <input type="text"  class="date calendar form-control" name="M0104_PHYSN_RFRL_DT"
            id="M0104_PHYSN_RFRL_DT" value="{{ $data->M0104_PHYSN_RFRL_DT }}">
    </div>
@endcomponent

@component($cardComponent, [
    'title' => '(M0110) Episode Timing',
    ])
    @component($radioBtn, [
        'name' => 'M0110_EPISODE_TIMING',
        'checkThis' => $data->M0110_EPISODE_TIMING,
        'data' => [
            '01' => 'Early',
            '02' => 'Later',
            'UK' => 'Unknown',
            'NA' => 'Not Applicable: No Medicare case mix group to be defined by this assessment'
        ],
    ])
    @endcomponent
@endcomponent
