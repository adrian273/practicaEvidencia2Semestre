<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Modules\Home\Http\Library\Oasis\OasisLibrary;

class OasisDSoc extends Model
{
    //
    public function getM1021PrimaryDiagCdTextAttribute() {
        return $this->getIcd10Code($this->M1021_PRIMARY_DIAG_ICD);
    }

    public function getM1023OthDiag1IcdTextAttribute() {
        return $this->getIcd10Code($this->M1023_OTH_DIAG1_ICD);
    }

    public function getM1023OthDiag2IcdTextAttribute() {
        return $this->getIcd10Code($this->M1023_OTH_DIAG2_ICD);
    }

    public function getM1023OthDiag3IcdTextAttribute() {
        return $this->getIcd10Code($this->M1023_OTH_DIAG3_ICD);
    }

    public function getM1023OthDiag4IcdTextAttribute() {
        return $this->getIcd10Code($this->M1023_OTH_DIAG4_ICD);
    }

    public function getM1023OthDiag5IcdTextAttribute() {
        return $this->getIcd10Code($this->M1023_OTH_DIAG5_ICD);
    }

    public function getIcd10Code( $item ) {
        if ($item != null) {
            $text = Icd10Master::where('code_dec', $item)->first();
            return $text;
        }
    }

    public function getM0030StartCareDtAttribute( $value ) {
        return OasisLibrary::strToDate($value);
    }

    public function getM0066PatBirthDtAttribute( $value ) {
        return  OasisLibrary::strToDate($value);
    }

    function getM0090InfoCompletedDtAttribute( $value ) {
        return  OasisLibrary::strToDate($value);
    }

    function getM0102PhysnOrdrdSocrocDtAttribute( $value ) {
        return  OasisLibrary::strToDate($value);
    }

    function getM0104PhysnRfrlDtAttribute( $value ) {
        return  OasisLibrary::strToDate($value);
    }

    function getM1005InpDischargeDtAttribute( $value ) {
        return  OasisLibrary::strToDate($value);
    }

}
