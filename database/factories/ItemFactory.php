<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ItemType;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    protected $model = \App\Models\Item::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = ucwords($this->faker->word);

        return [
            'item_type_id' => ItemType::inRandomOrder()->first()->id,//App\Models\ItemType::inRandomOrder()->first()->id,
            'item_name'     => $name,
            'description'     => $this->faker->sentence(rand(5, 10)),
            'available' => $this->faker->boolean()
        ];
    }
}
