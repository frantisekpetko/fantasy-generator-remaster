<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CharBirthplaceTableSeeder::class);
        $this->call(CharCharacteristicFeatureTableSeeder::class);
        $this->call(CharCommonTradesTableSeeder::class);
        $this->call(CharDistrictTableSeeder::class);
        $this->call(CharEyeColorsTableSeeder::class);
        $this->call(CharHairColorTableSeeder::class);
        $this->call(CharHobbyTableSeeder::class);
        $this->call(CharNamesTableSeeder::class);
        $this->call(CharNonPlayerCharacterTradesTableSeeder::class);
        $this->call(CharPlayerCharacterTradesTableSeeder::class);
        $this->call(CharRaceTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
