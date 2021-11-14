<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            for ($i2 = 0; $i2 < 5; $i2++) {
                Player::create([
                    'name' => $faker->name,
                    'team_id' => $i+1,
                    'birth_date' => $faker->date,
                    'birth_place' => $faker->city,
                    'height' => $faker->numberBetween(156, 210),
                    'weight' => $faker->numberBetween(60, 110),
                    'postition' => $faker->randomElement([
                        'forward',
                        'center',
                        'wing',
                        'defender',
                        'goalkeeper'
                    ]),
                    'total_goals' => $faker->numberBetween(0, 99)
                ]);
            }
        };
    }
}
