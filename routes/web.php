<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

// books
Route::get('/book', [BooksController::class, 'index']);
Route::get('/book/show/{book}', [BooksController::class, 'show']);
Route::get('/book/create', [BooksController::class, 'create']);
Route::post('/book', [BooksController::class, 'store']);

// student
/* Route::get('/student', [StudentsController::class, 'index']);
Route::get('/student/show/{student}', [StudentsController::class, 'show']);
Route::get('/student/create', [StudentsController::class, 'create']);
Route::post('/student', [StudentsController::class, 'store']);
Route::delete('/student/destroy/{student}', [StudentsController::class, 'destroy']);
Route::get('/student/edit/{student}', [StudentsController::class, 'edit']);
Route::patch('/student/update/{student}', [StudentsController::class, 'update']); */

Route::resource('student', StudentsController::class);// kalo mau pake cara ini harus sesuai dengan rout:list



// Route::get('/video', [MainController::class, 'video']);
