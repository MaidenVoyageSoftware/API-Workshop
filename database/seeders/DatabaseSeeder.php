<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\TimeclockEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory()->count(4)->create();
        TimeclockEvent::factory(25)->create();
    }
}
