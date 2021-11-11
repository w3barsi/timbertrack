<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function registerEmployee(Request $request, Faker $faker)
    {
        $first_name = $faker->firstName();
        $last_name = $faker->lastName();
        $username = $first_name . $last_name;
        $name = $first_name . ' ' . $last_name;
        $email = $first_name . $last_name . '@gmail.com';

        $position = $request->position === null ? 'Employee' : $request->position;
        
        User::create([
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => Hash::make('123'),
            'position' => $position,
        ]);

        return back();
    }

    public function store(Request $req)
    {

        //validate
        $this->validate($req, [
            'name' => 'required|max:255',
            'username' => 'required|unique:users,username|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|confirmed',

        ]);

        User::create([
            'name' => $req->name,
            'username' => $req->username,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'position' => 'Admin',
        ]);

        //sign-in
        auth()->attempt($req->only('email', 'password'));
        //redirect
        return redirect()->route('Stocks');
    }
}
