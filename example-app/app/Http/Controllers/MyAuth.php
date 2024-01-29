<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class MyAuth extends Controller
{
    function login_view(){
        return view('login');
    }

    function login_process(Request $req){
        $req->vaildate([
            // 'email' => 'required|email',
            // 'password' => 'required|min:6',
        ]);

        $data = $req->all();
        print_r($data);
        die;

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return Redirect::to('titles');
        }
        else{
            return Redirect::to('login');
        }
    }

    function logout_process(){

    }

    function register_view(){
        return view('register');
    }

    function register_process(Request $req){
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        User::created(['name' => $name, 'email' => $email, 'password' => $password]);

        return Redireact::to('login');
    }
}
