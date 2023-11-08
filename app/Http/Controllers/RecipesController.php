<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RecipesController extends Controller
{
    public function index(){
        return view('recipes.index');
    }

    public function recipeList(){
        $recipes = Recipe::orderBy('created_at', 'DESC')->get();
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
            return redirect()->route('recipes')->withErrors($validator);
        }
        if(!(stripos($bannerImage->getMimeType(), 'image') === 0) || stripos($bannerImage->getMimeType(), 'image') === false){
            $validator = Validator::make($request->all(), []);
            $validator->errors()->add('imageError', 'Upload a valid banner image');
            return redirect()->route('recipes')->withErrors($validator);
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
        $recipe = Recipe::where('id', $id)->with('ingredients')->with('instructions')->get()[0];
        return view('recipes.view', ['recipe' => $recipe]);
    }

    public function edit($id){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        $recipe = Recipe::findOrFail($id);
        return view('recipes.edit', ['recipe' => $recipe]);
    }

    public function update($id, Request $request){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        $recipe = Recipe::findOrFail($id);
        $recipe->title = $request->input('title');
        $recipe->description = $request->input('description');
        $bannerImage = $request->file('image');
        $extension = '';
        $fileName = '';
        $finalFileName = '';
        $destinationPath = 'uploads';
        if($bannerImage != NULL){
            if(!(stripos($bannerImage->getMimeType(), 'image') === 0) || stripos($bannerImage->getMimeType(), 'image') === false){
                $validator = Validator::make($request->all(), []);
                $validator->errors()->add('imageError', 'Upload a valid banner image');
                return redirect()->route('new.recipe')->withErrors($validator);
            }
            $extension = $bannerImage->getClientOriginalExtension();
            $fileName = str_replace(".$extension", "", $bannerImage->getClientOriginalName());
            $finalFileName = $fileName.'_'.strtotime("now").".$extension";
            $bannerImage->move($destinationPath, $finalFileName);
            $recipe->image = "/$destinationPath/$finalFileName";
        }
        $recipe->save();
        return redirect()->route('show.recipe', $recipe->id);
    }

    public function delete($id){
        if(!session('userId')){
            return redirect()->route('loginForm');
        }
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();
        return redirect()->route('recipes');
    }

    public function search(Request $request){
        $searchTerm = $request->input('searchTerm');
        $preparedValue = DB::raw("'%$searchTerm%'");
        $results = Recipe::select('recipes.id', 'title', 'recipes.description', 'recipes.image')->join('ingredients', 'recipes.id', '=', 'ingredients.recipe_id')
                        ->where('title', 'LIKE', $preparedValue)
                        ->orWhere('description', 'LIKE', $preparedValue)
                        ->orWhere('ingredients.name', 'LIKE', $preparedValue)
                        ->distinct()
                        ->get();
        return view('recipes.partials.search', ['results' => $results]);
    }

    public function recipeTable(Request $request){
        $recipes = Recipe::where('user_id', $request->input('id'))->get();
        return view('recipes.partials.recipetable', ['recipes' => $recipes]);
    }
}
