@component($cardComponent, [
    'title' => '(M1100) Patient Living Situation',
    'subTitle' => "Which of the following best describes the patient's residential circumstance and
    availability of assistance? (Check one box only).",
    ])
    <div class="table-responsive font-sz-df">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Living Arrangement</th>
                    <th scope="col">Around the Clock</th>
                    <th scope="col">Regular daytime</th>
                    <th scope="col">Regular nighttime</th>
                    <th scope="col">Occasional / short-term assistance </th>
                    <th scope="col">No assistance available</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">a. Patient lives alone</th>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '01' => '01',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '02' => '02',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '03' => '03',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '04' => '04',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '05' => '05',
                            ],
                        ])
                        @endcomponent
                    </td>
                </tr>
                <tr>
                    <th scope="row">b. Patient lives with other person(s) in the home</th>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '06' => '06',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '07' => '07',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '08' => '08',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '09' => '09',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '10' => '10',
                            ],
                        ])
                        @endcomponent
                    </td>
                </tr>
                <tr>
                    <th scope="row">c. Patient lives in congregate
                        situation (for example, assisted
                        living, residential care home)</th>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '11' => '11',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '12' => '12',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '13' => '13',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '14' => '14',
                            ],
                        ])
                        @endcomponent
                    </td>
                    <td>
                        @component($radioBtn, [
                                'name' => 'M1100_PTNT_LVG_STUTN',
                                'checkThis' => $data->M1100_PTNT_LVG_STUTN,
                                'ulType' => 'none',
                                'data' => [
                                '15' => '15',
                            ],
                        ])
                        @endcomponent
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endcomponent
