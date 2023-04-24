<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/users',[UserController::class, 'index']);
Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::post('/users',[UserController::class, 'store']);
Route::get('/users/view',[UserController::class, 'view']);
Route::get('/users/delete/{id}',[UserController::class, 'delete'])->name('users.delete');
Route::get('/users/edit/{id}',[UserController::class, 'edit'])->name('users.edit');
Route::put('/users/update/{id}',[UserController::class, 'update'])->name('users.update');
