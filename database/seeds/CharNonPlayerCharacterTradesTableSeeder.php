<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharNonPlayerCharacterTradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trades = array("Bojovník","Šermíř","Chodec","Druid","Theurg","Pyrofor","Čaroděj","Mág","Lupič","Sicco","Iluzionista","Nekromant","Černokněžník");

        DB::table('char_non_player_character_trades')->delete();

        foreach($trades as $t){
            DB::table('char_non_player_character_trades')->insert([
                'name' => $t,
            ]);
        }
    }
}
