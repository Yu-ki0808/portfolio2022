<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\muscle_quest_indexController;
use App\Http\Controllers\muscle_quest_homeController;
use App\Http\Controllers\muscle_quest_todoController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\calorieController;
use App\Http\Controllers\kids_pikori\indexController;
use App\Http\Controllers\kids_pikori\order_trblController;
use App\Http\Controllers\kids_pikori\alphabetController;
use App\Http\Controllers\kids_pikori\numberController;
use App\Http\Controllers\kids_pikori\katakanaController;
use App\Http\Controllers\kids_pikori\hiraganaController;

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
Route::post('/muscle-quest/todo_session_delete',[muscle_quest_todoController::class,'session_delete'])->middleware(['auth'])->name('session.delete');

Route::get('/muscle-quest/calorie',[calorieController::class,'index'])->middleware(['auth'])->name('muscle-quest/calorie');
Route::post('/muscle-quest/calorie',[calorieController::class, 'calculation'])->middleware(['auth'])->name('muscle-quest/calculation');

// --------kids-pikori--------
Route::get('/kids-pikori',[indexController::class, 'index'])->name('kids-pikori');
Route::get('/kids-pikori/index',[indexController::class, 'show'])->name('kids-pikori.show');
Route::get('/kids-pikori/order',[order_trblController::class, 'show_order'])->name('kids-pikori.order');
Route::get('/kids-pikori/order-random',[order_trblController::class, 'show_order_random'])->name('kids-pikori.order-random');
Route::get('/kids-pikori/order-trbl',[order_trblController::class, 'show_trbl'])->name('kids-pikori.trbl');
Route::get('/kids-pikori/alphabet',[alphabetController::class, 'show_alphabet'])->name('kids-pikori.alphabet');
Route::get('/kids-pikori/alphabet-random',[alphabetController::class, 'show_alphabet_random'])->name('kids-pikori.alphabet-random');
Route::get('/kids-pikori/number',[numberController::class, 'show_number'])->name('kids-pikori.number');
Route::get('/kids-pikori/number-random',[numberController::class, 'show_number_random'])->name('kids-pikori.number_random');
Route::get('/kids-pikori/katakana',[katakanaController::class, 'show_katakana'])->name('kids-pikori.katakana');
Route::get('/kids-pikori/katakana-random',[katakanaController::class, 'show_katakana_random'])->name('kids-pikori.katakana-random');
Route::get('/kids-pikori/katakana-random-image',[katakanaController::class, 'show_katakana_random_image'])->name('kids-pikori.katakana-random-image');
Route::get('/kids-pikori/hiragana',[hiraganaController::class, 'show_hiragana'])->name('kids-pikori.hiragana');
Route::get('/kids-pikori/hiragana-random',[hiraganaController::class, 'show_hiragana_random'])->name('kids-pikori.hiragana_random');
Route::get('/kids-pikori/hiragana-random-image',[hiraganaController::class, 'show_hiragana_random_image'])->name('kids-pikori.hiragana_random_image');
