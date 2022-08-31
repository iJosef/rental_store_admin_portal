<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\RentedItem;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RentedItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\RentedItem::factory(100)->create();
        // Item::factory(10)->create()->each(function($item) use() {

        // });

        // $faker = Faker::create();
        // foreach (range(1,5) as $value) {
        //     DB::table('rented_items')->insert([
        //         'item_id' => Item::factory(),
        //         'renter_id' => User::factory(),
        //         'renter_code' => 'IT'.rand(1000,9999),
        //         'from_date' => $faker->date,
        //         'to_date' => $faker->date,
        //         'date_returned' => $faker->date,
        //         'unit' => rand(1,3),
        //         'price_per_unit' => $faker->numberBetween($min = 1500, $max = 6000),
        //         'total_price' =>$faker->numberBetween($min = 1500, $max = 6000),
        //     ]);
        // }
    }
}
