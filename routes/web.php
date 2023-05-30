<?php

use App\Http\Controllers\UsersController;
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

Route::get('/users', [UsersController::class, 'index'])->name('user.index');
Route::get('/users/add', [UsersController::class, 'create'])->name('user.create');
Route::post('/users/add', [UsersController::class, 'store'])->name('user.store');
Route::get('/users/{id}', [UsersController::class, 'show'])->name('user.show');
Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('user.edit');
Route::put('/users/update/{id}', [UsersController::class, 'update'])->name('user.update');
Route::delete('/users/delete/{id}', [UsersController::class, 'destroy'])->name('user.destroy');