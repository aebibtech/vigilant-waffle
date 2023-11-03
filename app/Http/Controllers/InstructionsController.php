<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruction;

class InstructionsController extends Controller
{
    public function getInstructions($id){
        if(session('userId') == NULL){
            return "not authorized";
        }
        return view('instructions.partials.instructions', ['instructions' => Instruction::where('recipe_id', $id)->orderBy('step_number', 'ASC')->get()]);
    }
}
