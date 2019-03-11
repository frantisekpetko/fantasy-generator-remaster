<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharPlayerCharacterTradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trades = array("Bojovník","Šermíř","Chodec","Druid","Theurg","Pyrofor","Čaroděj","Mág","Lupič","Sicco");

        DB::table('char_player_trades')->delete();

        foreach($trades as $t){
            DB::table('char_player_trades')->insert([
                'name' => $t,
            ]);
        }
    }
}
