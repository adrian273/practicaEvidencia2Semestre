@component($cardComponent, [
    'title' => '(M1400) When is the patient dyspneic or noticeably Short of Breath?',
    ])
        @component($radioBtn, [
            'name' => 'M1400_WHEN_DYSPNEIC',
            'checkThis' => $data->M1400_WHEN_DYSPNEIC,
            'data' => [
                '00' => "Patient is not short of breath",
                '01' => "When walking more than 20 feet, climbing stairs",
                '02' => "With moderate exertion (for example, while dressing, using commode or bedpan,
                    walking distances less than 20 feet)",
                '03' => "With minimal exertion (for example, while eating, talking, or performing other ADLs) or with agitation",
                '04' => "At rest (during day or night)"
            ],
        ])
        @endcomponent
@endcomponent
