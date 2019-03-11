<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharHairColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $hair_colors = array('blonďaté','hnědé','černé','rudé','zrzavé','stříbřité','šedé','bílé');

        DB::table('char_hair_colors')->delete();

        foreach($hair_colors as $h){
            DB::table('char_hair_colors')->insert([
                'name' => $h,
            ]);
        }


    }
}
