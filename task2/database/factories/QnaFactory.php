<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Qna>
 */
class QnaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->email,
            'title' => $this->faker->realtext(20),
            'body' => $this->faker->realText,
            'user_name' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
