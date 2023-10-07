<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SubCategory::create([
            'name' => 'Web Software',
            'category_id' => 1,
        ]);

        SubCategory::create([
            'name' => 'Mobile Software',
            'category_id' => 1,
        ]);
        SubCategory::create([
            'name' => 'Game Software',
            'category_id' => 1,
        ]);
        SubCategory::create([
            'name' => 'Tool',
            'category_id' => 1,
        ]);
        SubCategory::create([
            'name' => 'Other',
            'category_id' => 1,
        ]);

        SubCategory::create([
            'name' => 'Biomedical',
            'category_id' => 2,
        ]);

        SubCategory::create([
            'name' => 'Chemistry',
            'category_id' => 2,
        ]);
        SubCategory::create([
            'name' => 'Physics',
            'category_id' => 2,
        ]);
        SubCategory::create([
            'name' => 'Other',
            'category_id' => 2,
        ]);

        SubCategory::create([
            'name' => 'Other',
            'category_id' => 3,
        ]);
        SubCategory::create([
            'name' => 'Other',
            'category_id' => 4,
        ]);
    }
}
