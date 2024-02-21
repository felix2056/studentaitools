<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tool;
use App\Models\ToolCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // add tools to categories
        $this->command->info('Adding tools to categories...');
        foreach (Category::all() as $category) {
            $tools = Tool::inRandomOrder()->limit(rand(3, 6))->get();
            
            foreach ($tools as $tool) {
                ToolCategory::create([
                    'tool_id' => $tool->id,
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
