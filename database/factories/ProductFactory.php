<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\CategoryProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

	protected $model = Product::class;

    public function definition()
    {
		$img = 'https://picsum.photos/id/'.mt_rand(1, 100).'/200/300';
        return [            
			// 'image' => $this->faker->imageUrl(100, 100),
			'image' => $img,
			'name' => $this->faker->unique()->name,
			'description' => $this->faker->text(200),
			'price' => $this->faker->numberBetween(50, 1000),
        ];
    }
}
