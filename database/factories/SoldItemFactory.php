<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Merchandise;
use App\Models\Sale;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SoldItem>
 */
class SoldItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merchandise_id' =>Merchandise::factory(),
            'sale_id'        =>Sale::factory(),
            'qty'            =>fake()->numberBetween(1,500),
            'selling_price'  =>fake()->numberBetween(100,1000)
        ];
    }
}
