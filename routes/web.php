<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
// Route::post('/user', [UserController::class, 'store'])->name('user.store');
// Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
// Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');

Route::resource('user', UserController::class);
// Route::get('/', [UserController::class, 'index'])->name('user.index');

