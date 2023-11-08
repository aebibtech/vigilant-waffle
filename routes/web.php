<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\InstructionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/test-connection', function(){
    try{
        DB::connection()->getPdo();
        return "Database connection established successfully!";
    }
    catch(Exception $e){
        return "Unable to connect to the database. Error: " . $e->getMessage();
    }
});

// User routes
Route::get('/login', [UsersController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [UsersController::class, 'login'])->name('login');
Route::get('/register', [UsersController::class, 'registerForm'])->name('registerForm');
Route::post('/register', [UsersController::class, 'register'])->name('register');
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');

// Recipe routes
Route::get('/recipes', [RecipesController::class, 'index'])->name('recipes');
Route::get('/recipes/new', [RecipesController::class, 'create'])->name('new.recipe');
Route::post('/recipes', [RecipesController::class, 'store'])->name('store.recipe');
Route::get('/recipes/{id}', [RecipesController::class, 'show'])->name('show.recipe');
Route::get('/recipes/edit/{id}', [RecipesController::class, 'edit'])->name('edit.recipe');
Route::patch('/recipes/{id}', [RecipesController::class, 'update'])->name('update.recipe');
Route::get('/recipes/delete/{id}', [RecipesController::class, 'delete'])->name('delete.recipe');
Route::delete('/recipes/{id}', [RecipesController::class, 'destroy'])->name('destroy.recipe');

// AJAX routes
Route::get('/recipelist', [RecipesController::class, 'recipeList']);
Route::get('/search', [RecipesController::class, 'search'])->name('search.recipe');

// Ingredient routes
Route::post('/recipes/{id}/ingredients', [IngredientsController::class, 'store'])->name('store.ingredient');
Route::patch('/recipes/{id}/ingredients/{ingId}', [IngredientsController::class, 'update'])->name('update.ingredient');
Route::get('/recipes/{id}/ingredients/{ingId}/delete', [IngredientsController::class, 'delete'])->name('delete.ingredient');

// Instruction routes
Route::post('/recipes/{id}/instructions', [InstructionsController::class, 'store'])->name('store.instruction');
Route::patch('/recipes/{id}/instructions/{insId}', [InstructionsController::class, 'update'])->name('update.instruction');
Route::get('/recipes/{id}/instructions/{ingId}/delete', [InstructionsController::class, 'delete'])->name('delete.instruction');