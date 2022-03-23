<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\muscle_quest_indexController;
use App\Http\Controllers\muscle_quest_homeController;
use App\Http\Controllers\muscle_quest_todoController;
use App\Http\Controllers\profileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('portfolio');
});


Route::get('/muscle-quest/dashboard', function () {
    return view('muscle-quest.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/register', [RegisterController::class, 'emailVerification'])->name('register');
Route::get('/register/verify/{token}', [  RegisterController::class, 'emailVerifyComplete'])->where('token', '[A-Za-z0-9]+');
Route::post('/register/verify/{token}', [RegisterController::class, 'create'])->where('token', '[A-Za-z0-9]+');

Route::get('/muscle-quest',[muscle_quest_indexController::class,'index'])->name('muscle-quest/index');
Route::get('/muscle-quest/profile',[profileController::class,'index'])->middleware(['auth'])->name('muscle-quest/profile');
Route::post('/muscle-quest/profile',[profileController::class, 'weight_store'])->middleware(['auth'])->name('weight.create');
Route::get('/muscle-quest/todo',[muscle_quest_todoController::class,'index'])->middleware(['auth'])->name('muscle-quest/todo');
Route::post('/muscle-quest/todo',[muscle_quest_todoController::class,'store'])->middleware(['auth'])->name('todo-create');
Route::post('/muscle-quest/todo_create',[muscle_quest_todoController::class,'todo_store'])->middleware(['auth'])->name('todo.create');
Route::post('/muscle-quest/todo_check',[muscle_quest_todoController::class,'check_update'])->middleware(['auth'])->name('check.create');


