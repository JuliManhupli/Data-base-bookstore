<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/authors', [MainController::class, 'authors'])->name('authors');
Route::get('/author/{id}', [MainController::class, 'author'])->name('author');
Route::get('/books', [MainController::class, 'books'])->name('books');
Route::get('/book/{id}', [MainController::class, 'book'])->name('book');
Route::get('/genres', [MainController::class, 'genres'])->name('genres');
Route::get('/genre/{id}', [MainController::class, 'genre'])->name('genre');
