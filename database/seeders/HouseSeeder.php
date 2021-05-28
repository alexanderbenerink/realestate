<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Houses;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('nl_NL');
        foreach (range(1,25) as $index) {
            DB::table('houses')->insert([
                'address' => $faker->streetAddress(),
                'city' => $faker->city(),
                'price' => $faker->numberBetween(25000, 1250000),
//                'image' => $faker->image(),
//                'image' => 'images/house.jpg',
                'image' => $faker->randomElement([
                    'images/seeder/house.jpg',
                    'images/seeder/house1.jpg',
                    'images/seeder/house2.jpg',
                    'images/seeder/house3.jpg',
                    'images/seeder/house4.jpg',
                    'images/seeder/house5.jpg',
                    'images/seeder/house6.jpg',
                    'images/seeder/house7.jpg',
                    'images/seeder/house8.jpg',
                    'images/seeder/house9.jpg',
                ]),
                'house_type' => $faker->randomElement([
                    'Aanleunwoning',
                    'Appartement',
                    'Blokhut',
                    'Bungalow',
                    'Grachtenpand',
                    'Landhuis',
                    'Rijtjeshuis',
                    'Twee-onder-een-kap',
                    'Vrijstaand huis',
                    'Woonboerderij',
                ]),
                'description' => $faker->sentence(),
                'postal_code' => $faker->postcode(),
                'surface_area' => $faker->numberBetween(15, 500),
                'published_at' => $faker->date(),
            ]);
        }
    }
}
