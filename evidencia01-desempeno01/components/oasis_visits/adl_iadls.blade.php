@component($cardComponent, [
    'title' => '(M1800) Grooming',
    ])
        @component($radioBtn, [
            'name' => 'M1800_CRNT_GROOMING',
            'checkThis' => $data->M1800_CRNT_GROOMING,
            'title' => 'Current ability to tend safely to personal hygiene needs
                (specifically: washing face and hands, hair care, shaving or make up,
                teeth or denture care, or fingernail care).',
            'data' => [
                '00' => 'Able to groom self unaided, with or without the use of assistive devices or adapted methods',
                '01' => 'Grooming utensils must be placed within reach before able to complete grooming activities',
                '02' => 'Someone must assist the patient to groom self',
                '03' => 'Patient depends entirely upon someone else for grooming needs'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1810) Ability to Dress Upper Body',
    ])
        @component($radioBtn, [
            'name' => 'M1810_CRNT_DRESS_UPPER',
            'checkThis' => $data->M1810_CRNT_DRESS_UPPER,
            'title' => 'Current Ability to Dress Upper Body safely (with or without dressing aids)
                including undergarments, pullovers, front-opening shirts and blouses, managing zippers,
                buttons, and snaps.',
            'data' => [
                '00' => 'Able to get clothes out of closets and drawers, put them on and remove them from
                    the upper body without assistance',
                '01' => 'Able to dress upper body without assistance if clothing is laid out or handed to the patient',
                '02' => 'Someone must help the patient put on upper body clothing',
                '03' => 'Patient depends entirely upon another person to dress the upper body'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1820) Ability to Dress Lower Body',
    ])
        @component($radioBtn, [
            'name' => 'M1820_CRNT_DRESS_LOWER',
            'checkThis' => $data->M1820_CRNT_DRESS_LOWER,
            'title' => 'Current Ability to Dress Lower Body safely (with or without dressing aids)
                including undergarments, slacks, socks or nylons, shoes.',
            'data' => [
                '00' => 'Able to obtain, put on, and remove clothing and shoes without assistance',
                '01' => 'Able to dress lower body without assistance if clothing and shoes are laid out or handed to the patient',
                '02' => 'Someone must help the patient put on undergarments, slacks, socks or nylons, and shoes',
                '03' => 'Patient depends entirely upon another person to dress lower body'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1830) Bathing',
    ])
        @component($radioBtn, [
            'name' => 'M1830_CRNT_BATHG',
            'checkThis' => $data->M1830_CRNT_BATHG,
            'title' => 'Current ability to wash entire body safely. Excludes grooming
                (washing face, washing hands, and shampooing hair).',
            'data' => [
                '00' => 'Able to bathe self in shower or tub independently, including getting in and out of tub/shower',
                '01' => 'With the use of devices, is able to bathe self in shower or tub independently including getting in and out of the tub/shower',
                '02' => 'Able to bathe in shower or tub with the intermittent assistance of another person: (a) for intermittent supervision or encouragement or
                        reminders, OR (b) to get in and out of the shower or tub, OR ( c) for washing difficult to reach areas',
                '03' => '	Able to participate in bathing self in shower or tub, but requires presence of another person throughout the bath for assistance or supervision',
                '04' => 'Unable to use the shower or tub, but able to bathe self independently with or without the user of devices at the sink in chair, or on commode',
                '05' => 'Unable to use the shower or tub, but able to participate in bathing self in bed, at the sink, in bedside chair, or on commode, with the assistance or supervision of another person',
                '06' => 'Unable to participate effectively in bathing and is bathed totally by another person'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1840) Toilet Transferring',
    ])
        @component($radioBtn, [
            'name' => 'M1840_CRNT_TOILTG',
            'checkThis' => $data->M1840_CRNT_TOILTG,
            'title' => 'Current ability to get to and from the toilet or bedside
                commode safely and transfer on and off toilet/commode.',
            'data' => [
                '00' => 'Able to get to and from the toilet and transfer independently with or without a device',
                '01' => 'When reminded, assisted, or supervised by another person, able to get to and from the toilet and transfer',
                '02' => 'Unable to get to and from the toilet but is able to use a bedside commode (with or without assistance)',
                '03' => 'Unable to get to and from the toilet or bedside commode but is able to use a bedpan/urinal independently',
                '04' => 'Is totally dependent in toileting'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1845) Toileting Hygiene',
    ])
        @component($radioBtn, [
            'name' => 'M1845_CRNT_TOILTG_HYGN',
            'checkThis' => $data->M1845_CRNT_TOILTG_HYGN,
            'title' => 'Current ability to maintain perineal hygiene safely, adjust clothes and/or
                incontinence pads before and after using toilet, commode, bedpan, urinal. If managing ostomy,
                includes cleaning area around stoma, but not managing equipment.',
            'data' => [
                '00' => 'Able to manage toileting hygiene and clothing management without assistance',
                '01' => 'Able to manage toileting hygiene and clothing management without assistance if
                    supplies/implements are laid out for the patient',
                '02' => 'Someone must help the patient to maintain toileting hygiene and/or adjust clothing',
                '03' => 'Patient depends entirely upon another person to maintain toileting hygiene'
            ],
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1850) Transferring',
    ])
        @component($radioBtn, [
            'name' => 'M1850_CRNT_TRNSFRNG',
            'checkThis' => $data->M1850_CRNT_TRNSFRNG,
            'title' => 'Current ability to move safely from bed to chair, or ability to turn and
                position self in bed if patient is bedfast.',
            'data' => [
                '00' => 'Able to independently transfer',
                '01' => 'Able to transfer with minimal human assistance or with use of an assistive device',
                '02' => 'Able to bear weight and pivot during the transfer but unable to transfer self',
                '03' => 'Unable to transfer self and is unable to bear weight or pivot when transferred by another person',
                '04' => 'Bedfast, unable to transfer but is able to turn and position self in bed',
                '05' => 'Bedfast, unable to transfer and is unable to turn and position self'
            ]
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1860) Ambulation/Locomotion',
    ])
        @component($radioBtn, [
            'name' => 'M1860_CRNT_AMBLTN',
            'checkThis' => $data->M1860_CRNT_AMBLTN,
            'title' => 'Current ability to walk safely, once in a standing position, or use a
                wheelchair, once in a seated position, on a variety of surfaces.',
            'data' => [
                '00' => 'Able to independently walk on even and uneven surfaces and negotiate stairs with or without
                    railings (specifically: needs no human assistance or assistive device)',
                '01' => 'With the use of a one-handed device (for example, cane, single crutch, hemi-walker),
                    able to independently walk on even and uneven surfaces and negotiate stairs with or without railings',
                '02' => 'Requires use of a two-handed device (for example, walker or crutches) to walk alone on a level surface
                    and/or requires human supervision or assistance to negotiate stairs or steps or uneven surfaces',
                '03' => 'Able to walk only with the supervision or assistance of another person at all times',
                '04' => 'Chairfast, unable to ambulate but is able to wheel self independently',
                '05' => 'Chairfast, unable to ambulate and is unable to wheel self',
                '06' => 'Bedfast, unable to ambulate or be up in a chair'
            ]
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1870) Feeding or Eating',
    ])
        @component($radioBtn, [
            'name' => 'M1870_CRNT_FEEDING',
            'checkThis' => $data->M1870_CRNT_FEEDING,
            'title' => 'Current ability to feed self meals and snacks safely. Note: This refers only to
                    the process of eating, chewing, and swallowing, not preparing the food to be eaten.',
            'data' => [
                '00' => 'Able to independently feed self',
                '01' => 'Able to feed self independently but requires: (a) meal set-up; OR (b) intermittent assistance or
                    supervision from another person; OR (c) a liquid, pureed or ground meat diet',
                '02' => 'Unable to feed self and must be assisted or supervised throughout the meal/snack',
                '03' => 'Able to take in nutrients orally and receives supplemental nutrients though a nasogastric
                    tube or gastrostomy',
                '04' => 'Unable to take in nutrients orally and is fed nutrients through a nasogastric tube or gastrostomy',
                '05' => 'Unable to take in nutrients orally or by tube feeding'
            ]
        ])
        @endcomponent
@endcomponent

@component($cardComponent, [
    'title' => '(M1910) Falls Risk Assessment',
    ])
        @component($radioBtn, [
            'name' => 'M1910_MLT_FCTR_FALL_RISK_ASMT',
            'checkThis' => $data->M1910_MLT_FCTR_FALL_RISK_ASMT,
            'title' => 'Has this patient had a multi-factor Falls Risk Assessment using a
                standardized, validated assessment tool?',
            'data' => [
                '00' => 'No',
                '01' => 'Yes, and it does not indicate a risk for falls',
                '02' => 'Yes, and it does indicate a risk for falls',
            ]
        ])
        @endcomponent
@endcomponent
