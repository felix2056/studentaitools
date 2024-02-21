<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // add events with db raw sql
        $events = [
            [
                'title' => 'AI Webinars and Workshops',
                'slug' => 'ai-webinars-and-workshops',
                'image' => '/images/events/ai-webinars-and-workshops.png',
                'description' => '<p class="mdtxt">Join us for a series of webinars and workshops on AI and machine learning. We will cover the basics of AI, how to get started with machine learning, and how to build your first AI model. We will also have a workshop on how to use AI to build a chatbot for your website.</p><div class="segment-area mt-7"><p class="mdtxt">Webinar Schedule</p><ul class="mdtxt"><li>Introduction to AI - March 1, 2024</li><li>Getting Started with Machine Learning - March 8, 2024</li><li>Building Your First AI Model - March 15, 2024</li><li>Building a Chatbot with AI - March 22, 2024</li></ul></div>',
                'start_date' => '2024-03-01 09:00:00',
                'end_date' => '2024-03-01 17:00:00',
                'status' => 'published',
                'visibility' => 'public',
            ],
            [
                'title' => 'Guest Speaker Series',
                'slug' => 'guest-speaker-series',
                'image' => '/images/events/guest-speaker-series.png',
                'description' => '<p class="mdtxt">Join us for our Guest Speaker Series, where experts in the field of AI will share insights into the latest developments in AI technology, career paths in AI-related fields, and their own experiences with AI in education.</p><div class="segment-area mt-7"><p class="mdtxt">Upcoming Speakers</p><ul class="mdtxt"><li>Dr. Sarah Smith - AI Ethics in Education - March 5, 2024</li><li>John Doe - Career Paths in AI - March 12, 2024</li><li>Panel Discussion: Future of AI in Education - March 19, 2024</li></ul></div>',
                'start_date' => '2024-03-05 10:00:00',
                'end_date' => '2024-03-19 12:00:00',
                'location' => 'New York, NY',
                'type' => 'local',
                'status' => 'published',
                'visibility' => 'public',
            ],
            [
                'title' => 'Hackathons and Coding Competitions',
                'slug' => 'hackathons-and-coding-competitions',
                'image' => '/images/events/hackathons-and-coding-competitions.png',
                'description' => '<p class="mdtxt">Get ready to unleash your coding skills at our Hackathons and Coding Competitions! Compete individually or in teams to develop AI solutions to specific challenges or problems relevant to students.</p><div class="segment-area mt-7"><p class="mdtxt">Event Details</p><ul class="mdtxt"><li>Hackathon: AI for Social Good - March 10-11, 2024</li><li>Coding Competition: AI Project Showcase - March 24, 2024</li></ul></div>',
                'start_date' => '2024-03-10 09:00:00',
                'end_date' => '2024-03-11 17:00:00',
                'status' => 'published',
                'visibility' => 'public',
            ],
            [
                'title' => 'AI Tech Talks',
                'slug' => 'ai-tech-talks',
                'image' => '/images/events/ai-tech-talks.webp',
                'description' => '<p class="mdtxt">Join us for AI Tech Talks, where students share their experiences, projects, and insights related to AI. Discover how AI is reshaping the way we learn and explore innovative AI projects developed by fellow students.</p><div class="segment-area mt-7"><p class="mdtxt">Upcoming Talks</p><ul class="mdtxt"><li>Student Showcase: AI Projects - March 8, 2024</li><li>Panel Discussion: AI in Education - March 15, 2024</li><li>Q&A Session: AI Career Paths - March 22, 2024</li></ul></div>',
                'start_date' => '2024-03-08 13:00:00',
                'end_date' => '2024-03-22 15:00:00',
                'status' => 'published',
                'visibility' => 'public',
            ],
            [
                'title' => 'Panel Discussions and Q&A Sessions',
                'slug' => 'panel-discussions-and-qa-sessions',
                'image' => '/images/events/panel-discussions-and-qa-sessions.png',
                'description' => '<p class="mdtxt">Join us for panel discussions and Q&A sessions on AI-related topics. Engage with experts from academia, industry, and student communities as we explore the ethics of AI, AI in education policy, and the future of AI in student learning.</p><div class="segment-area mt-7"><p class="mdtxt">Upcoming Discussions</p><ul class="mdtxt"><li>Panel Discussion: Ethics of AI - March 3, 2024</li><li>Q&A Session: AI in Education Policy - March 10, 2024</li><li>Panel Discussion: Future of AI in Learning - March 17, 2024</li></ul></div>',
                'start_date' => '2024-03-03 14:00:00',
                'end_date' => '2024-03-17 16:00:00',
                'status' => 'published',
                'visibility' => 'public',
            ],
            [
                'title' => 'AI Career Fairs',
                'slug' => 'ai-career-fairs',
                'image' => '/images/events/ai-career-fairs.jpg',
                'description' => '<p class="mdtxt">Don\'t miss our AI Career Fairs, where you can explore job opportunities and internships in AI-related fields. Connect with companies and organizations in the AI industry, learn about career paths in AI, and network with industry professionals.</p><div class="segment-area mt-7"><p class="mdtxt">Upcoming Fairs</p><ul class="mdtxt"><li>AI Career Fair: Spring Edition - March 7, 2024</li><li>AI Internship Fair - March 14, 2024</li><li>AI Networking Event - March 21, 2024</li></ul></div>',
                'start_date' => '2024-03-07 11:00:00',
                'end_date' => '2024-03-21 15:00:00',
                'location' => 'San Francisco, CA',
                'type' => 'local',
                'status' => 'published',
                'visibility' => 'public',
            ],
            [
                'title' => 'AI Research Symposium',
                'slug' => 'ai-research-symposium',
                'image' => '/images/events/ai-research-symposium.jpg',
                'description' => '<p class="mdtxt">Join us for the AI Research Symposium, where students will present their research projects related to AI. Explore cutting-edge AI research, engage with fellow students, and network with industry professionals.</p><div class="segment-area mt-7"><p class="mdtxt">Event Details</p><ul class="mdtxt"><li>AI Research Symposium - March 12-13, 2024</li></ul></div>',
                'start_date' => '2024-03-12 09:00:00',
                'end_date' => '2024-03-13 17:00:00',
                'status' => 'published',
                'visibility' => 'public',
            ],
            [
                'title' => 'AI Book Clubs',
                'slug' => 'ai-book-clubs',
                'image' => '/images/events/ai-book-clubs.jpeg',
                'description' => '<p class="mdtxt">Join our AI Book Club and dive into the world of AI literature. Discover books on topics such as machine learning, AI ethics, and AI-driven innovations in education. Engage in lively discussions with fellow book club members and expand your knowledge of AI.</p><div class="segment-area mt-7"><p class="mdtxt">Upcoming Meetings</p><ul class="mdtxt"><li>AI Book Club: March Edition - March 5, 2024</li><li>AI Book Club: April Edition - April 2, 2024</li></ul></div>',
                'start_date' => '2024-03-05 18:00:00',
                'end_date' => '2024-04-02 20:00:00',
                'location' => 'Miami, FL',
                'type' => 'local',
                'status' => 'published',
                'visibility' => 'public',
            ],
            [
                'title' => 'AI Challenges and Competitions',
                'slug' => 'ai-challenges-and-competitions',
                'image' => '/images/events/ai-challenges-and-competitions.jpg',
                'description' => '<p class="mdtxt">Get ready for our AI Challenges and Competitions! Compete individually or in teams to solve specific AI-related problems or complete projects within a set timeframe. Show off your coding skills and win prizes!</p><div class="segment-area mt-7"><p class="mdtxt">Upcoming Events</p><ul class="mdtxt"><li>AI Challenge: March Edition - March 10, 2024</li><li>AI Competition: Spring Showcase - March 24, 2024</li></ul></div>',
                'start_date' => '2024-03-10 12:00:00',
                'end_date' => '2024-03-24 18:00:00',
                'status' => 'published',
                'visibility' => 'public',
            ]
        ];

        foreach ($events as $event) {
            $random_user = User::inRandomOrder()->first();
            $event['user_id'] = $random_user->id;
            Event::create($event);
        }
    }
}
