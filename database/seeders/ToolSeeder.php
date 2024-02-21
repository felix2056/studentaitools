<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // add tools with db raw sql
        $this->command->info('Importing tools...');
        $sql = file_get_contents(database_path('tools.sql'));
        DB::unprepared($sql);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
