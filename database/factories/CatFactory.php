<?php

namespace Database\Factories;

use App\Models\Cat;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender=$this->faker->randomElement(['MALE', 'FEMALE']);
        return [
            'name' => $this->faker->firstname(),
            'gender' => $this->faker->randomElement(['MALE', 'FEMALE']),
            'birthdate' => $this->faker->dateTimeThisDecade(),
            'breed' => $this->faker->word(),
            'description' => $this->faker->sentences(3, true),
        ];
    }
}
