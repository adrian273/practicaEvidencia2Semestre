@component($cardComponent, [
    'title' => '(M2200) Therapy Need',
    'subTitle' => 'Therapy Need: In the home health plan of care for the Medicare payment episode for which this
assessment will define a case mix group, what is the indicated need for therapy visits (total of reasonable
and necessary physical, occupational, and speech-language pathology visits combined)? (Enter zero
[“000”] if no therapy visits indicated).'
    ])
    @component($inputGroupComponent, [
        'name' => 'M2200_THER_NEED_NBR',
        'value' => $data->M2200_THER_NEED_NBR,
        'max_length' => 3,
        'last_item' => true
    ])
       Number of therapy visits indicated (total of physical, occupational and
       speech-language pathology combined).
        @component($checkBoxBtn, [
            'name' => 'M2200_THER_NEED_NA',
            'data' => [
                'M2200_THER_NEED_NA' => [
                    'value' => '1',
                    'text' => 'NA - Not Applicable: No case mix group defined by this assessment',
                    'checkThis' => $data->M2200_THER_NEED_NA,
                ],
            ]
        ])
        @endcomponent
    @endcomponent
@endcomponent
