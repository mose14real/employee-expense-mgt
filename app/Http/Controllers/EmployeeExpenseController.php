<?php

namespace App\Http\Controllers;

use App\Models\EmployeeExpense;
use Illuminate\Support\Facades\Auth;

class EmployeeExpenseController extends Controller
{
    public function dashboard()
    {
        $expenses = EmployeeExpense::orderby('id', 'desc')->get();
        $reimburse = EmployeeExpense::where('status', 'Reimbursed')->sum('total');
        return view(
            'Employee.dashboard',
            [
                "expenses" => $expenses,
                "reimburse" => $reimburse
            ]
        );
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
