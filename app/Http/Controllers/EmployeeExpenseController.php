<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeExpenseController extends Controller
{
    public function dashboard()
    {
        return view('Employee.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
