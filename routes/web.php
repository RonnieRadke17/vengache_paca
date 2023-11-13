<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GestorDescansosController;
use App\Http\Controllers\ReservacionesController;

Route::get('/administrador/profile',[AdminController::class,'index']);

Route::get('/descansos',[GestorDescansosController::class,'index']);


Route::get('/reservaciones',[ReservacionesController::class,'index']);

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
