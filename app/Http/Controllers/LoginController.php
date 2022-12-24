<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function login(){
        return view('login');
    }

    public function loginproses(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard?login=1');
        }

        return \redirect('login');
    }

    // public function register(){
    //     User::create([
    //         'name' => 'BEM FH UPR',
    //         'email' => 'bemfhupr@gmail.com',
    //         'password' => bcrypt('BemfHuPr404#!'),
    //         'remember_token' => Str::random(60),
    //     ]);

    //     return redirect('/login');
    // }

    public function logout(){
        Auth::logout();

        return redirect('/login');
    }

}
