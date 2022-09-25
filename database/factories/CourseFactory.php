<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name     = $this->faker->words(2, true);
        $audience = ['student', 'employee'];
        $status   = ['public', 'private'];
        return [
            'name'         => $name,
            'slug'         => Str::slug($name),
            'thumbnail'    => 'https://www.w3schools.com/howto/img_avatar.png',
            'description'  => $this->faker->sentences(rand(3,2), true),
            'requirements' => $this->faker->sentences(rand(3,2), true),
            'audience'     => $audience[rand(0, 1)],
            'status'       => $status[rand(0, 1)],
            'category_id'  => Category::all()->random()->id,
            'teacher_id'   => User::all()->random()->id,
        ];
    }
}
