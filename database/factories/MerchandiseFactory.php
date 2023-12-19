<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandise>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand'             =>fake()->word(),
            'description'       =>fake()->sentence(),
            'retail_price'      =>fake()->numberBetween(100,1000),
            'whole_sale_price'  =>fake()->numberBetween(100,1000),
            'whole_sale_qty'    =>fake()->numberBetween(1,500),
            'qty_stock'         =>fake()->numberBetween(1,500)
        ];
    }
}
