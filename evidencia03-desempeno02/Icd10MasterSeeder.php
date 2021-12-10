<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

require_once 'Icd10MasterData.php';

class Icd10MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $icd_10_master = Icd10MasterData::$icd_10_master;
        foreach ($icd_10_master as $icd) {
            DB::table('icd10_masters')->insert([
                'id' => $icd['icd10_key'],
                'code' => $icd['icd10_code'],
                'code_dec' => $icd['icd10_code_dec'],
                'description' => $icd['icd_10_descrip']
            ]);
        }
    }
}
