<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GestorDescansosController;
use App\Http\Controllers\ReservacionesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\DescansoController;
use App\Http\Controllers\ReservacioneController;


// routes/web.php

use App\Http\Controllers\MenuController;

Route::get('/menu', [MenuController::class, 'mostrarMenu'])->name('mostrar-menu');


Route::resource('reservaciones',ReservacioneController::class);

Route::resource('descansos',DescansoController::class);

Route::resource('mesas',MesaController::class);

// web.php
// web.php
// web.php
Route::put('/admin/update/{id}',[AdminController::class,'update'] )->name('admin.update');

Route::get('/admin/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');

Route::resource('/admin',AdminController::class);

//Route::get('/administrador/profile',[AdminController::class,'index']);//esta es la ruta buena por si algo paso

//Route::get('/descansos',[GestorDescansosController::class,'index']);

Route::resource('/product',ProductController::class);

//Route::get('/reservaciones',[ReservacionesController::class,'index']);

Route::get('/', function () {
    return view('auth.login');
});




Route::get('/editprofile', function () {
    return view('admin.edit_profile');
});

/*Route::get('/menu', function () {
    return view('menu.menu');
});*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
