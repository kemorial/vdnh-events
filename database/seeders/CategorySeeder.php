<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => "exhibition2"],
            ['name' => "movie"],
            ['name' => "combo"],
            ['name' => "show-music"],
            ['name' => "education"],
            ['name' => "quest"],
            ['name' => "sports-ground"],
            ['name' => "gaming"]
        ];

        foreach ($categories as $cat) {
            Category::firstOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}
