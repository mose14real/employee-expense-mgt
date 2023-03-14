<?php

namespace Database\Seeders;

use App\Models\EmployeeExpense;
use Illuminate\Database\Seeder;

class EmployeeExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeExpense::factory(1000)->create();
    }
}
