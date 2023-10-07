<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Open Source Projects',
            'description' => "Looking for a way to contribute to open source software? Our 'Open Source Projects' category is a great place to start. We list projects that are looking for new contributors, whether you're a beginner or an experienced developer",
            'image_category' => "https://images.unsplash.com/photo-1446776709462-d6b525c57bd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
        ]);

        Category::create([
            'name' => 'Open Science Projects',
            'description' => "Are you looking for a way to contribute to open science? Our 'Open Science Projects' category is a great place to start. We list projects that are looking for new contributors, whether you're a beginner or an experienced researcher.",
            'image_category' => "https://images.unsplash.com/photo-1583911860205-72f8ac8ddcbe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
        ]);
        Category::create([
            'name' => 'Open Source Nasa',
            'description' => "Explore NASA's open source projects in this category. Find software, data, and tools that you can use to learn about space, explore the universe, and make a difference.",
            'image_category' => "https://images.unsplash.com/photo-1614727187346-ec3a009092b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2078&q=80"
        ]);

        Category::create([
            'name' => 'Other',
            'description' => "In addition to our open source and open science categories, we also have a category for other projects. This category includes projects that don't fit neatly into either of the other categories, but are still worth exploring",
            'image_category' => "https://images.unsplash.com/photo-1614730321146-b6fa6a46bcb4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
        ]);
    }
}
