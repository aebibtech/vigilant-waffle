<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Instruction;

class InstructionsController extends Controller
{
    public function store($id, Request $request){
        if(session('userId') == NULL){
            return redirect()->route('loginForm');
        }
        $recipe = Recipe::findOrFail($id);
        $instruction = new Instruction;
        $instruction->name = $request->input('name');
        $instruction->description = $request->input('description');
        $instruction->recipe_id = $recipe->id;
        $instruction->save();
        return redirect()->route('show.recipe', $recipe->id);
    }

    public function update($id, $insId, Request $request){
        if(session('userId') == NULL){
            return redirect()->route('loginForm');
        }
        $instruction = Instruction::findOrFail($insId);
        $instruction->name = $request->input('name');
        $instruction->description = $request->input('description');
        $instruction->save();
        return redirect()->route('show.recipe', $id);
    }

    public function delete($id, $ingId, Request $request){
        if(session('userId') == NULL){
            return redirect()->route('loginForm');
        }
        $instruction = Instruction::findOrFail($ingId);
        $instruction->delete();
        return redirect()->route('show.recipe', $id);
    }
}
