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
            return redirect()->route('recipes');
        }
        return view('users/login');
    }

    public function login(Request $request){
        if(session('userId')){
            return redirect()->route('recipes');
        }
        $validated = $request->validate(User::$loginRules);
        if(Auth::attempt($validated)){
            $user = User::where('email', $validated['email'])->get()[0];
            session(['userId' => $user->id]);
            session(['username' => $user->name]);
            return redirect()->route('recipes');
        }
        $validator = Validator::make($validated, []);
        $validator->errors()->add('loginError', 'Invalid email or password');
        return redirect(route('loginForm'))->withErrors($validator);
    }

    public function registerForm(){
        if(session('userId')){
            return redirect()->route('recipes');
        }
        return view('users/register');
    }

    public function register(Request $request){
        if(session('userId')){
            return redirect()->route('recipes');
        }
        $validated = $request->validate(User::$registerRules);
        if(count(User::where('email', $validated['email'])->get()) > 0){
            $validator = Validator::make($validated, []);
            $validator->errors()->add('registerError', 'Account already exists');
            return redirect()->route('registerForm')->withErrors($validator);
        }
        User::create($validated);
        session()->flash('success', 'Account created successfully');
        return redirect()->route('loginForm');
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }

    public function profile(){
        if(session('userId') == NULL){
            return redirect()->route('loginForm');
        }
        $user = User::find(session('userId'));
        return view('users.profile', ['user' => $user]);
    }

    public function update($id, Request $request){
        if(session('userId') == NULL){
            return redirect()->route('loginForm');
        }
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => User::$registerRules['name'],
            'password' => User::$loginRules['password']
        ]);
        if(Auth::attempt(['email' => $user->email, 'password' => $validated['password']])){
            $user->name = $validated['name'];
            $user->save();
            session(['username' => $user->name]);
            session()->flash('success', 'Profile updated');
            return redirect()->route('profile');
        }
        else{
            $validator = Validator::make($validated, []);
            $validator->errors()->add('authError', 'Unable to update profile. Incorrect password');
            return redirect()->route('profile')->withErrors($validator);
        }
        return redirect()->route('profile');
    }

    public function updatePassword($id, Request $request){
        if(session('userId') == NULL){
            return redirect()->route('loginForm');
        }
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'old_password' => User::$loginRules['password'],
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required'
        ]);
        if(Auth::attempt(['email' => $user->email, 'password' => $validated['old_password']])){
            $user->password = $validated['password'];
            $user->save();
            session()->flash('success', 'Password updated successfully');
            return redirect()->route('profile');
        }
        else{
            $validator = Validator::make($validated, []);
            $validator->errors()->add('authError', 'Unable to update password. Incorrect old password');
            return redirect()->route('profile')->withErrors($validator);
        }
        return redirect()->route('profile');
    }
}
