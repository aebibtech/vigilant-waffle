<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Validator;

class RecipesController extends Controller
{
    public function index(){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        return view('recipes.index');
    }

    public function recipeList(){
        $recipes = Recipe::where('user_id', session('userId'))->get();
        return view('recipes.partials.recipelist', ['recipes' => $recipes]);
    }

    public function create(){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        return view('recipes.create');
    }

    public function store(Request $request){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        $bannerImage = $request->file('image');
        if($bannerImage == NULL){
            $validator = Validator::make($request->all(), []);
            $validator->errors()->add('imageError', 'Upload a banner image');
            return redirect()->route('new.recipe')->withErrors($validator);
        }
        // dd($bannerImage->getMimeType());
        // dd(stripos($bannerImage->getMimeType(), 'image') === false);
        if(!(stripos($bannerImage->getMimeType(), 'image') === 0) || stripos($bannerImage->getMimeType(), 'image') === false){
            $validator = Validator::make($request->all(), []);
            $validator->errors()->add('imageError', 'Upload a valid banner image');
            return redirect()->route('new.recipe')->withErrors($validator);
        }
        $extension = $bannerImage->getClientOriginalExtension();
        $fileName = str_replace(".$extension", "", $bannerImage->getClientOriginalName());
        $finalFileName = $fileName.'_'.strtotime("now").".$extension";
        $destinationPath = 'uploads';
        $bannerImage->move($destinationPath, $finalFileName);
        Recipe::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_id' => session('userId'),
            'image' => "/$destinationPath/$finalFileName"
        ]);
        return redirect()->route('recipes');
    }

    public function show($id){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        $recipe = Recipe::findOrFail($id);
        return view('recipes.view', ['recipe' => $recipe]);
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
