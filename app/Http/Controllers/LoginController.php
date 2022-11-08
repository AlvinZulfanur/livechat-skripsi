<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function login(request $request){
        // Validasi login user
        $validasiuser =  $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($validasiuser)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        return back()->with(['Loginerror' => 'Login Gagal, Silahkan masukkan data dengan benar!']); 
    }

    public function logout(Request $request){

    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login');
    }
}
