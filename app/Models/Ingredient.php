<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Ingredient extends Model
{
    use HasFactory;

    public static $rules = [
        'name' => 'required|min:2',
        'quantity' => ['required', 'regex:/^(\d+(?:(?: \d+)*\/\d+)?)$/'],
        'unit' => 'required',
        'recipe_id' => 'required|numeric'
    ];

    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }

    public static function boot(){
        parent::boot();
        $validate = function(Ingredient $recipe){
            Validator::validate($recipe->toArray(), static::$rules);
        };
        static::creating($validate);
        static::updating($validate);
    }
}
