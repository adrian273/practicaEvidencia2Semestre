<?php

namespace App\Rules\Oasis;

use Illuminate\Contracts\Validation\Rule;

class Id3090 implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (!is_null($value))
            return $value >= 0 && $value <= 99;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The submitted value must be greater than or equal to
            the minimum value listed in the table (0 - 99). [Id 3090]';
    }
}
