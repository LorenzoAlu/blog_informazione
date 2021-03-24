<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->string,
            'slug' => $this->faker->string,
            'body' => $this->faker->text,
            'user_id'=>rand(1,30),
            'category_id'=>rand(1,30),
        ];
    }
}
