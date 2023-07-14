<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $category = $this->faker->randomElement([
            'Personal',
            'Work',
            'Hobbies',
            'Web Development',
            'Travel',
            'Engineering',
            'Study',
            'Sport',
            'Environment',
            'Music'
        ]);
        
        return [
            'name' => $category,
            'slug' => strtolower($category),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
