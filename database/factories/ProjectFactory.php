<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        "title" => fake() -> word,
        "type" => fake() -> word,
        "image" => 'https://picsum.photos/200/300?random=' . fake() -> numberBetween(1, 100),
        ];
    }
}
