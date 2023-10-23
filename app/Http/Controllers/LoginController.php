<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class LoginController extends Controller
{

    public function index(){
        return view('login');
    }
    public function login(){
        if(Auth::check()){
            return redirect('posts');
        } else {
            return view('login');
        }
    }

    public function actionLogin(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

         if (Auth::Attempt($data)) {
            return redirect('posts');
        }else{
            Session::flash('error', 'Email Atau Password Salah!');
            return redirect('login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function logoutaksi(){
        Auth::logout();
        return redirect('login');
    }
}
