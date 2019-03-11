<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharEyeColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eye_colors = array('okrové','azurové','karmínové','v barvě měďi','v barvě zlata','v barvě stříbra','šedivé','olivové','zelené','modré','žluté','smaragdové','akvamarínové','světle černé','mutantní černé oči');

        DB::table('char_hair_colors')->delete();

        foreach($eye_colors as $e){
            DB::table('char_hair_colors')->insert([
                'name' => $e,
            ]);
        }
    }
}
