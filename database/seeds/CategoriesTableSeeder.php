<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['purchase', 'due', 'lend'] as $name) {
            Category::create([
              'name' => $name
            ]);
          }
    }
}
