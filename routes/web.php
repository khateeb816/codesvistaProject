<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'index'])->middleware('auth');

Route::get('/login' , [AuthController::class , 'login'])->name('login');
Route::post('/login' , [AuthController::class , 'loginPost'])->name('loginPost');

Route::get('/register' , [AuthController::class , 'register'])->name('register');
Route::post('/register' , [AuthController::class , 'registerPost'])->name('registerPost');

Route::match(['get' , 'post'] , '/logout' , [AuthController::class , 'logout'])->name('logout');

Route::post('/password-reset' , [AuthController::class , 'passwordReset'])->name('password.request');

Route::get('/users' , [UserController::class , 'index'])->name('users');
Route::get('/users/add' , [UserController::class , 'add'])->name('users.add');
Route::post('/users' , [UserController::class , 'store'])->name('users.store');
Route::get('/users/{id}' , [UserController::class , 'edit'])->name('users.edit');
Route::put('/users/{id}' , [UserController::class , 'update'])->name('users.update');
Route::delete('/users/{id}' , [UserController::class , 'destroy'])->name('users.destroy');
