<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function authRegister(Request $request) 
    {
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('login');
    }

    public function authLogin(Request $request)
    {   
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }
    }

    public function authLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
    
}
