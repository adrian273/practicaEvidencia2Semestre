<?php

namespace App\Rules\Oasis;

use Illuminate\Contracts\Validation\Rule;

class Id3341 implements Rule
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
        //$TRANS_TYPE_CD = 2; // For Testing
        if ($TRANS_TYPE_CD == 2 || $TRANS_TYPE_CD == 3)
            return $this->CORRECTION_NUM != 0;
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Correction number must not equal 0';
    }
}
