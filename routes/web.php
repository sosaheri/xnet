<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/notes/create', [App\Http\Controllers\NoteController::class, 'create'])->name('notes.create');
Route::get('/notes/{id}', [App\Http\Controllers\NoteController::class, 'edit'])->name('notes.edit');
Route::post('/notes', [App\Http\Controllers\NoteController::class, 'store'])->name('notes.store');
Route::delete('notes/{id}', [App\Http\Controllers\NoteController::class, 'destroy'])->name('notes.destroy');

