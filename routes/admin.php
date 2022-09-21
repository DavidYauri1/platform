<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SedeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PuestoController;


Route::get( '', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');


Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->names('users');
Route::resource('/puestos',PuestoController::class);
Route::resource('/sedes',SedeController::class);
Route::resource('/areas',AreaController::class);