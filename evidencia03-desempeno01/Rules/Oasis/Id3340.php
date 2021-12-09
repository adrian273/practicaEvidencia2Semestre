<?php

namespace App\Rules\Oasis;

use Illuminate\Contracts\Validation\Rule;

class Id3340 implements Rule
{
    protected $CORRECTION_NUM;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct( $CORRECTION_NUM )
    {
        $this->CORRECTION_NUM = $CORRECTION_NUM;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $TRANS_TYPE_CD)
    {

        if($TRANS_TYPE_CD == 1) {
            return $this->CORRECTION_NUM == 0;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Correction Number must equal 0';
    }
}
