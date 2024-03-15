<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello world!']);
});

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('/film', [FilmController::class, 'index'])->name('film.index');

//Route::get('/film/{id}', [FilmController::class, 'show']);

Route::get('/hall', [HallController::class, 'index']);

Route::get('/hall/{id}', [HallController::class, 'show']);

Route::get('/session', [SessionController::class, 'index']);

Route::get('/session/{id}', [SessionController::class, 'show']);

Route::get('/ticket', [TicketController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/film/create', [FilmController::class, 'create'])->name('film.create');

Route::post('/film', [FilmController::class, 'store'])->name('film.store');

Route::delete('/film/destroy/{id}', [FilmController::class, 'destroy'])->name('film.destroy');

Route::get('/film/edit/{id}', [FilmController::class, 'edit'])->name('film.edit');
Route::post('/film/update/{id}', [FilmController::class, 'update'])->name('film.update');
