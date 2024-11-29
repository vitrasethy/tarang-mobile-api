<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    public function run(): void
    {
        Field::factory()->count(10)->sequence(
            ['open_time' => '06:00:00', 'close_time' => '22:00:00', 'sport_type_id' => 1],
            ['open_time' => '07:00:00', 'close_time' => '22:00:00', 'sport_type_id' => 2],
            ['open_time' => '06:00:00', 'close_time' => '22:00:00', 'sport_type_id' => 3],
            ['open_time' => '05:00:00', 'close_time' => '22:00:00', 'sport_type_id' => 1],
            ['open_time' => '06:00:00', 'close_time' => '22:00:00', 'sport_type_id' => 1],
            ['open_time' => '06:00:00', 'close_time' => '22:00:00', 'sport_type_id' => 4],
            ['open_time' => '06:00:00', 'close_time' => '22:00:00', 'sport_type_id' => 1],
            ['open_time' => '09:00:00', 'close_time' => '22:00:00', 'sport_type_id' => 1],
            ['open_time' => '06:00:00', 'close_time' => '22:00:00', 'sport_type_id' => 2],
            ['open_time' => '06:00:00', 'close_time' => '22:00:00', 'sport_type_id' => 1],
        )->create();
    }
}
