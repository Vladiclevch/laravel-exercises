<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tags = [
            ['tag' => 'Code'],
            ['tag' => 'Swim'],
            ['tag' => 'Run'],
            ['tag' => 'Eat'],
        ];

        foreach($tags as $tag) {
            \DB::table('tags')->insert([
                'tag' => $tag['tag'],
                'created_at'=>now(),
                'updated_at'=>now()
                ]);
        }

    }
}
