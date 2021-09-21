<?php

namespace Database\Factories;

use App\Models\CaseStudy;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CaseStudyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CaseStudy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
        ];
    }
}
