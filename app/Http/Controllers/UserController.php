<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\EmployeeExpense;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('Employee.index');
    }

    public function create()
    {
        return view('Employee.index');
    }

    public function store(StoreRequest $request)
    {
        DB::transaction(function () use ($request) {
            #--Create--User--
            $user = User::create([
                'uuid' => Str::orderedUuid(),
                'name' => $request['name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'password' =>  Hash::make($request['password'])
            ]);
            #--Create--Student--
            $employeeExpense = EmployeeExpense::create([
                'uuid' => Str::orderedUuid(),
                'user_id' => $user->id,
            ]);
        }, 2);
        return redirect('login')->withSuccess('Great! You have Successfully registered');
    }

    public function login()
    {
        return view('Employee.index');
    }

    public function authLogin(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            return redirect('expense-manager/dashboard')->withSuccess('You have Successfully loggedin');
        }
        return back()->withError('Invalid credentials')->onlyInput('email', 'password');
    }
}
