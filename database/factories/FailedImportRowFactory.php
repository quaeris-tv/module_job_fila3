<?php

declare(strict_types=1);

namespace Modules\Job\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Job\Models\FailedImportRow;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Job\Models\FailedImportRow>
 */
class FailedImportRowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<FailedImportRow>
     */
    protected $model = FailedImportRow::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            // 'id' => $this->faker->randomNumber(5, false),
            // 'queue' => $this->faker->word,
            // 'payload' => $this->faker->text,
            // 'attempts' => $this->faker->boolean,
            // 'reserved_at' => $this->faker->randomNumber(5, false),
            // 'available_at' => $this->faker->randomNumber(5, false),
            // 'created_at' => $this->faker->randomNumber(5, false),
        ];
    }
}
