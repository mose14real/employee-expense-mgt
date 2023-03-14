<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeExpense>
 */
class EmployeeExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'uuid' => Str::Uuid(),
            'date' => fake()->date($format = 'Y-m-d'),
            'merchant' => fake()->randomElement(
                [
                    'Fast food', 'Breakfast', 'Taxi', 'Airline', 'Hotel', 'Electronics', 'Parking', 'Ride sharing', 'Shuttle', 'Rental car', 'Restaurant', 'Office supplies'
                ]
            ),
            'total' => fake()->randomFloat(2, 12, 834),
            'status' => fake()->randomElement(['New', 'In Progress', 'Reimbursed']),
            'comment' => fake()->randomElement(['Expense from my business trip.']),
            'receipt_path' => fake()->imageUrl(300, 669)
        ];
    }
}
