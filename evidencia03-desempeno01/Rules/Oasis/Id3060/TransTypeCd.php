<?php

namespace App\Rules\Oasis\Id3060;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Collection;

class TransTypeCd implements Rule
{
    protected $values;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct() {
        $this->values = new Collection([1, 2, 3]);
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
        return $this->values->contains($TRANS_TYPE_CD);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Only the coded values listed in the "Item Values" table of the Detailed Data
            Specifications Report may be submitted for this item.';
    }
}
