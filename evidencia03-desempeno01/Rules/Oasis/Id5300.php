<?php

namespace App\Rules\Oasis;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Collection;

class Id5300 implements Rule
{

    protected $M0100_ASSMT_REASON;
    protected $M0906_DC_TRAN_DTH_DT;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($M0100_ASSMT_REASON, $M0906_DC_TRAN_DTH_DT)
    {
        $this->M0100_ASSMT_REASON = $M0100_ASSMT_REASON;
        $this->M0906_DC_TRAN_DTH_DT = $M0906_DC_TRAN_DTH_DT;
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
        $list = new Collection(['01', '03', '04', '05']);
        if ($TRANS_TYPE_CD == 3 && $list->contains($this->M0100_ASSMT_REASON)) {
            return $this->M0906_DC_TRAN_DTH_DT == "" || $this->M0906_DC_TRAN_DTH_DT == '^';
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'id 5300.';
    }
}
