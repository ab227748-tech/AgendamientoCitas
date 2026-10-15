<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [homecontroller::class, 'index']);

// lado del cliente para agendar

Route::post('/create', [homecontroller::class, 'store']);

// IniciarSesion
Route::get('/login', [authcontroller::class, 'index']);
Route::post('/login/admin', [authcontroller::class, 'login']);

Route::group(['middlaware' => 'auth'], function () {
    Route::get('/administrador/dashboard', [admincontroller::class, 'index']);

    // servicios
    Route::get('/administrador/servicio', [admincontroller::class, 'servicio']);
    Route::post('/administrador/servicio/create', [admincontroller::class, 'serviciostore']);
    Route::put('/administrador/servicio/update/{id}', [admincontroller::class, 'servicioupdate']);
    Route::delete('/administrador/servicio/delete/{id}', [admincontroller::class, 'Serviciodelete']);

    // citas
    Route::get('/administrador/citaspendientes', [admincontroller::class, 'citaspendientes']);
    Route::put('/administrador/citaspendientes/update/{id}', [admincontroller::class, 'citaspendientesupdate']);

    Route::get('/administrador/citasconfirmadas', [admincontroller::class, 'citasconfirmadas']);
    Route::put('/administrador/citasconfirmadas/update/{id}', [admincontroller::class, 'citasconfirmadasupdate']);

    // historial
    Route::get('/administrador/historial', [admincontroller::class, 'historial']);
});
