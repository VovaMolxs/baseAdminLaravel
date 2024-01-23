<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Category::create([
        'categories' => 'Root',
        'category_detail' => 'This is root category',
        'slug' => 'root',
        'parent_id' => null,
        'menu' => 0,
      ]);

      Category::factory(10)->create();
    }
}
