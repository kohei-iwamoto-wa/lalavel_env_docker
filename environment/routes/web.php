<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('todo', [App\Http\Controllers\TodoController::class, 'index'])->name('todo');
Route::middleware(['auth:sanctum', 'verified'])->get('create', [App\Http\Controllers\TodoController::class, 'createTodo']);
Route::middleware(['auth:sanctum', 'verified'])->post('todo', [App\Http\Controllers\TodoController::class, 'storeTodo']);
