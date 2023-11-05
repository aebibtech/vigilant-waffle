<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\Recipe;

class IngredientsController extends Controller
{
    public function store($id, $ingId, Request $request){
        if(session('userId') == NULL){
            return redirect()->route('loginForm');
        }
        $recipe = Recipe::findOrFail($id);
        $ingredient = new Ingredient;
        $ingredient->name = $request->input('name');
        $ingredient->quantity = $request->input('quantity');
        $ingredient->unit = $request->input('unit');
        $ingredient->recipe_id = $recipe->id;
        $ingredient->save();
        return redirect()->route('show.recipe', $id);
    }

    public function update($id, $ingId, Request $request){
        if(session('userId') == NULL){
            return redirect()->route('loginForm');
        }
        $ingredient = Ingredient::findOrFail($ingId);
        $ingredient->name = $request->input('name');
        $ingredient->quantity = $request->input('quantity');
        $ingredient->unit = $request->input('unit');
        $ingredient->save();
        return redirect()->route('show.recipe', $id);
    }
    
    public function delete($id, $ingId, Request $request){
        if(session('userId') == NULL){
            return redirect()->route('loginForm');
        }
        $ingredient = Ingredient::findOrFail($ingId);
        $ingredient->delete();
        return redirect()->route('show.recipe', $id);
    }
}
