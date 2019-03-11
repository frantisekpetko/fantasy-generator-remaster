<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharBirthplaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $birthplaces = array("Casmyrod","Ascend","Cadyrass","Aqueral","Deszber","Lureryn","Nerusuvial");

        DB::table('char_birthplaces')->delete();

        foreach($birthplaces as $b){
            DB::table('char_birthplaces')->insert([
                'name' => $b,
            ]);
        }
    }
}
