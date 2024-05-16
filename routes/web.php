<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AboutMovieController;
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

Route::get('/teste', function () {
    return view("teste");
});

Route::get('/movies', [MovieController::class, 'index'])->name('index');
Route::get('/movies/{id}', [AboutMovieController::class, 'show'])->name('sobre');



