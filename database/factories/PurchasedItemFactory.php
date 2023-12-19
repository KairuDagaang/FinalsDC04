<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Merchandise;
use App\Models\Purchase;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchasedItem>
 */
class PurchasedItemFactory extends Factory
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
            'purchase_id'    =>Purchase::factory(),
            'whole_sale_qty' =>fake()->numberBetween(1,500),
            'purchase_price' =>fake()->numberBetween(100,1000)
        ];
    }
}
