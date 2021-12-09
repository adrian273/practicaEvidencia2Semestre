<?php

namespace App\Rules\Oasis;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class Id3330 implements Rule
{
    protected $M0090_INFO_COMPLETED_DT;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct( $M0090_INFO_COMPLETED_DT )
    {
        $this->M0090_INFO_COMPLETED_DT = $M0090_INFO_COMPLETED_DT;
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
        // Check Later This one
        if ($TRANS_TYPE_CD == 1) {
            $now = Carbon::now();
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Submission date minus should be less than or equal to 30 days.';
    }
}
