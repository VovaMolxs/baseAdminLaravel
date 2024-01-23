<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      $menu_name = fake()->name;
      return [
        'categories'     =>  $menu_name,
        'slug' =>       Str::slug($menu_name),
        'category_detail'   =>  fake()->realText(100),
        'parent_id'     =>  1,
        'menu'          =>  1,
      ];

    }
}
