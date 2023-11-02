<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipesController extends Controller
{
    public function index(){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        return view('recipes.index', ['recipes' => Recipe::where('user_id', session('user_id'))->get()]);
    }

    public function create(){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        return view('recipes.create');
    }

    public function store(){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        return "store recipe";
    }

    public function show($id){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        return view('recipes.view');
    }

    public function edit($id){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        return view('recipes.edit');
    }

    public function update($id){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        return "update recipe";
    }

    public function delete($id){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        return view('recipes.delete');
    }

    public function destroy(){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        return "destroy recipe";
    }
}
