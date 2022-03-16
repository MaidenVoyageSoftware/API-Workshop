<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TimeclockEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $employeeIds = Employee::all()->pluck('id')->toArray();

        return [
            "type" => $this->faker->randomElement(['in', 'out']),
            "employee_id" => $this->faker->randomElement($employeeIds),
            "event_time" => $this->faker->dateTimeThisMonth(),
        ];
    }
}
