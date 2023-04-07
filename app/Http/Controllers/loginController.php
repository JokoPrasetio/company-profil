<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('dashboard.login.index');
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password'=> 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Email/Password Salah');
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
