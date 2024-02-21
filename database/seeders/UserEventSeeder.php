<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Adding user events...');
        
        $events = Event::all();
        $events->each(function ($event) {
            $event->users()->attach(rand(1, 10), ['status' => 'going']);
            $event->users()->attach(rand(1, 10), ['status' => 'interested']);
            $event->users()->attach(rand(1, 10), ['status' => 'not_going']);
        });

        $this->command->info('User events added');
    }
}
