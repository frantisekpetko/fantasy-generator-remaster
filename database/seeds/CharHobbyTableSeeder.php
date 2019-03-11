<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharHobbyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hobby = array('vyřezávání', 'hraní na píšťalu', 'posedávání v hospodě','alchymie', 'vaření','rybaření', 'lov', 'sokolnictví', 'procházky', 'mazlení se s penězi', 'lenošení', 'lukostřelba', 'šermířské souboje', 'sázení', 'hádanky', 'jídlo','sekání hlav skřetům', 'hádky', 'pokusy', 'zpěv', 'šaškaření', 'studium', 'rozjímání','chození do chrámu nebo do kostela', 'četba', 'filosofie', 'šití', 'sklářství','asketismus','koželužnictví','kartografie', 'padělání','hraní na hudební nástroj','veslování','tesařina','zedničina','jazyky','stavitelství','astrologie','tanec','vypravěčství','svádění');

        DB::table('char_hobbies')->delete();

        foreach($hobby as $h){
            DB::table('char_hobbies')->insert([
                'name' => $h,
            ]);
        }

    }
}
