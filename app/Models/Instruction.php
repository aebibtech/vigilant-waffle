<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Instruction extends Model
{
    use HasFactory;

    public static $rules = [
        'recipe_id' => 'required|numeric',
        'name' => 'required|min:2',
        'description' => 'required|min:2'
    ];

    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }

    public static function boot(){
        parent::boot();
        $validate = function(Instruction $recipe){
            Validator::validate($recipe->toArray(), static::$rules);
        };
        static::creating($validate);
        static::updating($validate);
    }
}
