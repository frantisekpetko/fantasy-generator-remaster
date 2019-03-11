<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharRaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $races = array("Člověk","Trpaslík","Gnóm","Skřítek","Elf","Goblin","Ork","Wroub", "Hobris");

        DB::table('char_races')->delete();

        foreach($races as $r){
            DB::table('char_races')->insert([
                'name' => $r,
            ]);
        }
    }
}
