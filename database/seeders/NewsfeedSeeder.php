<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsfeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'content' => '🚀 Elevate your study game with Student AI Tools! From smart note-taking to AI-powered study aids, we\'ve got you covered. Start maximizing your learning potential today! #StudentAI #Education #AI #StudySmart"',
                'images' => [
                    'https://source.unsplash.com/1600x900/?student,study',
                    'https://source.unsplash.com/1600x900/?student,notes',
                    'https://source.unsplash.com/1600x900/?student,ai',
                ],
                'video' => null,
            ],
            [
                'content' => '📚 The best study tools for students! From note-taking to flashcards, we\'ve got you covered. Start maximizing your learning potential today! #StudentAI #Education #StudySmart"',
                'images' => ['https://source.unsplash.com/1600x900/?student,study'],
                'video' => null,
            ],
            [
                'content' => '📝 Take your notes to the next level with Student AI Tools! From smart note-taking to AI-powered study aids, we\'ve got you covered. Start maximizing your learning potential today! #StudentAI #Education #AI #StudySmart"',
                'images' => ['https://source.unsplash.com/1600x900/?student,notes'],
                'video' => null,
            ],
            [
                'content' => 'Just discovered this amazing AI tool for organizing my study notes! 🤯 It\'s a game-changer! No more messy notebooks for me. #StudentLife #AI #Organization',
                'images' => ['https://assets-global.website-files.com/622072bb15578473cfe8ef5a/649909f5f5f01fc8d521c6bc_Ai-note-taking-apps-taskadeai.png'],
                'video' => null,
            ],
            [
                'content' => 'Struggling with math homework? Check out this <a href="https://smodin.io/omni/mathematics" target="_blank">AI-powered calculator app</a>! It solves equations faster than I can blink! 😱',
                'images' => ['https://i.ytimg.com/vi/0C8S1KiRzFU/sddefault.jpg'],
                'video' => null,
            ],
            [
                'content' => 'Mind blown by this AI tool that helps me generate citations for my research papers! Saving me so much time and hassle. <a href="https://sourcely.net" target="_blank">Check it out!</a> #Research #AI #Sourcely #StudentTech',
                'images' => ['https://www.aitoolmate.com/wp-content/uploads/2023/12/Sourcely-Ai-Tool-Mate.png'],
                'video' => null,
            ],
            [
                'content' => 'As a language student, finding this AI language learning app has been a lifesaver! It adapts to my learning pace and even corrects my pronunciation. 🗣️🌍 #LanguageLearning #AI #StudentTech',
                'images' => [],
                'video' => 'https://www.youtube.com/watch?v=RzXKRODtgHo',
            ],
            [
                'content' => 'Stressed about exams? <a href="https://www.taskade.com/generate/ai/study-schedule" target="_blank">Taskade</a> helps me create personalized study plans and quizzes. Feeling more confident already! 📝🤓',
                'images' => ['https://www.taskade.com/static_images/pricing/tooltip_ai_generator_block.gif'],
                'video' => null,
            ]
        ];

        foreach ($posts as $post) {
            $user = User::inRandomOrder()->first();
            $user->posts()->create([
                'content' => $post['content'],
                'images' => json_encode($post['images']),
                'video' => $post['video'],
            ]);
        }
    }
}
