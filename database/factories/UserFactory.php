<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'username' => fake()->unique()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'gender' => fake()->randomElement(['male', 'female', 'other']),
            'date_of_birth' => fake()->date(),
            'education' => fake()->sentence(),
            'awards' => fake()->sentence(),
            'bio' => fake()->paragraph(),
            // 'avatar' => 'https://i.pravatar.cc/300',
            'cover' => 'https://i.pravatar.cc/1500',
            'facebook' => 'https://facebook.com/' . fake()->userName(),
            'twitter' => 'https://twitter.com/' . fake()->userName(),
            'linkedin' => 'https://linkedin.com/in/' . fake()->userName(),
            'instagram' => 'https://instagram.com/' . fake()->userName(),
            'website' => 'https://' . fake()->domainName(),
            'academic_interests' => fake()->randomElement(['mathematics', 'physics', 'chemistry', 'biology', 'geology', 'astronomy', 'history', 'geography', 'economics', 'psychology', 'sociology', 'political science', 'philosophy', 'literature', 'linguistics', 'art', 'music', 'dance', 'theater', 'film', 'television', 'radio', 'journalism', 'advertising', 'public relations', 'marketing', 'management', 'accounting', 'finance', 'business', 'law', 'medicine', 'nursing', 'dentistry', 'pharmacy', 'veterinary', 'engineering', 'architecture', 'computer science', 'information technology', 'software engineering', 'web development', 'graphic design', 'digital marketing', 'seo', 'photography', 'videography', 'content writing', 'copywriting', 'social media marketing', 'email marketing', 'ui/ux design', 'mobile app development', 'game development', 'data science', 'machine learning', 'artificial intelligence', 'blockchain', 'cryptocurrency', 'cybersecurity', 'ethical hacking', 'cloud computing', 'devops', 'project management', 'agile methodology', 'scrum', 'kanban', 'lean', 'six sigma', 'quality management', 'risk management', 'supply chain management', 'logistics', 'operations management', 'human resource management', 'leadership', 'public speaking', 'negotiation', 'sales', 'customer service', 'time management', 'stress management', 'emotional intelligence', 'mindfulness', 'meditation', 'yoga', 'fitness', 'nutrition', 'healthy cooking', 'gardening', 'interior design', 'fashion design', 'event planning', 'wedding planning', 'travel planning', 'financial planning', 'investing', 'trading', 'personal finance', 'real estate', 'entrepreneurship', 'startup', 'innovation', 'creativity', 'problem solving', 'critical thinking', 'decision making', 'collaboration', 'teamwork', 'conflict resolution', 'diversity and inclusion', 'equality and equity', 'social justice', 'environmental sustainability', 'climate change', 'renewable energy', 'circular economy', 'zero waste', 'plastic pollution', 'biodiversity', 'wildlife conservation', 'animal welfare']),
            'professional_interests' => fake()->sentence(),
            'hobbies' => fake()->randomElement(['reading', 'writing', 'coding', 'traveling', 'cooking', 'photography', 'painting', 'dancing', 'singing', 'swimming', 'running', 'cycling', 'gaming', 'watching movies', 'listening to music', 'playing musical instruments']),
            'skills' => fake()->randomElement(['Web Development', 'Graphic Design', 'Digital Marketing', 'SEO', 'Photography', 'Videography', 'Content Writing', 'Copywriting', 'Social Media Marketing', 'Email Marketing', 'UI/UX Design', 'Mobile App Development', 'Game Development', 'Data Science', 'Machine Learning', 'Artificial Intelligence', 'Blockchain', 'Cryptocurrency', 'Cybersecurity', 'Ethical Hacking', 'Cloud Computing', 'DevOps', 'Project Management', 'Agile Methodology', 'Scrum', 'Kanban', 'Lean', 'Six Sigma', 'Quality Management', 'Risk Management', 'Supply Chain Management', 'Logistics', 'Operations Management', 'Human Resource Management', 'Leadership', 'Public Speaking', 'Negotiation', 'Sales', 'Customer Service', 'Time Management', 'Stress Management', 'Emotional Intelligence', 'Mindfulness', 'Meditation', 'Yoga', 'Fitness', 'Nutrition', 'Healthy Cooking', 'Gardening', 'Interior Design', 'Fashion Design', 'Event Planning', 'Wedding Planning', 'Travel Planning', 'Financial Planning', 'Investing', 'Trading', 'Personal Finance', 'Real Estate', 'Entrepreneurship', 'Startup', 'Innovation', 'Creativity', 'Problem Solving', 'Critical Thinking', 'Decision Making', 'Collaboration', 'Teamwork', 'Conflict Resolution', 'Diversity and Inclusion', 'Equality and Equity', 'Social Justice', 'Environmental Sustainability', 'Climate Change', 'Renewable Energy', 'Circular Economy', 'Zero Waste', 'Plastic Pollution', 'Biodiversity', 'Wildlife Conservation', 'Animal Welfare', 'Human Rights']),
            'languages' => json_encode(fake()->randomElements(['english', 'spanish', 'french', 'german', 'chinese', 'japanese', 'arabic', 'russian', 'portuguese'], 2)),
            'learning_preferences' => json_encode(fake()->randomElements(['Visual', 'Auditory', 'Kinesthetic'], 2)),
            'preferred_pronouns' => fake()->randomElement(['He/Him', 'She/Her', 'They/Them']),
            'preferred_study_tools' => json_encode(fake()->randomElements(['flashcards', 'mind_maps', 'note_taking', 'ai_tools', 'online_tutorials', 'textbooks', 'videos', 'study_groups'], 2)),
            'agree_terms' => fake()->boolean(),
            'show_email' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_birthday' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_pronouns' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_languages' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_education' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_awards' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_skills' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_hobbies' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_academic_interests' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_professional_interests' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_learning_preferences' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_study_tools' => fake()->randomElement(['public', 'friends', 'only_me']),
            'show_social_links' => fake()->randomElement(['public', 'friends', 'only_me']),
            'last_login_at' => now(),
            'last_login_ip' => fake()->ipv4(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'iso_code' => fake()->countryCode(),
            'country' => fake()->country(),
            'timezone' => fake()->timezone(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
