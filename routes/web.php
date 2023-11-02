<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/login', [UsersController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [UsersController::class, 'login'])->name('login');
Route::get('/register', [UsersController::class, 'registerForm'])->name('registerForm');
Route::post('/register', [UsersController::class, 'register'])->name('register');
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');