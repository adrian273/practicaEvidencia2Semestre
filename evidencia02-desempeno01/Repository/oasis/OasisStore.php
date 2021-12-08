<?php

namespace Modules\Home\Http\Repository\oasis;

use Modules\Home\Http\Library\Oasis\OasisLibrary;
use App\Patient;

class OasisStore {

    private $oasisData;
    private $requestData;

    function __construct( $oasis, $request ) {
        $this->oasisData = $oasis;
        $this->requestData = $request;
    }

    function generalRecords() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->TRANS_TYPE_CD = $request->TRANS_TYPE_CD;
        $oasis->ITM_SBST_CD = $request->ITM_SBST_CD;
        $oasis->CORRECTION_NUM = $request->CORRECTION_NUM;
    }

    function patientTrackingSheet() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M0010_CCN = $request->M0010_CCN;
        $oasis->M0014_BRANCH_STATE = $request->M0014_BRANCH_STATE;
        $oasis->M0016_BRANCH_ID = $request->M0016_BRANCH_ID;
        $oasis->M0018_PHYSICIAN_ID = $request->M0018_PHYSICIAN_ID;
        $oasis->M0018_PHYSICIAN_UK = $request->M0018_PHYSICIAN_UK;
        $oasis->M0020_PAT_ID = $request->M0020_PAT_ID;
        $oasis->M0030_START_CARE_DT = OasisLibrary::dateToStr($request->M0030_START_CARE_DT);
        if ($request->has('edit_patient_trac_sheet') && $request->input('edit_patient_trac_sheet') == '1') {
            $patient = Patient::find(base64_decode($request->patient_id));
            $patient->first_name = $request->M0040_PAT_FNAME_temp;
            $oasis->M0040_PAT_FNAME = $request->M0040_PAT_FNAME_temp;
            $patient->save();
        } else {
            $oasis->M0040_PAT_FNAME = $request->M0040_PAT_FNAME;
        }

        $oasis->M0040_PAT_MI = $request->M0040_PAT_MI;
        $oasis->M0040_PAT_LNAME = $request->M0040_PAT_LNAME;
        $oasis->M0040_PAT_SUFFIX = $request->M0040_PAT_SUFFIX;
        $oasis->M0050_PAT_ST = $request->M0050_PAT_ST;
        $oasis->M0060_PAT_ZIP = $request->M0060_PAT_ZIP;
        $oasis->M0063_MEDICARE_NUM = $request->M0063_MEDICARE_NUM;
        $oasis->M0063_MEDICARE_NA = $request->M0063_MEDICARE_NA;
        $oasis->M0064_SSN = $request->M0064_SSN;
        $oasis->M0064_SSN_UK = $request->M0064_SSN_UK;
        $oasis->M0065_MEDICAID_NUM = $request->M0065_MEDICAID_NUM;
        $oasis->M0065_MEDICAID_NA = $request->M0065_MEDICAID_NA;
        $oasis->M0066_PAT_BIRTH_DT = OasisLibrary::dateToStr($request->M0066_PAT_BIRTH_DT);
        $oasis->M0069_PAT_GENDER = $request->M0069_PAT_GENDER;
        $oasis->M0140_ETHNIC_AI_AN = $request->M0140_ETHNIC_AI_AN;
        $oasis->M0140_ETHNIC_ASIAN = $request->M0140_ETHNIC_ASIAN;
        $oasis->M0140_ETHNIC_BLACK = $request->M0140_ETHNIC_BLACK;
        $oasis->M0140_ETHNIC_HISP = $request->M0140_ETHNIC_HISP;
        $oasis->M0140_ETHNIC_NH_PI = $request->M0140_ETHNIC_NH_PI;
        $oasis->M0140_ETHNIC_WHITE = $request->M0140_ETHNIC_WHITE;
        $oasis->M0150_CPAY_NONE = $request->M0150_CPAY_NONE;
        $oasis->M0150_CPAY_MCARE_FFS = $request->M0150_CPAY_MCARE_FFS;
        $oasis->M0150_CPAY_MCARE_HMO = $request->M0150_CPAY_MCARE_HMO;
        $oasis->M0150_CPAY_MCAID_FFS = $request->M0150_CPAY_MCAID_FFS;
        $oasis->M0150_CPAY_MCAID_HMO = $request->M0150_CPAY_MCAID_HMO;
        $oasis->M0150_CPAY_WRKCOMP = $request->M0150_CPAY_WRKCOMP;
        $oasis->M0150_CPAY_TITLEPGMS = $request->M0150_CPAY_TITLEPGMS;
        $oasis->M0150_CPAY_OTH_GOVT = $request->M0150_CPAY_OTH_GOVT;
        $oasis->M0150_CPAY_PRIV_INS = $request->M0150_CPAY_PRIV_INS;
        $oasis->M0150_CPAY_PRIV_HMO = $request->M0150_CPAY_PRIV_HMO;
        $oasis->M0150_CPAY_SELFPAY = $request->M0150_CPAY_SELFPAY;
        $oasis->M0150_CPAY_OTHER = $request->M0150_CPAY_OTHER;
        $oasis->M0150_CPAY_UK = $request->M0150_CPAY_UK;
    }

    function clinicalRecord() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M0080_ASSESSOR_DISCIPLINE = $request->M0080_ASSESSOR_DISCIPLINE;
        $oasis->M0090_INFO_COMPLETED_DT = OasisLibrary::dateToStr($request->M0090_INFO_COMPLETED_DT);
        $oasis->M0100_ASSMT_REASON = $request->M0100_ASSMT_REASON;
        $oasis->M0102_PHYSN_ORDRD_SOCROC_DT = OasisLibrary::dateToStr($request->M0102_PHYSN_ORDRD_SOCROC_DT);
        $oasis->M0102_PHYSN_ORDRD_SOCROC_DT_NA = $request->M0102_PHYSN_ORDRD_SOCROC_DT_NA;
        $oasis->M0104_PHYSN_RFRL_DT = OasisLibrary::dateToStr($request->M0104_PHYSN_RFRL_DT);
        $oasis->M0110_EPISODE_TIMING = $request->M0110_EPISODE_TIMING;
    }

    function patientHistory() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M1000_DC_LTC_14_DA = $request->M1000_DC_LTC_14_DA;
        $oasis->M1000_DC_SNF_14_DA = $request->M1000_DC_SNF_14_DA;
        $oasis->M1000_DC_IPPS_14_DA = $request->M1000_DC_IPPS_14_DA;
        $oasis->M1000_DC_LTCH_14_DA = $request->M1000_DC_LTCH_14_DA;
        $oasis->M1000_DC_IRF_14_DA = $request->M1000_DC_IRF_14_DA;
        $oasis->M1000_DC_PSYCH_14_DA = $request->M1000_DC_PSYCH_14_DA;
        $oasis->M1000_DC_OTH_14_DA = $request->M1000_DC_OTH_14_DA;
        $oasis->M1000_DC_NONE_14_DA = $request->M1000_DC_NONE_14_DA;
        $oasis->M1005_INP_DISCHARGE_DT = OasisLibrary::dateToStr($request->M1005_INP_DISCHARGE_DT);
        $oasis->M1005_INP_DSCHG_UNKNOWN = $request->M1005_INP_DSCHG_UNKNOWN;
        $oasis->M1021_PRIMARY_DIAG_ICD = $request->M1021_PRIMARY_DIAG_ICD;
        $oasis->M1021_PRIMARY_DIAG_SEVERITY = $request->M1021_PRIMARY_DIAG_SEVERITY;
        $oasis->M1023_OTH_DIAG1_ICD = $request->M1023_OTH_DIAG1_ICD;
        $oasis->M1023_OTH_DIAG1_SEVERITY = $request->M1023_OTH_DIAG1_SEVERITY;
        $oasis->M1023_OTH_DIAG2_ICD = $request->M1023_OTH_DIAG2_ICD;
        $oasis->M1023_OTH_DIAG2_SEVERITY = $request->M1023_OTH_DIAG2_SEVERITY;
        $oasis->M1023_OTH_DIAG3_ICD = $request->M1023_OTH_DIAG3_ICD;
        $oasis->M1023_OTH_DIAG3_SEVERITY = $request->M1023_OTH_DIAG3_SEVERITY;
        $oasis->M1023_OTH_DIAG4_ICD = $request->M1023_OTH_DIAG4_ICD;
        $oasis->M1023_OTH_DIAG4_SEVERITY = $request->M1023_OTH_DIAG4_SEVERITY;
        $oasis->M1023_OTH_DIAG5_ICD = $request->M1023_OTH_DIAG5_ICD;
        $oasis->M1023_OTH_DIAG5_SEVERITY = $request->M1023_OTH_DIAG5_SEVERITY;
        $oasis->M1028_ACTV_DIAG_PVD_PAD = $request->M1028_ACTV_DIAG_PVD_PAD;
        $oasis->M1028_ACTV_DIAG_DM = $request->M1028_ACTV_DIAG_DM;
        $oasis->M1028_ACTV_DIAG_NOA = $request->M1028_ACTV_DIAG_NOA;
        $oasis->M1030_THH_IV_INFUSION = $request->M1030_THH_IV_INFUSION;
        $oasis->M1030_THH_PAR_NUTRITION = $request->M1030_THH_PAR_NUTRITION;
        $oasis->M1030_THH_ENT_NUTRITION = $request->M1030_THH_ENT_NUTRITION;
        $oasis->M1030_THH_NONE_ABOVE = $request->M1030_THH_NONE_ABOVE;
        $oasis->M1033_HOSP_RISK_HSTRY_FALLS = $request->M1033_HOSP_RISK_HSTRY_FALLS;
        $oasis->M1033_HOSP_RISK_WEIGHT_LOSS = $request->M1033_HOSP_RISK_WEIGHT_LOSS;
        $oasis->M1033_HOSP_RISK_MLTPL_HOSPZTN = $request->M1033_HOSP_RISK_MLTPL_HOSPZTN;
        $oasis->M1033_HOSP_RISK_MLTPL_ED_VISIT = $request->M1033_HOSP_RISK_MLTPL_ED_VISIT;
        $oasis->M1033_HOSP_RISK_MNTL_BHV_DCLN = $request->M1033_HOSP_RISK_MNTL_BHV_DCLN;
        $oasis->M1033_HOSP_RISK_COMPLIANCE = $request->M1033_HOSP_RISK_COMPLIANCE;
        $oasis->M1033_HOSP_RISK_5PLUS_MDCTN = $request->M1033_HOSP_RISK_5PLUS_MDCTN;
        $oasis->M1033_HOSP_RISK_CRNT_EXHSTN = $request->M1033_HOSP_RISK_CRNT_EXHSTN;
        $oasis->M1033_HOSP_RISK_OTHR_RISK = $request->M1033_HOSP_RISK_OTHR_RISK;
        $oasis->M1033_HOSP_RISK_NONE_ABOVE = $request->M1033_HOSP_RISK_NONE_ABOVE;
        $oasis->M1060_HEIGHT_A = $request->M1060_HEIGHT_A;
        $oasis->M1060_WEIGHT_B = $request->M1060_WEIGHT_B;
    }

    function livingArragement() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M1100_PTNT_LVG_STUTN = $request->M1100_PTNT_LVG_STUTN;
    }

    function sensorStatus() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M1200_VISION = $request->M1200_VISION;
        $oasis->M1242_PAIN_FREQ_ACTVTY_MVMT = $request->M1242_PAIN_FREQ_ACTVTY_MVMT;
    }

    function integumentaryStatus() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M1306_UNHLD_STG2_PRSR_ULCR = $request->M1306_UNHLD_STG2_PRSR_ULCR;
        $oasis->M1311_NBR_PRSULC_STG2_A1 = $request->M1311_NBR_PRSULC_STG2_A1;
        $oasis->M1311_NBR_PRSULC_STG3_B1 = $request->M1311_NBR_PRSULC_STG3_B1;
        $oasis->M1311_NBR_PRSULC_STG4_C1 = $request->M1311_NBR_PRSULC_STG4_C1;
        $oasis->M1311_NSTG_DRSG_D1 = $request->M1311_NSTG_DRSG_D1;
        $oasis->M1311_NSTG_CVRG_E1 = $request->M1311_NSTG_CVRG_E1;
        $oasis->M1311_NSTG_DEEP_TSUE_F1 = $request->M1311_NSTG_DEEP_TSUE_F1;
        $oasis->M1322_NBR_PRSULC_STG1 = $request->M1322_NBR_PRSULC_STG1;
        $oasis->M1324_STG_PRBLM_ULCER = $request->M1324_STG_PRBLM_ULCER;
        $oasis->M1330_STAS_ULCR_PRSNT = $request->M1330_STAS_ULCR_PRSNT;
        $oasis->M1332_NBR_STAS_ULCR = $request->M1332_NBR_STAS_ULCR;
        $oasis->M1334_STUS_PRBLM_STAS_ULCR = $request->M1334_STUS_PRBLM_STAS_ULCR;
        $oasis->M1340_SRGCL_WND_PRSNT = $request->M1340_SRGCL_WND_PRSNT;
        $oasis->M1342_STUS_PRBLM_SRGCL_WND = $request->M1342_STUS_PRBLM_SRGCL_WND;
    }

    function respiratoryStatus() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M1400_WHEN_DYSPNEIC = $request->M1400_WHEN_DYSPNEIC;
    }

    function eliminationStatus() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M1600_UTI = $request->M1600_UTI;
        $oasis->M1610_UR_INCONT = $request->M1610_UR_INCONT;
        $oasis->M1620_BWL_INCONT = $request->M1620_BWL_INCONT;
        $oasis->M1630_OSTOMY = $request->M1630_OSTOMY;
    }

    function neuroEmotionalBehavioral() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M1700_COG_FUNCTION = $request->M1700_COG_FUNCTION;
        $oasis->M1710_WHEN_CONFUSED = $request->M1710_WHEN_CONFUSED;
        $oasis->M1720_WHEN_ANXIOUS = $request->M1720_WHEN_ANXIOUS;
        $oasis->M1730_STDZ_DPRSN_SCRNG = $request->M1730_STDZ_DPRSN_SCRNG;
        $oasis->M1730_PHQ2_LACK_INTRST = $request->M1730_PHQ2_LACK_INTRST;
        $oasis->M1730_PHQ2_DPRSN = $request->M1730_PHQ2_DPRSN;
        $oasis->M1740_BD_MEM_DEFICIT = $request->M1740_BD_MEM_DEFICIT;
        $oasis->M1740_BD_IMP_DECISN = $request->M1740_BD_IMP_DECISN;
        $oasis->M1740_BD_VERBAL = $request->M1740_BD_VERBAL;
        $oasis->M1740_BD_PHYSICAL = $request->M1740_BD_PHYSICAL;
        $oasis->M1740_BD_SOC_INAPPRO = $request->M1740_BD_SOC_INAPPRO;
        $oasis->M1740_BD_DELUSIONS = $request->M1740_BD_DELUSIONS;
        $oasis->M1740_BD_NONE = $request->M1740_BD_NONE;
        $oasis->M1745_BEH_PROB_FREQ = $request->M1745_BEH_PROB_FREQ;
    }

    function adlIadl() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M1800_CRNT_GROOMING = $request->M1800_CRNT_GROOMING;
        $oasis->M1810_CRNT_DRESS_UPPER = $request->M1810_CRNT_DRESS_UPPER;
        $oasis->M1820_CRNT_DRESS_LOWER = $request->M1820_CRNT_DRESS_LOWER;
        $oasis->M1830_CRNT_BATHG = $request->M1830_CRNT_BATHG;
        $oasis->M1840_CRNT_TOILTG = $request->M1840_CRNT_TOILTG;
        $oasis->M1845_CRNT_TOILTG_HYGN = $request->M1845_CRNT_TOILTG_HYGN;
        $oasis->M1850_CRNT_TRNSFRNG = $request->M1850_CRNT_TRNSFRNG;
        $oasis->M1860_CRNT_AMBLTN = $request->M1860_CRNT_AMBLTN;
        $oasis->M1870_CRNT_FEEDING = $request->M1870_CRNT_FEEDING;
        $oasis->M1910_MLT_FCTR_FALL_RISK_ASMT = $request->M1910_MLT_FCTR_FALL_RISK_ASMT;
    }

    function medications() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M2001_DRUG_RGMN_RVW = $request->M2001_DRUG_RGMN_RVW;
        $oasis->M2003_MDCTN_FLWP = $request->M2003_MDCTN_FLWP;
        $oasis->M2010_HIGH_RISK_DRUG_EDCTN = $request->M2010_HIGH_RISK_DRUG_EDCTN;
        $oasis->M2020_CRNT_MGMT_ORAL_MDCTN = $request->M2020_CRNT_MGMT_ORAL_MDCTN;
        $oasis->M2030_CRNT_MGMT_INJCTN_MDCTN = $request->M2030_CRNT_MGMT_INJCTN_MDCTN;
    }

    function careManagement() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M2102_CARE_TYPE_SRC_SPRVSN = $request->M2102_CARE_TYPE_SRC_SPRVSN;
    }

    function therapyNeedPlanOfCare() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->M2200_THER_NEED_NBR = $request->M2200_THER_NEED_NBR;
        $oasis->M2200_THER_NEED_NA = $request->M2200_THER_NEED_NA;
    }

    function functionalAbilitiesGoals() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->GG0100A = $request->GG0100A;
        $oasis->GG0100B = $request->GG0100B;
        $oasis->GG0100C = $request->GG0100C;
        $oasis->GG0100D = $request->GG0100D;
        $oasis->GG0110A = $request->GG0110A;
        $oasis->GG0110B = $request->GG0110B;
        $oasis->GG0110C = $request->GG0110C;
        $oasis->GG0110D = $request->GG0110D;
        $oasis->GG0110E = $request->GG0110E;
        $oasis->GG0110Z = $request->GG0110Z;
    }

    function selfCare() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->GG0130A1 = $request->GG0130A1;
        $oasis->GG0130A2 = $request->GG0130A2;
        $oasis->GG0130B1 = $request->GG0130B1;
        $oasis->GG0130B2 = $request->GG0130B2;
        $oasis->GG0130C1 = $request->GG0130C1;
        $oasis->GG0130C2 = $request->GG0130C2;
        $oasis->GG0130E1 = $request->GG0130E1;
        $oasis->GG0130E2 = $request->GG0130E2;
        $oasis->GG0130F1 = $request->GG0130F1;
        $oasis->GG0130F2 = $request->GG0130F2;
        $oasis->GG0130G1 = $request->GG0130G1;
        $oasis->GG0130G2 = $request->GG0130G2;
        $oasis->GG0130H1 = $request->GG0130H1;
        $oasis->GG0130H2 = $request->GG0130H2;
    }

    function mobility() {
        $oasis = $this->oasisData;
        $request = $this->requestData;
        $oasis->GG0170A1 = $request->GG0170A1;
        $oasis->GG0170A2 = $request->GG0170A2;
        $oasis->GG0170B1 = $request->GG0170B1;
        $oasis->GG0170C_MOBILITY_SOCROC_PERF = $request->GG0170C_MOBILITY_SOCROC_PERF;
        $oasis->GG0170C_MOBILITY_DSCHG_GOAL = $request->GG0170C_MOBILITY_DSCHG_GOAL;
        $oasis->GG0170D1 = $request->GG0170D1;
        $oasis->GG0170D2 = $request->GG0170D2;
        $oasis->GG0170E1 = $request->GG0170E1;
        $oasis->GG0170E2 = $request->GG0170E2;
        $oasis->GG0170F1 = $request->GG0170F1;
        $oasis->GG0170F2 = $request->GG0170F2;
        $oasis->GG0170G1 = $request->GG0170G1;
        $oasis->GG0170G2 = $request->GG0170G2;
        $oasis->GG0170I1 = $request->GG0170I1;
        $oasis->GG0170I2 = $request->GG0170I2;
        $oasis->GG0170J1 = $request->GG0170J1;
        $oasis->GG0170J2 = $request->GG0170J2;
        $oasis->GG0170K1 = $request->GG0170K1;
        $oasis->GG0170K2 = $request->GG0170K2;
        $oasis->GG0170L1 = $request->GG0170L1;
        $oasis->GG0170L2 = $request->GG0170L2;
        $oasis->GG0170M1 = $request->GG0170M1;
        $oasis->GG0170M2 = $request->GG0170M2;
        $oasis->GG0170N1 = $request->GG0170N1;
        $oasis->GG0170N2 = $request->GG0170N2;
        $oasis->GG0170O1 = $request->GG0170O1;
        $oasis->GG0170O2 = $request->GG0170O2;
        $oasis->GG0170P1 = $request->GG0170P1;
        $oasis->GG0170P2 = $request->GG0170P2;
        $oasis->GG0170Q1 = $request->GG0170Q1;
        $oasis->GG0170R1 = $request->GG0170R1;
        $oasis->GG0170R2 = $request->GG0170R2;
        $oasis->GG0170RR1 = $request->GG0170RR1;
        $oasis->GG0170S1 = $request->GG0170S1;
        $oasis->GG0170S2 = $request->GG0170S2;
        $oasis->GG0170SS1 = $request->GG0170SS1;
    }

    public function save() {
        $this->oasisData->save();
    }

}
