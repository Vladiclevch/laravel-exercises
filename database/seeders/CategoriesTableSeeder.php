<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            ['category' => 'Programming', 'description' => 'I love programming'],
            ['category' => 'Swim', 'description' => 'I love swimming'],
            ['category' => 'Run', 'description' => 'I love running'],
            ['category' => 'Eat', 'description' => 'I love eating'],
        ];

        foreach($categories as $category) {
            \DB::table('categories')->insert([
                'category' => $category['category'],
                'description' => $category['description'],
                'created_at'=>now(),
                'updated_at'=>now()
                ]);
        }

    }
}
