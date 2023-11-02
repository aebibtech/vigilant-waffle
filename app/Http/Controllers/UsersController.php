<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Session;

class UsersController extends Controller
{
    public function loginForm(){
        if(session('userId')){
            return "logged in with user ".session('userId'); // change
        }
        return view('users/login');
    }

    public function login(Request $request){
        if(session('userId')){
            return "logged in with user ".session('userId'); // change
        }
        $validated = $request->validate(User::$loginRules);
        if(Auth::attempt($validated)){
            session(['userId' => User::where('email', $validated['email'])->get()[0]->id]);
            return "logged in with user ".session('userId'); // change
        }
        $validator = Validator::make($validated, []);
        $validator->errors()->add('loginError', 'Invalid email or password');
        return redirect(route('loginForm'))->withErrors($validator);
    }

    public function registerForm(){
        return view('users/register');
    }

    public function register(Request $request){
        return "register";
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
