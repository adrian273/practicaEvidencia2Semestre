@php
$M2102values = [
    '00' => 'No assistance needed - patient is independent or does not have needs in this area',
    '01' => 'Non-agency caregiver(s) currently provide assistance',
    '02' => 'Non-agency caregiver(s) need training/supportive services to provide assistance',
    '03' => 'Non-agency caregiver(s) are not likely to provide assistance OR it is unclear if they will provide assistance',
    '04' => 'Assistance needed, but no non-agency caregiver(s) available'
];
@endphp

@component($cardComponent, [
    'title' => '(M2102) Types and Sources of Assistance',
    ])
        @component($radioBtn, [
            'title' => "Determine the ability and willingness of non-agency caregivers
                (such as family members, friends, or privately paid caregivers) to provide assistance for the
                following activities, if assistance is needed. Excludes all care by your agency staff",
            'name' => 'M2102_CARE_TYPE_SRC_SPRVSN',
            'checkThis' => $data->M2102_CARE_TYPE_SRC_SPRVSN,
            'data' => $M2102values
        ])
        @endcomponent
@endcomponent

