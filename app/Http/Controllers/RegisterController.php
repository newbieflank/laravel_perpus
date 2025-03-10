<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('login.register');
    }

    public function add(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:10',
            'password' => 'required|string',
            'email' => 'required|email',
            'name' => 'required|string',
            'phone' => 'required|string',
            'salary' => 'required|numeric',
            'loan' => 'required|numeric',
        ]);

        $user = Register::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'salary' => $request->salary,
            'loan' => $request->loan,
        ]);

        return redirect()->intended(route('dashboard', absolute: false));
    }
}
