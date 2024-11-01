<?php

namespace Database\Factories;

use App\Models\Field;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use function fake;

class FieldFactory extends Factory
{
    protected $model = Field::class;

    public function definition(): array
    {
        return [
            'name' => fake()->streetName(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
