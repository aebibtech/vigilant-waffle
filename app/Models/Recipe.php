<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Recipe extends Model
{
    use HasFactory;

    public static $rules = [
        'title' => 'required|min:2',
        'description' => 'required|min:2',
        'image' => 'required'
    ];
    protected $fillable = ['title', 'description', 'image', 'user_id'];

    public static function boot(){
        parent::boot();
        $validate = function(Recipe $recipe){
            Validator::validate($recipe->toArray(), static::$rules);
        };
        static::creating($validate);
        static::updating($validate);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }

    public function instructions(){
        return $this->hasMany(instruction::class);
    }
}
