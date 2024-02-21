<?php

namespace Database\Seeders;

use App\Models\Request;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requests = [
            [
                'title' => "Looking for an AI Tool to Simplify Complex Math Problems",
                'description' => "I'm a student struggling with complex math problems and I'm in need of an AI tool that can simplify them for me. I often encounter equations and calculations that are difficult to solve manually, and I believe an AI-powered tool could greatly assist me in understanding and solving these problems more efficiently. The tool should be able to handle various types of math problems, including algebra, calculus, and statistics. I've searched online, but I couldn't find a suitable tool that meets my needs. Any recommendations or suggestions would be greatly appreciated!",
            ],
            [
                'title' => "AI Tool for Language Translation and Learning",
                'description' => "I am looking for an AI tool that can help me translate and learn new languages. The tool should be able to translate text and speech from one language to another, and it should also provide language learning resources such as vocabulary lists, grammar lessons, and interactive exercises. I want to use this tool to improve my language skills and communicate more effectively with people from different cultures. If anyone knows of such a tool or is willing to develop one, please let me know.",
            ],
            [
                'title' => "Collaboration Tool for Remote Teams",
                'description' => "I manage a remote team, and I'm looking for a collaboration tool that can help us work together more efficiently. The tool should have features for project management, file sharing, real-time communication, and task tracking. It should also be user-friendly and accessible from different devices and locations. I've tried a few collaboration tools in the past, but none of them fully met our needs. If you have any recommendations or can develop a custom tool for us, please reach out.",
            ],

            [
                'title' => "Seeking an AI Tool for Language Translation with Context Preservation",
                'description' => "I'm looking for an AI tool that can translate text from one language to another while preserving the context and nuances of the original language. Traditional translation tools often struggle with idiomatic expressions, cultural references, and subtle linguistic nuances. I need a tool that can accurately capture and convey the intended meaning of the text across different languages. I've tried several translation tools, but none of them seem to meet my requirements. Any recommendations for an AI-powered translation tool with context preservation?",
            ],
            [
                'title' => "In Search of an AI Tool for Generating Creative Writing Prompts",
                'description' => "I'm a writer looking for inspiration, and I'm in need of an AI tool that can generate creative writing prompts tailored to my interests and preferences. I often struggle with writer's block and find it challenging to come up with fresh ideas for stories, articles, or blog posts. I'm hoping to find a tool that can generate unique and thought-provoking prompts based on my specific writing style and genre preferences. I've searched online for writing prompt generators, but most of them offer generic or uninspiring prompts. Can anyone recommend an AI-powered tool for generating creative writing prompts?",
            ],
            [
                'title' => "Requesting an AI Tool for Personalized Study Plans",
                'description' => "I'm a student looking for an AI tool that can create personalized study plans to help me effectively manage my learning goals and optimize my study time. I often struggle with procrastination and time management, and I believe a personalized study plan tailored to my learning style and academic needs could greatly improve my productivity and academic performance. I've tried using traditional study planners and time management apps, but they lack the intelligence and adaptability I need. Does anyone know of an AI-powered tool that can analyze my learning habits and create customized study schedules?",
            ],
            [
                'title' => "Seeking an AI Tool for Automated Code Review and Refactoring",
                'description' => "As a software developer, I'm looking for an AI tool that can automate code review and refactoring tasks to help me maintain high-quality code and improve software performance. Manual code review and refactoring can be time-consuming and prone to human error, so I'm hoping to find a tool that can analyze my codebase, identify potential issues or optimizations, and suggest automated fixes or improvements. I've explored various code analysis tools, but I haven't found one that fully meets my needs. Any recommendations for an AI-powered tool for automated code review and refactoring?",
            ],
            [
                'title' => "In Search of an AI Tool for Generating Natural-Sounding Speech from Text",
                'description' => "I'm working on a project that requires converting text into natural-sounding speech, and I'm in need of an AI tool that can accomplish this task effectively. Traditional text-to-speech (TTS) systems often produce robotic or unnatural-sounding speech, which can detract from the user experience. I'm looking for a tool that can generate speech with realistic intonation, pacing, and pronunciation, making it suitable for various applications such as virtual assistants, audiobooks, or voice interfaces. I've tried several TTS systems, but I haven't found one that meets my expectations. Can anyone recommend an AI-powered tool for generating natural-sounding speech from text?",
            ],
            [
                'title' => "Requesting an AI Tool for Real-Time Sentiment Analysis of Social Media Posts",
                'description' => "I'm a social media marketer looking for an AI tool that can perform real-time sentiment analysis of social media posts to help me understand and monitor public opinion about my brand or products. Analyzing social media sentiment manually can be overwhelming and time-consuming, especially with the volume of posts generated every minute. I'm hoping to find a tool that can automatically analyze social media posts for positive, negative, or neutral sentiment and provide actionable insights to inform my marketing strategies. I've looked into various social media monitoring tools, but none of them offer real-time sentiment analysis capabilities. Any recommendations for an AI-powered tool for real-time sentiment analysis of social media posts?",
            ],
            [
                'title' => "Seeking an AI Tool for Generating Customized Workout Plans",
                'description' => "I'm looking for an AI tool that can generate customized workout plans tailored to my fitness goals, preferences, and fitness level. With so many exercises and training techniques available, it can be challenging to create an effective and balanced workout routine that targets specific muscle groups and avoids overtraining. I'm hoping to find a tool that can analyze my fitness profile, including my current fitness level, workout preferences, and any existing health conditions, and generate personalized workout plans with clear instructions and progress tracking features. I've tried using generic workout apps, but they lack the customization and intelligence I need. Can anyone recommend an AI-powered tool for generating customized workout plans?",
            ],
            [
                'title' => "Requesting an AI Tool for Automated Video Editing",
                'description' => "I'm a video creator looking for an AI tool that can automate the video editing process and streamline my workflow. Video editing can be time-consuming and labor-intensive, especially when working with large amounts of footage. I'm hoping to find a tool that can analyze my raw video clips, identify key moments or highlights, and automatically generate edited sequences with transitions, effects, and soundtracks. I've experimented with basic video editing software, but they require manual intervention and lack the sophistication I need for professional-quality editing. Any recommendations for an AI-powered tool for automated video editing?",
            ],
            [
                'title' => "Seeking an AI Tool for Automated Data Analysis and Insights",
                'description' => "I'm a data analyst looking for an AI tool that can automate the process of data analysis and provide actionable insights from large datasets. Analyzing data manually can be time-consuming and error-prone, especially when dealing with complex datasets with multiple variables and dependencies. I'm hoping to find a tool that can perform advanced data analysis techniques, such as regression analysis, clustering, and predictive modeling, and generate meaningful insights and visualizations to facilitate decision-making. I've explored various data analysis tools, but they often require significant manual effort and expertise. Can anyone recommend an AI-powered tool for automated data analysis and insights?",
            ],
            [
                'title' => "Requesting an AI Tool for Personalized Music Recommendations",
                'description' => "I'm a music enthusiast looking for an AI tool that can provide personalized music recommendations based on my listening preferences and mood. With so much music available across different genres and styles, it can be overwhelming to discover new music that aligns with my tastes and preferences. I'm hoping to find a tool that can analyze my listening history, favorite artists, and music preferences and generate customized playlists or recommendations tailored to my mood, activity, or time of day. I've tried using streaming platforms' recommendation algorithms, but they often lack the depth and personalization I'm looking for. Can anyone recommend an AI-powered tool for personalized music recommendations?",
            ]
        ];

        foreach ($requests as $request) {
            $user = User::inRandomOrder()->first();
            $slug = strtolower(str_replace(' ', '-', $request['title']));
            
            $request['slug'] = $slug;
            $request['user_id'] = $user->id;
            $request['is_active'] = true;
            $request['is_featured'] = false;

            Request::create($request);
        }
    }
}
