<?php

declare(strict_types=1);

namespace Modules\Job\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Job\Models\Result;

class ResultFactory extends Factory
{
    protected $model = Result::class;

    public function definition(): array
    {
        return [
            //            'task_id'     => $this->faker->randomDigit,
            'ran_at' => $this->faker->dateTimeBetween('-1 hour'),
            'duration' => (string) $this->faker->randomFloat(11, 0, 8_000_000),
            'result' => $this->faker->sentence,
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-6 months'),
            'updated_at' => $this->faker->dateTimeBetween('-6 months'),
        ];
    }
}