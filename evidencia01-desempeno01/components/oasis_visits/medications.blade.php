@component($cardComponent, [
    'title' => '(M2001) Drug Regimen Review',
    ])
        @component($radioBtn, [
            'title' => "Did a complete drug regimen review identify potential clinically significant
                medication issues?",
            'name' => 'M2001_DRUG_RGMN_RVW',
            'checkThis' => $data->M2001_DRUG_RGMN_RVW,
            'data' => [
                '0' => 'No – No issues found during review <b>[Go to M2010]</b>',
                '1' => 'Yes – Issues found during review ',
                '9' => 'NA – Patient is not taking any medications <b>[Go to M2102]</b>'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M2003) Medication Follow-up',
    ])
        @component($radioBtn, [
            'title' => "Did the agency contact a physician (or physician-designee) by midnight of
                    the next calendar day and complete prescribed/recommended actions in response
                    to the identified potential clinically significant medication issues?",
            'name' => 'M2003_MDCTN_FLWP',
            'checkThis' => $data->M2003_MDCTN_FLWP,
            'data' => [
                '0' => 'No',
                '1' => 'Yes',
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M2010) Patient/Caregiver High-Risk Drug Education',
    ])
        @component($radioBtn, [
            'title' => "Has the patient/caregiver received instruction on
                    special precautions for all high-risk medications (such as hypoglycemics,
                    anticoagulants, etc.) and how and when to report problems that may occur?",
            'name' => 'M2010_HIGH_RISK_DRUG_EDCTN',
            'checkThis' => $data->M2010_HIGH_RISK_DRUG_EDCTN,
            'data' => [
                '00' => 'No',
                '01' => 'Yes',
                'NA' => 'Patient not taking any high-risk drugs OR patient/caregiver fully
                    knowledgeable about special precautions associated with all high-risk medications'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M2020) Management of Oral Medications',
    ])
        @component($radioBtn, [
            'title' => "<u>Patient's current ability</u> to prepare and take all oral medications
                reliably and safely, including administration of the correct dosage at the appropriate
                times/intervals. <b><u>Excludes</u> injectable and IV medications. (NOTE: This refers to ability,
                not compliance or willingness.)</b>",
            'titleFormat' => true,
            'name' => 'M2020_CRNT_MGMT_ORAL_MDCTN',
            'checkThis' => $data->M2020_CRNT_MGMT_ORAL_MDCTN,
            'data' => [
                '00' => 'Able to independently take the correct oral medication(s) and
                    proper dosage(s) at the correct times',
                '01' => 'Able to take medication(s) at the correct times if: individual dosages are prepared in
                    advance by another person OR another person develops a drug diary or chart',
                '02' => 'Able to take medication(s) at the correct times if given
                     reminders by another person at the appropriate times',
                '03' => 'Unable to take medication unless administered by another person',
                'NA' => 'No oral medications prescribed'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M2030) Management of Injectable Medications',
    ])
        @component($radioBtn, [
            'title' => "Patient's current ability to prepare and take all prescribed
                injectable medications reliably and safely, including administration of
                correct dosage at the appropriate times/intervals. Excludes IV medications",
            'titleFormat' => true,
            'name' => 'M2030_CRNT_MGMT_INJCTN_MDCTN',
            'checkThis' => $data->M2030_CRNT_MGMT_INJCTN_MDCTN,
            'data' => [
                '00' => 'Able to independently take the correct medication(s) and proper dosage(s)
                    at the correct times',
                '01' => 'Able to take injectable medication(s) at the correct times if:
                    individual syringes are prepared in advance by another person OR
                    another person develops a drug diary or chart',
                '02' => 'Able to take medication(s) at the correct times if given reminders
                    by another person based on the frequency of the injection',
                '03' => 'Unable to take injectable medication unless administered by another person',
                'NA' => 'No injectable medications prescribed'
            ],
        ])
        @endcomponent
@endcomponent

