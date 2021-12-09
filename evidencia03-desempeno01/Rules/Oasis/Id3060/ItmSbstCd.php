<?php

namespace App\Rules\Oasis\Id3060;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Collection;

class ItmSbstCd implements Rule
{
    protected $values;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->values = new Collection([
            '01', '03', '04', '05', '06', '07', '08', '09', 'XX'
        ]);
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $ITM_SBST_CD)
    {
        return $this->values->contains($ITM_SBST_CD);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "Only the coded values listed in the Itm Sbst Cd 'Item Values' ";
    }
}
