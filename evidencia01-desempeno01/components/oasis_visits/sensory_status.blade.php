@component($cardComponent, [
    'title' => '(M1200) Vision (with corrective lenses if the patient usually wears them)',
    ])
        @component($radioBtn, [
            'name' => 'M1200_VISION',
            'checkThis' => $data->M1200_VISION,
            'data' => [
                '00' => 'Normal vision: sees adequately in most situations; can see medication labels, newsprint.',
                '01' => "Partially impaired: cannot see medication labels or newsprint, but can see obstacles in path,
                    and the surrounding layout; can count fingers at arm's length.",
                '02' => "Severely impaired: cannot locate objects without hearing or touching them, or patient
                nonresponsive.",
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1242) Frequency of Pain Interfering',
    ])
        @component($radioBtn, [
            'title' => "Frequency of Pain Interfering with patient's activity or movement",
            'name' => 'M1242_PAIN_FREQ_ACTVTY_MVMT',
            'checkThis' => $data->M1242_PAIN_FREQ_ACTVTY_MVMT,
            'data' => [
                '00' => 'Patient has no pain',
                '01' => "Patient has pain that does not interfere with activity or movement",
                '02' => "Less often than daily",
                '03' => 'Daily, but not constantly',
                '04' => 'All of the time'
            ],
        ])
        @endcomponent
@endcomponent
