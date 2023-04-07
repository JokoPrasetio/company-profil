<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('dashboard.register.index');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
        'name' => 'required|max:30',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:40'
        ]);
        $validatedData['password']= Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi Berhasil, Silahkan login');
    }
}
