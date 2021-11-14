<?php

namespace Database\Seeders;

use App\Models\Team;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            for ($i2 = 0; $i2 < 5; $i2++) {
                $teamAndCity = $faker->city;

                Team::create([
                    'name' => $teamAndCity . ' Football Team',
                    'league_id' => $i+1,
                    'city' => $teamAndCity
                ]);
            };
        };
    }
}
