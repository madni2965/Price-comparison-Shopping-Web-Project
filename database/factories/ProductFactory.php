<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=6,$asText = true);
        $slug = Str::slug($product_name, '-');
        return [
            'name' => $product_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'amazon_price' => $this->faker->numberBetween(1,1000),
            'ebay_price' => $this->faker->numberBetween(1,1000),
            'alibaba_price' => $this->faker->numberBetween(1,1000),
            'SKU' => 'PRD' . $this->faker->unique()->numberBetween(1,500),
            'quantity' => $this->faker->numberBetween(10,50),
            'image' => 'product-' .$this->faker->numberBetween(1,18),
            'catagory_id' => $this->faker->numberBetween(1,12)

        ];
    }
}
