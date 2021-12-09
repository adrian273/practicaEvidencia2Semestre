<?php

namespace App\Rules\Oasis;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Collection;

class Id9160 implements Rule
{
    protected $M0100_ASSMT_REASON;
    protected $ITM_SBST_CD;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($M0100_ASSMT_REASON, $ITM_SBST_CD)
    {
        $this->M0100_ASSMT_REASON = $M0100_ASSMT_REASON;
        $this->ITM_SBST_CD = $ITM_SBST_CD;
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
        $collection = new Collection([
            '01', '03', '04', '05', '06', '07', '08', '09', 'XX'
        ]);

        if ($TRANS_TYPE_CD == 1 || $TRANS_TYPE_CD == 2) {
            switch ($this->M0100_ASSMT_REASON) {
                case "01":
                    return $this->ITM_SBST_CD == $collection[0];
                    break;
                case "03":
                    return $this->ITM_SBST_CD == $collection[1];
                    break;
                case "04":
                    return $this->ITM_SBST_CD == $collection[2];
                    break;
                case "05":
                    return $this->ITM_SBST_CD == $collection[3];
                    break;
                case "06":
                    return $this->ITM_SBST_CD == $collection[4];
                    break;
                case "07":
                    return $this->ITM_SBST_CD == $collection[5];
                    break;
                case "08":
                    return $this->ITM_SBST_CD == $collection[6];
                    break;
                case "09":
                    return $this->ITM_SBST_CD == $collection[7];
                    break;
            }
        }
        else if ($TRANS_TYPE_CD == 1 && $collection->contains($this->M0100_ASSMT_REASON)) {
            return $this->ITM_SBST_CD == $collection[8];
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
        return "Item ITM_SBST_CD [ {$this->ITM_SBST_CD} ] has be
            same value that M0100 REASON [ {$this->M0100_ASSMT_REASON} ]";
    }
}
