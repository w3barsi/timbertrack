<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $req)
    {
        $this->validate($req, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($req->only('username', 'password'), $req->remember)) {
            return back()->with('status', 'Username or Password is incorrect.');
        }

        return redirect()->route('Stock');
    }
}
