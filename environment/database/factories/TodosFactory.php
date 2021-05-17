<?php

namespace Database\Factories;

use App\Models\Todos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class TodosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'todo' => $this->faker->word(),
            'user_id' => 21
        ];
    }
}
