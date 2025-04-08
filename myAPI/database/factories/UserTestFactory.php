<?php

namespace Database\Factories;

use App\Models\UserTest;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserTestFactory extends Factory
{
    protected $model = UserTest::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
