<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        // $faker = Faker::create();
        // foreach (range(1,20) as $value) {
        //     DB::table('users')->insert([
        //         'first_name' => $faker->firstName,
        //         'last_name' => $faker->lastName,
        //         'email' => $faker->email,
        //         'password' => Hash::make('password'),
        //     ]);
        // }

    }
}
