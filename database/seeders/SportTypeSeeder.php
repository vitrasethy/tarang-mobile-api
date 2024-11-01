<?php

namespace Database\Seeders;

use App\Models\SportType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SportTypeSeeder extends Seeder
{
    public function run(): void
    {
        SportType::insert([
            [
                'name' => 'Football',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Basketball',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Volleyball',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Baseball',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
