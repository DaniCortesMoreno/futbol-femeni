<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadiController;
use App\Http\Controllers\JugadorsController;
use App\Http\Controllers\PartitsController;

Route::get('/', function () {
    //return view('welcome');
    //return "Benvingut a la Guia d'Equips de Futbol Femení!";
    return view("welcome");
});

/*Route::get('/equips', [EquipController::class, 'index']);
Route::get('/equips/{id}', [EquipController::class, 'show']);*/ //No hacen falta con las de abajo
//y el comando php artisan route:list para ver todas las rutas
//con resource te crea más, como el DELETE, POST Y PATCH

//Esto significa que todas las rutas de JugadorsController se crean con el prefijo /jugadors,
// Para por ejemplo poner /estadis/create y llama al metodo create de EstadiController etc, /estadis/store etc etc.
Route::resource('/equips', EquipController::class);
Route::resource('/estadis', EstadiController::class);
Route::resource('/jugadors', JugadorsController::class); 
Route::resource('/partits', PartitsController::class);