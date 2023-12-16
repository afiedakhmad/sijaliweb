<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function table(){
        return view('tabelmitra');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $userRole = Auth::user()->role;
            return redirect()->intended('/home');
            
        }
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(){
        Auth::logout();
    
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    
        return redirect('/login');
    }
}

