@component($cardComponent, [
    'title' => '(M1700) Cognitive Functioning',
    ])
        @component($radioBtn, [
            'title' => "Patient's current (day of assessment) level of alertness, orientation,
                        comprehension, concentration, and immediate memory for simple commands.",
            'name' => 'M1700_COG_FUNCTION',
            'checkThis' => $data->M1700_COG_FUNCTION,
            'data' => [
                '00' => "Alert/oriented, able to focus and shift attention, comprehends and recalls task directions independently",
                '01' => "Requires prompting (cuing, repetition, reminders) only under stressful or unfamiliar conditions",
                '02' => "Requires assistance and some direction in specific situations (for example, on all tasks involving shifting attention), or consistently requires low stimulus environment due to distractibility",
                '03' => "Requires considerable assistance in routine situations. Is not alert and oriented or is unable to shift attention and recall directions more than half the time",
                '04' => "Totally dependent due to disturbances such as constant disorientation, coma, persistent vegetative state, or delirium"
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1710) When Confused (Reported or Observed Within the Last 14 Days)',
    ])
        @component($radioBtn, [
            'name' => 'M1710_WHEN_CONFUSED',
            'checkThis' => $data->M1710_WHEN_CONFUSED,
            'data' => [
                '00' => 'Never',
                '01' => 'In new or complex situations only',
                '02' => 'On awakening or at night only',
                '03' => 'During the day and evening, but not constantly',
                '04' => 'Constantly',
                'NA' => 'Patient nonresponsive'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1720) When Anxious (Reported or Observed Within the Last 14 Days)',
    ])
        @component($radioBtn, [
            'name' => 'M1720_WHEN_ANXIOUS',
            'checkThis' => $data->M1720_WHEN_ANXIOUS,
            'data' => [
                '00' => 'None of the time',
                '01' => 'Less often than daily',
                '02' => 'Daily, but not constantly',
                '03' => 'All of the time',
                'NA' => 'Patient nonresponsive'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1730) Depression Screening',
    'subTitle' => 'Has the patient been screened for depression, using a standardized,
                validated depression screening tool?'
    ])

    @component($radioBtn, [
        'name' => 'M1730_STDZ_DPRSN_SCRNG',
        'checkThis' => $data->M1730_STDZ_DPRSN_SCRNG,
        'data' => [
            '00' => 'No',
            '01' => 'Yes, patient was screened using the PHQ-2©* scale',
            '02' => 'Yes, patient was screened with a different standardized,
                    validated assessment and the patient meets criteria for further
                    evaluation for depression',
            '03' => 'Yes, patient was screened with a different standardized, validated
                assessment and the patient does not meet criteria for further evaluation
                for depression',
        ],
    ])
    @endcomponent

    <div class="table-responsive font-sz-df">
        <table class="table table-bordered">
            <thead>
                <caption>*Copyright© Pfizer Inc. All rights reserved. Reproduced with permission.</caption>
                <tr>
                    <th scope="col" colspan="6" class="text-justify">
                        Instructions for this two-question tool: Ask patient:
                        “Over the last two weeks, how often have you been bothered by any of the following problems?”
                    </th>
                </tr>
                <tr>
                    <th scope="col">PHQ-2©*</th>
                    <th scope="col">Not at all 0-1 day</th>
                    <th scope="col">Several days 2-6 days</th>
                    <th scope="col">More than half of the days 7-11 days</th>
                    <th scope="col">Nearly every day 12-14 days</th>
                    <th scope="col">NA Unable to respond</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="text-justify">a) Little interest or pleasure
                        in doing things</th>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1730_PHQ2_LACK_INTRST',
                                'checkThis' => $data->M1730_PHQ2_LACK_INTRST,
                                'ulType' => 'none',
                                'data' => [
                                '00' => '0',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1730_PHQ2_LACK_INTRST',
                                'checkThis' => $data->M1730_PHQ2_LACK_INTRST,
                                'ulType' => 'none',
                                'data' => [
                                '01' => '1',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1730_PHQ2_LACK_INTRST',
                                'checkThis' => $data->M1730_PHQ2_LACK_INTRST,
                                'ulType' => 'none',
                                'data' => [
                                '02' => '2',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1730_PHQ2_LACK_INTRST',
                                'checkThis' => $data->M1730_PHQ2_LACK_INTRST,
                                'ulType' => 'none',
                                'data' => [
                                '03' => '3',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1730_PHQ2_LACK_INTRST',
                                'checkThis' => $data->M1730_PHQ2_LACK_INTRST,
                                'ulType' => 'none',
                                'data' => [
                                'NA' => 'NA',
                            ],
                        ])
                        @endcomponent
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-justify">b) Feeling down,
                        depressed, or hopeless?</th>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1730_PHQ2_DPRSN',
                                'checkThis' => $data->M1730_PHQ2_DPRSN,
                                'ulType' => 'none',
                                'data' => [
                                '00' => '0',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1730_PHQ2_DPRSN',
                                'checkThis' => $data->M1730_PHQ2_DPRSN,
                                'ulType' => 'none',
                                'data' => [
                                '01' => '1',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1730_PHQ2_DPRSN',
                                'checkThis' => $data->M1730_PHQ2_DPRSN,
                                'ulType' => 'none',
                                'data' => [
                                '02' => '2',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1730_PHQ2_DPRSN',
                                'checkThis' => $data->M1730_PHQ2_DPRSN,
                                'ulType' => 'none',
                                'data' => [
                                '03' => '3',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1730_PHQ2_DPRSN',
                                'checkThis' => $data->M1730_PHQ2_DPRSN,
                                'ulType' => 'none',
                                'data' => [
                                'NA' => 'NA',
                            ],
                        ])
                        @endcomponent
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endcomponent

@component($cardComponent, [
    'title' => '(M1740) Cognitive, behavioral, and psychiatric symptoms',
    ])
     @component($checkBoxBtn, [
        'title' => 'Cognitive, behavioral, and psychiatric symptoms that are demonstrated at least once a week
            (Reported or Observed).',
        'groupName' => 'M1740',
        'data' => [
            'M1740_BD_MEM_DEFICIT' => [
                'value' => '1',
                'text' => '1 - Memory deficit: failure to recognize familiar persons/places,
                        inability to recall events of past 24 hours, significant memory loss so
                        that supervision is required',
                'checkThis' => $data->M1740_BD_MEM_DEFICIT
            ],
            'M1740_BD_IMP_DECISN' => [
                'value' => '1',
                'text' => '2 - Impaired decision-making: failure to perform usual ADLs or IADLs,
                        inability to appropriately stop activities, jeopardizes safety through actions',
                'checkThis' => $data->M1740_BD_IMP_DECISN
            ],
            'M1740_BD_VERBAL' => [
                'value' => '1',
                'text' => '3 - Verbal disruption: yelling, threatening, excessive profanity, sexual references, etc',
                'checkThis' => $data->M1740_BD_VERBAL
            ],
            'M1740_BD_PHYSICAL' => [
                'value' => '1',
                'text' => '4 - Physical aggression: aggressive or combative to self and others
                        (for example, hits self, throws objects, punches, dangerous maneuvers
                        with wheelchair or other objects)',
                'checkThis' => $data->M1740_BD_PHYSICAL
            ],
            'M1740_BD_SOC_INAPPRO' => [
                'value' => '1',
                'text' => '5 - Disruptive, infantile, or socially inappropriate behavior (excludes verbal actions)',
                'checkThis' => $data->M1740_BD_SOC_INAPPRO
            ],
            'M1740_BD_DELUSIONS' => [
                'value' => '1',
                'text' => '6 - Delusional, hallucinatory, or paranoid behavior',
                'checkThis' => $data->M1740_BD_DELUSIONS
            ],
            'M1740_BD_NONE' => [
                'value' => '1',
                'text' => '7 - None of the above behaviors demonstrated',
                'checkThis' => $data->M1740_BD_NONE
            ]
        ]
    ])
    @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1745) Frequency of Disruptive Behavior Symptoms (Reported or Observed)',
    ])
        @component($radioBtn, [
            'title' => 'Any physical, verbal, or other disruptive/dangerous symptoms that are injurious
                to self or others or jeopardize personal safety.',
            'name' => 'M1745_BEH_PROB_FREQ',
            'checkThis' => $data->M1745_BEH_PROB_FREQ,
            'data' => [
                '00' => 'Never',
                '01' => 'Less than once a month',
                '02' => 'Once a month',
                '03' => 'Several times each month',
                '04' => 'Several times a week',
                '05' => 'At least daily'
            ],
        ])
        @endcomponent
@endcomponent
