<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryProduct>
 */
class CategoryProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

	protected $model = CategoryProduct::class;

    public function definition()
    {
		return [
			'category_id' => Category::select('id')->orderByRaw("RAND()")->first()->id,
			'product_id' =>  Product::select('id')->orderByRaw("RAND()")->first()->id,
        ];
    }
}
