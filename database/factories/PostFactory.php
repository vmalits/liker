<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class PostFactory extends Factory
{
    protected $model = Post::class;

    #[ArrayShape(['text' => "string"])] public function definition(): array
    {
        return [
            'text' => $this->faker->text,
        ];
    }
}
