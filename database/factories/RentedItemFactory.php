<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RentedItem>
 */
class RentedItemFactory extends Factory
{
    protected $model = \App\Models\RentedItem::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $from = Carbon::instance($this->faker->dateTimeBetween('-1 months', '+1 months'));
        $to = (clone $from)->addDays(random_int(0, 14));
        $returned_date = (clone $from)->addDays(random_int(2, 14));

        return [
            'item_id'  => Item::inRandomOrder()->first()->id,
            'renter_id' => User::inRandomOrder()->first()->id,
            'rental_code' => 'IT'.rand(1000,9999),
            'from_date' => $from,
            'to_date' => $to,
            'date_returned' => $this->faker->randomElement([$returned_date, Null]),
        ];
    }
}
