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
            'Research',
            'Writing',
            'Reading',
            'Tutoring',
            'Essay Writing',
            'Language Translation',
            'Collaboration',
            'Test Prep',
            'Time Management',
            'Data Analysis',
            'Code Writing',
            'Presentations',
            'Mathematics',
            'Productivity',
            'Jobs/Internships',
        ];

        foreach ($categories as $category) {
            $slug = strtolower(str_replace(' ', '-', $category));
            Category::create([
                'name' => $category,
                'slug' => $slug,
            ]);
        }
    }
}
