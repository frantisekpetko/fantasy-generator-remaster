<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharDistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $district = array('knížectví Apyra','knížectví Eysetir','knížectví Kamira','knížectví Sharleyi','knížectví Milrith','knížectví Tomikary','knížectví Gineri','knížectví Baliezar','knížectví Lorutant','království Ethel Wiem');

        DB::table('char_districts')->delete();

        foreach($district as $d){
            DB::table('char_districts')->insert([
                'name' => $d,
            ]);
        }
    }
}
