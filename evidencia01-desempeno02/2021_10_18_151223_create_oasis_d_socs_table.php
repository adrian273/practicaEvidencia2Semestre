<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOasisDSocsTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('oasis_d_socs', function (Blueprint $table) {
            $OASIS_TYPE_VALUES = [
                '01', '03', '04', '05',
                '06', '07', '08', '09', 'XX'
            ];

            // $BIN_VAL = Binary value (1, 0)
            // Values for Not checked  (0) or Checked (1)
            $BIN_VAL = ['0', '1'];
            $BIN_VAL_SKIP = ['0', '1', '^'];
            $BIN_VAL_NO_INFO = ['0', '1', '-'];

            $table->increments('id');
            $table->integer('calendar_id')->unsigned();
            $table->enum('oasis_type', $OASIS_TYPE_VALUES);
            $table->string('ASMT_SYS_CD', 10);
            $table->enum('ITM_SBST_CD', $OASIS_TYPE_VALUES);
            $table->string('ITM_SET_VRSN_CD', 10);
            $table->string('SPEC_VRSN_CD', 10);
            $table->integer('CORRECTION_NUM');
            $table->string('STATE_CD', 2);
            $table->string('HHA_AGENCY_ID', 16);
            $table->string('SFW_ID', 9)->nullable();
            $table->string('SFW_NAME', 30)->nullable();
            $table->string('SFW_EMAIL_ADR', 50)->nullable();
            $table->string('SFW_PROD_NAME', 50)->nullable();
            $table->string('SFW_PROD_VRSN_CD', 20)->nullable();
            $table->string('NATL_PRVDR_ID', 10)->nullable();
            $table->string('ACY_DOC_CD', 20)->nullable();
            $table->string('M0010_CCN', 6)->nullable();
            $table->string('M0014_BRANCH_STATE', 2)->nullable();
            $table->string('M0016_BRANCH_ID', 10)->nullable();
            $table->string('M0018_PHYSICIAN_ID', 10)->nullable();
            $table->enum('M0018_PHYSICIAN_UK', $BIN_VAL)->nullable();
            $table->string('M0020_PAT_ID', 20)->nullable();
            $table->date('M0030_START_CARE_DT');
            $table->date('M0032_ROC_DT')->nullable();
            $table->enum('M0032_ROC_DT_NA', $BIN_VAL);
            $table->string('M0040_PAT_FNAME', 12);
            $table->string('M0040_PAT_MI', 1)->nullable();
            $table->string('M0040_PAT_LNAME', 18);
            $table->string('M0040_PAT_SUFFIX', 3)->nullable();
            $table->string('M0050_PAT_ST', 2)->nullable();
            $table->string('M0060_PAT_ZIP', 11)->nullable();
            $table->string('M0063_MEDICARE_NUM', 12)->nullable();
            $table->enum('M0063_MEDICARE_NA', $BIN_VAL)->nullable();
            $table->string('M0064_SSN', 9)->nullable();
            $table->enum('M0064_SSN_UK', $BIN_VAL)->nullable();
            $table->string('M0065_MEDICAID_NUM', 14)->nullable();
            $table->enum('M0065_MEDICAID_NA', $BIN_VAL)->nullable();
            $table->string('M0066_PAT_BIRTH_DT', 8);
            $table->enum('M0069_PAT_GENDER', ["1", "2"]);
            $table->enum('M0140_ETHNIC_AI_AN', $BIN_VAL)->nullable();
            $table->enum('M0140_ETHNIC_ASIAN', $BIN_VAL)->nullable();
            $table->enum('M0140_ETHNIC_BLACK', $BIN_VAL)->nullable();
            $table->enum('M0140_ETHNIC_HISP', $BIN_VAL)->nullable();
            $table->enum('M0140_ETHNIC_NH_PI', $BIN_VAL)->nullable();
            $table->enum('M0140_ETHNIC_WHITE', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_NONE', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_MCARE_FFS', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_MCARE_HMO', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_MCAID_FFS', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_MCAID_HMO', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_WRKCOMP', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_TITLEPGMS', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_OTH_GOVT', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_PRIV_INS', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_PRIV_HMO', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_SELFPAY', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_OTHER', $BIN_VAL)->nullable();
            $table->enum('M0150_CPAY_UK', $BIN_VAL)->nullable();
            $table->enum('M0080_ASSESSOR_DISCIPLINE', $this->itemValues('01_04'))
                ->nullable();
            $table->date('M0090_INFO_COMPLETED_DT');
            $table->enum('M0100_ASSMT_REASON', $this->itemValues('01_09_NOT_02'));
            $table->date('M0102_PHYSN_ORDRD_SOCROC_DT')->nullable();
            $table->enum('M0102_PHYSN_ORDRD_SOCROC_DT_NA', $BIN_VAL_SKIP)->nullable();
            $table->date('M0104_PHYSN_RFRL_DT')->nullable();
            $table->enum('M0110_EPISODE_TIMING', $this->itemValues('01_02_WITH_UK_NA'))
                ->nullable();
            $table->enum('M1000_DC_LTC_14_DA', $BIN_VAL)->nullable();
            $table->enum('M1000_DC_SNF_14_DA', $BIN_VAL)->nullable();
            $table->enum('M1000_DC_IPPS_14_DA', $BIN_VAL)->nullable();
            $table->enum('M1000_DC_LTCH_14_DA', $BIN_VAL)->nullable();
            $table->enum('M1000_DC_IRF_14_DA', $BIN_VAL)->nullable();
            $table->enum('M1000_DC_PSYCH_14_DA', $BIN_VAL)->nullable();
            $table->enum('M1000_DC_OTH_14_DA', $BIN_VAL)->nullable();
            $table->enum('M1000_DC_NONE_14_DA', $BIN_VAL)->nullable();
            $table->date('M1005_INP_DISCHARGE_DT')->nullable();
            $table->enum('M1005_INP_DSCHG_UNKNOWN', $BIN_VAL_SKIP)->nullable();
            $table->enum('M1030_THH_IV_INFUSION', $BIN_VAL)->nullable();
            $table->enum('M1030_THH_PAR_NUTRITION', $BIN_VAL)->nullable();
            $table->enum('M1030_THH_ENT_NUTRITION', $BIN_VAL)->nullable();
            $table->enum('M1030_THH_NONE_ABOVE', $BIN_VAL)->nullable();
            $table->enum('M1100_PTNT_LVG_STUTN', $this->itemValues('01_15'))
                ->nullable();
            $table->enum('M1200_VISION', $this->itemValues('00_02'))
                ->nullable();
            $table->enum('M1242_PAIN_FREQ_ACTVTY_MVMT', $this->itemValues('00_04'))
                ->nullable();
            $table->enum('M1306_UNHLD_STG2_PRSR_ULCR', $BIN_VAL)->nullable();
            $table->date('M1307_OLDST_STG2_ONST_DT')->nullable();
            $table->enum('M1307_OLDST_STG2_AT_DSCHRG', $this->itemValues('01_02_WITH_NA_SKIP'))
                ->nullable();
            $table->enum('M1322_NBR_PRSULC_STG1', $this->itemValues('00_04'))
                ->nullable();
            $table->enum('M1324_STG_PRBLM_ULCER', $this->itemValues('01_04_WITH_NA'))
                ->nullable();
            $table->enum('M1330_STAS_ULCR_PRSNT', $this->itemValues('00_03'))
                ->nullable();
            $table->enum('M1332_NBR_STAS_ULCR', $this->itemValues('01_04_WITH_SKIP'))
                ->nullable();
            $table->enum('M1334_STUS_PRBLM_STAS_ULCR', $this->itemValues('01_03_WITH_SKIP'))
                ->nullable();
            $table->enum('M1340_SRGCL_WND_PRSNT', $this->itemValues('00_02'))
                ->nullable();
            $table->enum('M1342_STUS_PRBLM_SRGCL_WND', $this->itemValues('01_03_WITH_SKIP'))
                ->nullable();
            $table->enum('M1400_WHEN_DYSPNEIC', $this->itemValues('00_04'))
                ->nullable();
            $table->enum('M1600_UTI', $this->itemValues('00_01_WITH_NA_UK'))
                ->nullable();
            $table->enum('M1610_UR_INCONT', $this->itemValues('00_02'))
                ->nullable();
            $table->enum('M1620_BWL_INCONT', $this->itemValues('00_05_WITH_NA_UK'))
                ->nullable();
            $table->enum('M1630_OSTOMY', $this->itemValues('00_02'))
                ->nullable();
            $table->enum('M1700_COG_FUNCTION', $this->itemValues('00_04'))
                ->nullable();
            $table->enum('M1710_WHEN_CONFUSED', $this->itemValues('00_04_WITH_NA'))
                ->nullable();
            $table->enum('M1720_WHEN_ANXIOUS', $this->itemValues('00_03_WITH_NA'))
                ->nullable();
            $table->enum('M1730_STDZ_DPRSN_SCRNG', $this->itemValues('00_03'))
                ->nullable();
            $table->enum('M1730_PHQ2_LACK_INTRST', $this->itemValues('00_03_WITH_NA_SKIP'))
                ->nullable();
            $table->enum('M1730_PHQ2_DPRSN', $this->itemValues('00_03_WITH_NA_SKIP'))
                ->nullable();
            $table->enum('M1740_BD_MEM_DEFICIT', $BIN_VAL)->nullable();
            $table->enum('M1740_BD_IMP_DECISN', $BIN_VAL)->nullable();
            $table->enum('M1740_BD_VERBAL', $BIN_VAL)->nullable();
            $table->enum('M1740_BD_PHYSICAL', $BIN_VAL)->nullable();
            $table->enum('M1740_BD_SOC_INAPPRO', $BIN_VAL)->nullable();
            $table->enum('M1740_BD_DELUSIONS', $BIN_VAL)->nullable();
            $table->enum('M1740_BD_NONE', $BIN_VAL)->nullable();
            $table->enum('M1745_BEH_PROB_FREQ', $this->itemValues('00_05'))
                ->nullable();
            $table->enum('M1800_CRNT_GROOMING', $this->itemValues('00_03'))
                ->nullable();
            $table->enum('M1810_CRNT_DRESS_UPPER', $this->itemValues('00_03'))
                ->nullable();
            $table->enum('M1820_CRNT_DRESS_LOWER', $this->itemValues('00_03'))
                ->nullable();
            $table->enum('M1830_CRNT_BATHG', $this->itemValues('00_06'))
                ->nullable();
            $table->enum('M1840_CRNT_TOILTG', $this->itemValues('00_04'))
                ->nullable();
            $table->enum('M1845_CRNT_TOILTG_HYGN', $this->itemValues('00_03'))
                ->nullable();
            $table->enum('M1850_CRNT_TRNSFRNG', $this->itemValues('00_05'))
                ->nullable();
            $table->enum('M1860_CRNT_AMBLTN', $this->itemValues('00_06'))
                ->nullable();
            $table->enum('M1870_CRNT_FEEDING', $this->itemValues('00_05'))
                ->nullable();
            $table->enum('M1910_MLT_FCTR_FALL_RISK_ASMT', $this->itemValues('00_02'))
                ->nullable();
            $table->enum('M2010_HIGH_RISK_DRUG_EDCTN', $this->itemValues('00_01_WITH_NA_SKIP'))
                ->nullable();
            $table->enum('M2020_CRNT_MGMT_ORAL_MDCTN', $this->itemValues('00_03_WITH_NA_SKIP'))
                ->nullable();
            $table->enum('M2030_CRNT_MGMT_INJCTN_MDCTN', $this->itemValues('00_03_WITH_NA_SKIP'))
                ->nullable();
            $table->string('M2200_THER_NEED_NBR', 3)->nullable();
            $table->enum('M2200_THER_NEED_NA', $BIN_VAL)->nullable();
            $table->enum('M2310_ECR_MEDICATION', $BIN_VAL_SKIP)->nullable();
            $table->enum('M2310_ECR_HYPOGLYC', $BIN_VAL_SKIP)->nullable();
            $table->enum('M2310_ECR_OTHER', $BIN_VAL_SKIP)->nullable();
            $table->enum('M2310_ECR_UNKNOWN', $BIN_VAL_SKIP)->nullable();
            $table->enum('M2410_INPAT_FACILITY', $this->itemValues('00_04_WITH_NA'))
                ->nullable();
            $table->enum('M2420_DSCHRG_DISP', $this->itemValues('01_04_WITH_UK'))
                ->nullable();
            $table->date('M0906_DC_TRAN_DTH_DT')->nullable();
            $table->enum('TRANS_TYPE_CD', $this->itemValues('1_3'))
                ->nullable();
            $table->enum('M1033_HOSP_RISK_HSTRY_FALLS', $BIN_VAL)->nullable();
            $table->enum('M1033_HOSP_RISK_WEIGHT_LOSS', $BIN_VAL)->nullable();
            $table->enum('M1033_HOSP_RISK_MLTPL_HOSPZTN', $BIN_VAL)->nullable();
            $table->enum('M1033_HOSP_RISK_MLTPL_ED_VISIT', $BIN_VAL)->nullable();
            $table->enum('M1033_HOSP_RISK_MNTL_BHV_DCLN', $BIN_VAL)->nullable();
            $table->enum('M1033_HOSP_RISK_COMPLIANCE', $BIN_VAL)->nullable();
            $table->enum('M1033_HOSP_RISK_5PLUS_MDCTN', $BIN_VAL)->nullable();
            $table->enum('M1033_HOSP_RISK_CRNT_EXHSTN', $BIN_VAL)->nullable();
            $table->enum('M1033_HOSP_RISK_OTHR_RISK', $BIN_VAL)->nullable();
            $table->enum('M1033_HOSP_RISK_NONE_ABOVE', $BIN_VAL)->nullable();
            $table->enum('M1041_IN_INFLNZ_SEASON', $BIN_VAL)->nullable();
            $table->enum('M1046_INFLNZ_RECD_CRNT_SEASON', $this->itemValues('01_08'))
                ->nullable();
            $table->enum('M1051_PVX_RCVD_AGNCY', $BIN_VAL)->nullable();
            $table->enum('M1056_PVX_RSN_NOT_RCVD_AGNCY', $this->itemValues('01_04_WITH_SKIP'))
                ->nullable();
            $table->enum('M2102_CARE_TYPE_SRC_ADL', $this->itemValues('00_04'))
                ->nullable();
            $table->enum('M2102_CARE_TYPE_SRC_MDCTN', $this->itemValues('00_04'))
                ->nullable();
            $table->enum('M2102_CARE_TYPE_SRC_PRCDR', $this->itemValues('00_04'))
                ->nullable();
            $table->enum('M2102_CARE_TYPE_SRC_SPRVSN', $this->itemValues('00_04'))
                ->nullable();
            $table->string('M1021_PRIMARY_DIAG_ICD', 8)->nullable();
            $table->enum('M1021_PRIMARY_DIAG_SEVERITY', $this->itemValues('00_04_WITH_NA_SKIP'))
                ->nullable();
            $table->string('M1023_OTH_DIAG1_ICD', 8)->nullable();
            $table->enum('M1023_OTH_DIAG1_SEVERITY', $this->itemValues('00_04_WITH_NA_SKIP'))
                ->nullable();
            $table->string('M1023_OTH_DIAG2_ICD', 8)->nullable();
            $table->enum('M1023_OTH_DIAG2_SEVERITY', $this->itemValues('00_04_WITH_NA_SKIP'))
                ->nullable();
            $table->string('M1023_OTH_DIAG3_ICD', 8)->nullable();
            $table->enum('M1023_OTH_DIAG3_SEVERITY', $this->itemValues('00_04_WITH_NA_SKIP'))
                ->nullable();
            $table->string('M1023_OTH_DIAG4_ICD', 8)->nullable();
            $table->enum('M1023_OTH_DIAG4_SEVERITY', $this->itemValues('00_04_WITH_NA_SKIP'))
                ->nullable();
            $table->string('M1023_OTH_DIAG5_ICD', 8)->nullable();
            $table->enum('M1023_OTH_DIAG5_SEVERITY', $this->itemValues('00_04_WITH_NA_SKIP'))
                ->nullable();
            $table->enum('M1028_ACTV_DIAG_PVD_PAD', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('M1028_ACTV_DIAG_DM', $BIN_VAL_NO_INFO)->nullable();
            $table->integer('M1060_HEIGHT_A')->nullable();
            $table->integer('M1060_WEIGHT_B')->nullable();
            $table->string('M1311_NBR_PRSULC_STG2_A1', 2)->nullable();
            $table->string('M1311_NBR_ULC_SOCROC_STG2_A2', 2)->nullable();
            $table->string('M1311_NBR_PRSULC_STG3_B1', 2)->nullable();
            $table->string('M1311_NBR_ULC_SOCROC_STG3_B2', 2)->nullable();
            $table->string('M1311_NBR_PRSULC_STG4_C1', 2)->nullable();
            $table->string('M1311_NBR_ULC_SOCROC_STG4_C2', 2)->nullable();
            $table->string('M1311_NSTG_DRSG_D1', 2)->nullable();
            $table->string('M1311_NSTG_DRSG_SOCROC_D2', 2)->nullable();
            $table->string('M1311_NSTG_CVRG_E1', 2)->nullable();
            $table->string('M1311_NSTG_CVRG_SOCROC_E2', 2)->nullable();
            $table->string('M1311_NSTG_DEEP_TSUE_F1', 2)->nullable();
            $table->string('M1311_NSTG_DEEP_TSUE_SOCROC_F2', 2)->nullable();
            $table->string('GG0170C_MOBILITY_SOCROC_PERF', 2)->nullable();
            $table->string('GG0170C_MOBILITY_DSCHG_GOAL', 2)->nullable();
            $table->string('M2001_DRUG_RGMN_RVW', 1)->nullable();
            $table->string('M2003_MDCTN_FLWP', 1)->nullable();
            $table->string('M2005_MDCTN_INTRVTN', 1)->nullable();
            $table->enum('M2016_DRUG_EDCTN_INTRVTN', $this->itemValues('00_01_WITH_NA'))
                ->nullable();
            $table->enum('M2301_EMER_USE_AFTR_LAST_ASMT', $this->itemValues('00_02_WITH_UK'))
                ->nullable();
            $table->enum('M2401_INTRVTN_SMRY_DBTS_FT', $this->itemValues('00_01_WITH_NA'))
                ->nullable();
            $table->enum('M2401_INTRVTN_SMRY_FALL_PRVNT', $this->itemValues('00_01_WITH_NA'))
                ->nullable();
            $table->enum('M2401_INTRVTN_SMRY_DPRSN', $this->itemValues('00_01_WITH_NA'))
                ->nullable();
            $table->enum('M2401_INTRVTN_SMRY_PAIN_MNTR', $this->itemValues('00_01_WITH_NA'))
                ->nullable();
            $table->enum('M2401_INTRVTN_SMRY_PRSULC_PRVN', $this->itemValues('00_01_WITH_NA'))
                ->nullable();
            $table->enum('M2401_INTRVTN_SMRY_PRSULC_WET', $this->itemValues('00_01_WITH_NA'))
                ->nullable();
            $table->enum('M1028_ACTV_DIAG_NOA', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('GG0100A', $this->itemValues('GG0100_ITEMS'))
                ->nullable();
            $table->enum('GG0100B', $this->itemValues('GG0100_ITEMS'))
                ->nullable();
            $table->enum('GG0100C', $this->itemValues('GG0100_ITEMS'))
                ->nullable();
            $table->enum('GG0100D', $this->itemValues('GG0100_ITEMS'))
                ->nullable();
            $table->enum('GG0110A', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('GG0110B', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('GG0110C', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('GG0110D', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('GG0110E', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('GG0110Z', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('GG0130A1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130A2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130A3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130A4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130B1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130B2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130B3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130B4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130C1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130C2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130C3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130C4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130E1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130E2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130E3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130F1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130F2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130F3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130G1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130G2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130G3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130H1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130H2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0130H3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170A1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170A2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170A3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170A4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170B1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170B2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170B3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170B4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170C3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170C4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170D1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170D2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170D3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170D4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170E1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170E2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170E3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170E4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170F1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170F2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170F3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170F4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170G1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170G2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170G3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170I1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170I2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170I3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170I4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170J1', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170J2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170J3', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170J4', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170K1', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170K2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170K3', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170L1', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170L2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170L3', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170L4', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170M1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170M2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170M3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170M4', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170N1', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170N2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170N3', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170N4', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170O1', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170O2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170O3', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170P1', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170P2', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170P3', $this->itemValues('GG0XX_ITEMS'))
                ->nullable();
            $table->enum('GG0170Q1', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('GG0170Q3', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('GG0170Q4', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('GG0170R1', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170R2', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170R3', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170R4', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170RR1', $this->itemValues('1_2'))
                ->nullable();
            $table->enum('GG0170RR3', $this->itemValues('1_2'))
                ->nullable();
            $table->enum('GG0170S1', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170S2', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170S3', $this->itemValues('GG0XX_ITEMS_SKIP'))
                ->nullable();
            $table->enum('GG0170SS1', $this->itemValues('1_2'))
                ->nullable();
            $table->enum('GG0170SS3', $this->itemValues('1_2'))
                ->nullable();
            $table->enum('J1800', $BIN_VAL_NO_INFO)->nullable();
            $table->enum('J1900A', $this->itemValues('0_2'))
                ->nullable();
            $table->enum('J1900B', $this->itemValues('0_2'))
                ->nullable();
            $table->enum('J1900C', $this->itemValues('0_2'))
                ->nullable();
            $table->string('SUBM_HIPPS_CODE', 5)->nullable();
            $table->string('SUBM_HIPPS_VERSION', 5)->nullable();

            // Audition Attributes
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by')
                ->nullable()
                ->default(0);
        });

        Schema::table('oasis_d_socs', function ($table) {
            $table->foreign('calendar_id')->references('id')->on('calendars');
        });

    }

    private function itemValues(String $type) : array {
        $values = [];
        if ($type == '00_02') {
            $values = ['00', '01', '02'];
        }
        else if ($type == '00_03') {
            $values = ['00', '01', '02', '03'];
        }
        else if ($type == '00_04') {
            $values = [
                '00', '01', '02', '03', '04'
            ];
        }
        else if ($type == '00_05') {
            $values = [
                '00', '01', '02', '03', '04', '05'
            ];
        }
        else if ($type == '00_06') {
            $values = [
                '00', '01', '02', '03',
                '04', '05', '06'
            ];
        }
        else if($type == '00_01_WITH_NA') {
            $values = [
                '00', '01', 'NA'
            ];
        }
        else if($type == '00_01_WITH_NA_SKIP') {
            $values = [
                '00', '01', 'NA', '^'
            ];
        }
        else if($type == '00_02_WITH_UK') {
            $values = [
                '00', '01', '02', 'UK'
            ];
        }
        else if($type == '00_01_WITH_NA_UK') {
            $values = [
                '00', '01', 'NA', 'UK'
            ];
        }
        else if($type == '00_03_WITH_NA') {
            $values = [
                '00', '01', '02', '03','NA'
            ];
        }
        else if($type == '00_03_WITH_NA_SKIP') {
            $values = [
                '00', '01', '02', '03','NA', '^'
            ];
        }
        else if($type == '00_04_WITH_NA') {
            $values = [
                '00', '01', '02', '03', '04','NA'
            ];
        }
        else if($type == '00_04_WITH_NA_SKIP') {
            $values = [
                '00', '01', '02', '03', '04','NA', '-'
            ];
        }
        else if($type == '00_05_WITH_NA_UK') {
            $values = [
                '00', '01', '02', '03', '04',
                '05', 'NA', 'UK'
            ];
        }
        else if ($type == '01_03') {
            $values = ['01', '02', '03'];
        }
        else if ($type == '01_04') {
            $values = ['01', '02', '03', '04'];
        }
        else if ($type == '01_15') {
            $values = [
                '01', '02', '03', '04', '05', '06', '07',
                '08', '09', '10', '11', '12', '13', '14', '15'
            ];
        }
        else if ($type == '01_02_WITH_NA') {
            $values = [
                '01', '02', 'NA'
            ];
        }
        else if ($type == '01_02_WITH_NA_SKIP') {
            $values = [
                '01', '02', 'NA', '^'
            ];
        }
        else if ($type == '01_02_WITH_UK_NA') {
            $values = [
                '01', '02', 'UK', 'NA'
            ];
        }
        else if ($type == '01_03_WITH_SKIP') {
            $values = ['01', '02', '03', '^'];
        }
        else if ($type == '01_04_WITH_NA') {
            $values = [
                '01', '02', '03', '04', 'NA'
            ];
        }
        else if ($type == '01_04_WITH_SKIP') {
            $values = ['01', '02', '03', '04', '^'];
        }
        else if ($type == '01_04_WITH_UK') {
            $values = [
                '01', '02', '03', '04', 'UK'
            ];
        }
        else if ($type == '01_08') {
            $values = [
                '01', '02', '03', '04', '05',
                '06', '07','08', '^'
            ];
        }
        else if ($type == '01_09_NOT_02') {
            $values = [
                '01', '03', '04', '05',
                '06', '07','08', '09'
            ];
        }
        else if ($type == '0_2') {
            $values = [
                '0', '1', '2', '-'
            ];
        }
        else if ($type == '1_2') {
            $values = [
                '1', '2', '-', '^'
            ];
        }
        else if ($type == '1_3') {
            $values = [
                '1', '2', '3'
            ];
        }
        else if ($type == 'GG0100_ITEMS') {
            $values = [
                '3', '2', '1', '8', '9', '-'
            ];
        }
        else if ($type == 'GG0XX_ITEMS') { // for items GG0130 and GG170
            $values = [
                '06', '05', '04', '03', '02',
                '01', '07', '09', '10', '88', '-'
            ];
        }
        else if ($type == 'GG0XX_ITEMS_SKIP') { // for items GG0130 and GG170
            $values = [
                '06', '05', '04', '03', '02',
                '01', '07', '09', '10', '88', '-', '^'
            ];
        }
        return $values;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oasis_d_socs');
    }
}
