@php
$GG0100values = [
    '3' => '3. Independent',
    '2' => '2. Needed Some Help',
    '1' => '1. Dependent',
    '8' => '8. Unknown',
    '9' => '9. Not Applicable'
];

// For sections GG0130 / GG0170
$GG01XXvalues = [
    '06' => '06. Independent',
    '05' => '05. Setup or clean-up assistance',
    '04' => '04. Supervision or touching assistance',
    '03' => '03. Partial/moderate assistance',
    '02' => '02. Substantial/maximal assistance',
    '01' => '01. Dependent',
    '07' => '07. Patient refused',
    '09' => '09. Not applicable',
    '10' => '10. Not attempted due to environmental limitations',
    '88' => '88. Not attempted due to medical conditions or safety concerns'
];
@endphp
@component($cardComponent, [
    'title' => '(GG0100) Prior Functioning: Everyday Activities',
    'subTitle' => 'Indicate the patient’s usual ability with everyday activities prior
        to the current illness, exacerbation, or injury.'
    ])
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group clear-list font-sz-df">
                <li class="list-group-item fist-item">
                    <b>Coding</b>
                </li>
                <li class="list-group-item  fist-item">
                    <b>3. Independent</b> – Patient completed the
                        activities by him/herself, with or without
                        an assistive device, with no assistance
                        from a helper.
                </li>
                <li class="list-group-item">
                <b>2. Needed Some Help</b> – Patient needed
                    partial assistance from another person to
                    complete activities.
                </li>
                <li class="list-group-item">
                    <b>1. Dependent</b> – A helper completed the
                    activities for the patient
                </li>
                <li class="list-group-item">
                    <b>8. Unknown</b>
                </li>
                <li class="list-group-item">
                    <b>9. Not Applicable</b>
                </li>
            </ul>
        </div>
        <div class="col-md-8 font-sz-df">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group clear-list">
                        <li class="list-group-item fist-item">
                            <b>Enter Codes in boxes
                                <i class="fa fa-arrow-down" aria-hidden="true"></i></b>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    @component($selectComboBtn, [
                        'name' => 'GG0100A',
                        'checkThis' => $data->GG0100A,
                        'class' => 'form-control',
                        'data' => $GG0100values,
                        // 'required' => true,
                        // 'data_parent' => 13,
                    ])
                    @endcomponent
                </div>
                <div class="col-md-9">
                    <p class="text-justify"><b>A. Self Care:</b> Code the patient’s need for assistance with
                        bathing, dressing, using the toilet, or eating prior to the
                        current illnesss, exacerbation, or injury.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    @component($selectComboBtn, [
                        'name' => 'GG0100B',
                        'class' => 'form-control',
                        'checkThis' => $data->GG0100B,
                        'data' => $GG0100values
                    ])
                    @endcomponent
                </div>
                <div class="col-md-9">
                    <p class="text-justify"><b>B. Indoor Mobility (Ambulation):</b> Code the patient’s need
                        for assistance with walking from room to room (with or
                        without a device such as cane, crutch or walker) prior to
                        the current illness, exacerbation, or injury.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    @component($selectComboBtn, [
                        'name' => 'GG0100C',
                        'checkThis' => $data->GG0100C,
                        'class' => 'form-control',
                        'data' => $GG0100values
                    ])
                    @endcomponent
                </div>
                <div class="col-md-9">
                    <p class="text-justify"><b>C. Stairs:</b> Code the patient’s need for assistance with
                        internal or external stairs (with or without a device such
                        as cane, crutch, or walker) prior to the current illness,
                        exacerbation or injury.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    @component($selectComboBtn, [
                        'name' => 'GG0100D',
                        'checkThis' => $data->GG0100D,
                        'class' => 'form-control',
                        'data' => $GG0100values
                    ])
                    @endcomponent
                </div>
                <div class="col-md-9">
                    <p class="text-justify"> <b>D. Functional Cognition:</b> Code the patient’s need for
                        assistance with planning regular tasks, such as shopping
                        or remembering to take medication prior to the current
                        illness, exacerbation, or injury.</p>
                </div>
            </div>
        </div>
    </div>
@endcomponent

@component($cardComponent, [
    'title' => '(GG0110) Prior Device Use',
    'guide' => 'GG0110',
    ])
     @component($checkBoxBtn, [
        'title' => ' Indicate devices and aids used by the patient prior to the current illness,
                exacerbation, or injury.',
        'groupName' => 'GG0110',
        'data' => [
            'GG0110A' => [
                'value' => '1',
                'text' => 'A. Manual wheelchair',
                'checkThis' => $data->GG0110A,
                // 'required' => true,
                // 'data_parent' => 13,
                // 'guide' => 'GG0110',
            ],
            'GG0110B' => [
                'value' => '1',
                'text' => 'B. Motorized wheelchair and/or scooter',
                'checkThis' => $data->GG0110B,
                // 'required' => true,
                // 'data_parent' => 13,
                // 'guide' => 'GG0110',
            ],
            'GG0110C' => [
                'value' => '1',
                'text' => 'C. Mechanical lift',
                'checkThis' => $data->GG0110C,
                // 'required' => true,
                // 'data_parent' => 13,
                // 'guide' => 'GG0110',
            ],
            'GG0110D' => [
                'value' => '1',
                'text' => 'D. Walker',
                'checkThis' => $data->GG0110D,
                // 'required' => true,
                // 'data_parent' => 13,
                // 'guide' => 'GG0110',
            ],
            'GG0110E' => [
                'value' => '1',
                'text' => 'E. Orthotics/Prosthetics ',
                'checkThis' => $data->GG0110E,
                // 'required' => true,
                // 'data_parent' => 13,
                // 'guide' => 'GG0110',
            ],
            'GG0110Z' => [
                'value' => '1',
                'text' => 'Z. None of the above',
                'checkThis' => $data->GG0110Z,
                // 'required' => true,
                // 'data_parent' => 13,
                // 'guide' => 'GG0110',
            ]
        ]
    ])
    @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(GG0130) Self-Care',
    'subTitle' => "Code the patient’s usual performance at SOC/ROC for each activity using the
        6-point scale. If activity was not attempted at SOC/ROC, code the reason. Code the patient’s
        discharge goal(s) using the 6-point scale. Use of codes 07, 09, 10 or 88 is permissible to code
        discharge goal(s)."
    ])
<div class="row">
    <div class="col-md-12">
        @component($GG01XXSectionCoding) @endcomponent
    </div>
    <div class="col-xs-12 font-sz-df">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>1. Soc/Roc Performace</th>
                        <th>2. Discharge Goal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130A1',
                                'checkThis' => $data->GG0130A1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130A2',
                                'checkThis' => $data->GG0130A2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>A. Eating:</b> The ability to use suitable utensils to bring food and/or liquid to the
                            mouth and swallow food and/or liquid once the meal is placed before the
                            patient.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130B1',
                                'checkThis' => $data->GG0130B1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130B2',
                                'checkThis' => $data->GG0130B2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>B. Oral Hygiene:</b> The ability to use suitable items to clean teeth.
                            Dentures (if applicable): The ability to remove and replace dentures
                            from and to the mouth, and manage equipment for soaking and rinsing them.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130C1',
                                'checkThis' => $data->GG0130C1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130C2',
                                'checkThis' => $data->GG0130C2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>C. Toileting Hygiene:</b> The ability to maintain perineal hygiene, adjust clothes
                            before and after voiding or having a bowel movement. If managing an ostomy,
                            include wiping the opening but not managing equipment.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130E1',
                                'checkThis' => $data->GG0130E1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130E2',
                                'checkThis' => $data->GG0130E2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>E. Shower/bathe self:</b> The ability to bathe self, including washing,
                            rinsing, and drying self (excludes washing of back and hair).
                            Does not include transferring in/out of tub/shower.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130F1',
                                'checkThis' => $data->GG0130F1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130F2',
                                'checkThis' => $data->GG0130F2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>F. Upper body dressing:</b> The ability to dress and undress above the waist;
                            including fasteners, if applicable.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130G1',
                                'checkThis' => $data->GG0130G1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130G2',
                                'checkThis' => $data->GG0130G2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>G. Lower body dressing:</b> The ability to dress and undress below the waist,
                            including fasteners; does not include footwear.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130H1',
                                'checkThis' => $data->GG0130H1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0130H2',
                                'checkThis' => $data->GG0130H2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>H. Putting on/taking off footwear:</b> The ability to put on and take off
                            socks and shoes or other footwear that is appropriate for safe mobility;
                            including fasteners, if applicable.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endcomponent

@component($cardComponent, [
    'title' => '(GG0170) Mobility',
    'subTitle' => "Code the patient’s usual performance at SOC/ROC for each activity using the 6-point scale. If activity was
        not attempted at SOC/ROC, code the reason. Code the patient’s discharge goal(s) using the 6-point scale.
        Use of codes 07, 09, 10 or 88 is permissible to code discharge goal(s)."
    ])
<div class="row">
    <div class="col-md-12">
        @component($GG01XXSectionCoding) @endcomponent
    </div>
    <div class="col-xs-12 font-sz-df">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>1. Soc/Roc Performace</th>
                        <th>2. Discharge Goal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170A1',
                                'checkThis' => $data->GG0170A1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170A2',
                                'checkThis' => $data->GG0170A2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>A. Roll left and right:</b>  The ability to roll from lying on back to
                            left and right side, and return to lying on back on the bed.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170B1',
                                'checkThis' => $data->GG0170B1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170B2',
                                'checkThis' => $data->GG0170B2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>B. Sit to lying:</b> The ability to move from sitting on side of bed to
                            lying flat on the bed.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170C_MOBILITY_SOCROC_PERF',
                                'checkThis' => $data->GG0170C_MOBILITY_SOCROC_PERF,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170C_MOBILITY_DSCHG_GOAL',
                                'checkThis' => $data->GG0170C_MOBILITY_DSCHG_GOAL,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>C. Lying to sitting on side of bed:</b> The ability to move from lying on
                            the back to sitting on the side of the bed with feet flat on the floor, and
                            with no back support.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170D1',
                                'checkThis' => $data->GG0170D1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170D2',
                                'checkThis' => $data->GG0170D2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>D. Sit to stand:</b> The ability to come to a standing position from
                            sitting in a chair, wheelchair, or on the side of the bed.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170E1',
                                'checkThis' => $data->GG0170E1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170E2',
                                'checkThis' => $data->GG0170E2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>E. Chair/bed-to-chair transfer:</b>The ability to transfer to and from
                            a bed to a chair (or wheelchair).
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170F1',
                                'checkThis' => $data->GG0170F1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170F2',
                                'checkThis' => $data->GG0170F2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>F. Toilet tranfer:</b> The ability to get on and off a toilet or commode.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170G1',
                                'checkThis' => $data->GG0170G1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170G2',
                                'checkThis' => $data->GG0170G2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>G. Car Transfer:</b> The ability to transfer in and out of a car or van on the
                            passenger side. Does not include the ability to open/close door or fasten seat
                            belt.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170I1',
                                'checkThis' => $data->GG0170I1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170I2',
                                'checkThis' => $data->GG0170I2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>I. Walk 10 feet:</b> Once standing, the ability to walk at least 10 feet in a room,
                            corridor, or similar space.
                            If SOC/ROC performance is coded 07, 09, 10 or 88, skip to GG0170M, 1 step
                            (curb)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170J1',
                                'checkThis' => $data->GG0170J1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170J2',
                                'checkThis' => $data->GG0170J2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>J. Walk 50 feet with two turns:</b> Once standing, the ability to walk 50 feet and
                            make two turns.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170K1',
                                'checkThis' => $data->GG0170K1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170K2',
                                'checkThis' => $data->GG0170K2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>K. Walk 150 feet:</b> Once standing, the ability to walk at least 150 feet in a corridor
                            or similar space.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170L1',
                                'checkThis' => $data->GG0170L1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170L2',
                                'checkThis' => $data->GG0170L2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>L. Walking 10 feet on uneven surfaces:</b> The ability to walk 10 feet on uneven
                            or sloping surfaces (indoor or outdoor), such as turf or gravel.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170M1',
                                'checkThis' => $data->GG0170M1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170M2',
                                'checkThis' => $data->GG0170M2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>M. 1 step (curb):</b> The ability to go up and down a curb and/or up and down one
                            step. <br>
                            If SOC/ROC performance is coded 07, 09, 10 or 88, skip to GG0170P,
                            Picking up object.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170N1',
                                'checkThis' => $data->GG0170N1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170N2',
                                'checkThis' => $data->GG0170N2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>N. 4 steps:</b> The ability to go up and down four steps with or without a rail.
                            If SOC/ROC performance is coded 07, 09, 10 or 88, skip to GG0170P,
                            Picking up object.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170O1',
                                'checkThis' => $data->GG0170O1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170O2',
                                'checkThis' => $data->GG0170O2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>O. 12 steps:</b> The ability to go up and down 12 steps with or without a
                            rail.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170P1',
                                'checkThis' => $data->GG0170P1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170P2',
                                'checkThis' => $data->GG0170P2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>P. Picking up object:</b> The ability to bend/stoop from a standing position to pick
                            up a small object, such as a spoon, from the floor.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @component($radioBtn, [
                                'name' => 'GG0170Q1',
                                'checkThis' => $data->GG0170Q1,
                                'data' => [
                                    '0' => '0. No → Skip GG0170R, GG0170RR1, GG0170S, and GG0170SS1',
                                    '1' => '1. Yes → Continue to GG0170R, Wheel 50 feet with two turns'
                                ],
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>Q. Does patient use wheelchair and/or scooter?</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170R1',
                                'checkThis' => $data->GG0170R1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170R2',
                                'checkThis' => $data->GG0170R2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>R. Wheel 50 feet with two turns:</b> Once seated in wheelchair/scooter,
                            the ability to wheel at least 50 feet and make two turns.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @component($radioBtn, [
                                'name' => 'GG0170RR1',
                                'checkThis' => $data->GG0170RR1,
                                'data' => [
                                    '1' => '1. Manual',
                                    '2' => '2. Motorized'
                                ],
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>RR1.Indicate the type of wheelchair or scooter used.</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170S1',
                                'checkThis' => $data->GG0170S1,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            @component($selectComboBtn, [
                                'name' => 'GG0170S2',
                                'checkThis' => $data->GG0170S2,
                                'class' => 'form-control',
                                'data' => $GG01XXvalues,
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>S. Wheel 150 feet:</b> Once seated in wheelchair/scooter, the ability to
                            wheel at least 150 feet in a corridor or similar space.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @component($radioBtn, [
                                'name' => 'GG0170SS1',
                                'checkThis' => $data->GG0170SS1,
                                'data' => [
                                    '1' => '1. Manual',
                                    '2' => '2. Motorized'
                                ],
                            ])
                            @endcomponent
                        </td>
                        <td>
                            <b>SS1. Indicate the type of wheelchair or scooter used.</b>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endcomponent
