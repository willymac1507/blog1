<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(100)->create();
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);
        Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies',
        ]);
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web Development',
        ]);
        Category::create([
            'name' => 'Travel',
            'slug' => 'travel',
        ]);
        Category::create([
            'name' => 'Engineering',
            'slug' => 'engineering',
        ]);
        Category::create([
            'name' => 'Study',
            'slug' => 'study',
        ]);
        Category::create([
            'name' => 'Sport',
            'slug' => 'sport',
        ]);
        Category::create([
            'name' => 'Environment',
            'slug' => 'environment',
        ]);
        Category::create([
            'name' => 'Music',
            'slug' => 'music',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
