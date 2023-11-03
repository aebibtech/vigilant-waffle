<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientsController extends Controller
{
    public function getIngredients($id){
        if(session('userId') == NULL){
            return "not authorized";
        }
        return view('ingredients.partials.ingredients', ['ingredients' => Ingredient::where('recipe_id', $id)->get()]);
    }
}
