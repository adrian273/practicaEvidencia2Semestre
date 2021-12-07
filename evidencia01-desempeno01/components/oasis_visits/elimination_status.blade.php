@component($cardComponent, [
    'title' => '(M1600) Has this patient been treated for a Urinary Tract Infection in the past 14 days?',
    ])
        @component($radioBtn, [
            'name' => 'M1600_UTI',
            'checkThis' => $data->M1600_UTI,
            'data' => [
                '00' => 'No',
                '01' => 'Yes',
                'NA' => 'Patient on prophylactic treatment',
                'UK' => 'Unknown'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1610) Urinary Incontinence or Urinary Catheter Presence',
    ])
        @component($radioBtn, [
            'name' => 'M1610_UR_INCONT',
            'checkThis' => $data->M1610_UR_INCONT,
            'data' => [
                '00' => 'No incontinence or catheter (includes anuria or ostomy for urinary drainage)',
                '01' => 'Patient is incontinent',
                '02' => 'Patient requires a urinary catheter (specifically: external, indwelling, intermittent, suprapubic)'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1620) Bowel Incontinence Frequency',
    ])
        @component($radioBtn, [
            'name' => 'M1620_BWL_INCONT',
            'checkThis' => $data->M1620_BWL_INCONT,
            'data' => [
                '00' => 'Very rarely or never has bowel incontinence',
                '01' => 'Less than once weekly',
                '02' => 'One to three times weekly',
                '03' => 'Four to six times weekly',
                '04' => 'On a daily basis',
                '05' => 'More often than once daily',
                'NA' => 'Patient has ostomy for bowel elimination',
                'UK' => 'Unknown <b>[Omit “UK” option on FU, DC]</b>'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1630) Ostomy for Bowel Elimination',
    ])
        @component($radioBtn, [
            'name' => 'M1630_OSTOMY',
            'checkThis' => $data->M1630_OSTOMY,
            'title' => "Does this patient have an ostomy for bowel elimination that within
                        the last 14 days: <br>  Was related to an inpatient facility stay or necessitated a change in medical
                        or treatment regimen?",
            'titleFormat' => true,
            'data' => [
                '00' => 'Patient does not have an ostomy for bowel elimination',
                '01' => "Patient's ostomy was not related to an inpatient stay and did not necessitate change in medical
                        or treatment regimen",
                '02' => 'The ostomy was related to an inpatient stay or did necessitate change in
                medical or treatment regimen',
            ],
        ])
        @endcomponent
@endcomponent
