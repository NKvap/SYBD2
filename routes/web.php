<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\LoginController;
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

Route::get('/category', [CategoryController::class, 'index'])->middleware('auth');

Route::get('/category/{id}', [CategoryController::class, 'show'])->middleware('auth');

Route::get('/film', [FilmController::class, 'index'])->name('film.index')->middleware('auth');

Route::get('/film/{id}', [FilmController::class, 'show'])->middleware('auth');

Route::get('/hall', [HallController::class, 'index'])->middleware('auth');

Route::get('/hall/{id}', [HallController::class, 'show'])->middleware('auth');

Route::get('/session', [SessionController::class, 'index'])->middleware('auth');

Route::get('/session/{id}', [SessionController::class, 'show'])->middleware('auth');

Route::get('/ticket', [TicketController::class, 'index'])->middleware('auth');

Route::get('/user', [UserController::class, 'index'])->middleware('auth');

Route::get('/user/{id}', [UserController::class, 'show'])->middleware('auth');

Route::get('/film/create', [FilmController::class, 'create'])->name('film.create')->middleware('auth');

Route::post('/film', [FilmController::class, 'store'])->name('film.store')->middleware('auth');

Route::delete('/film/destroy/{id}', [FilmController::class, 'destroy'])->name('film.destroy')->middleware('auth');

Route::get('/film/edit/{id}', [FilmController::class, 'edit'])->name('film.edit')->middleware('auth');

Route::post('/film/update/{id}', [FilmController::class, 'update'])->name('film.update')->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/auth', [LoginController::class, 'authenticate']);

Route::get('/error', function () {
   return view('error', ['message' => session('message')]);
});
