<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UbicacionController;


Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });



Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');



Route::view('Inicio','home.inicio')->name('inicio');

Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);



   // creamos un grupo de rutas protegidas para los controladores

    Route::resource('roles', RolController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);


    Route::resource('departaments', DepartamentController::class);
    Route::resource('branches', BranchController::class);
    Route::resource('positions', PositionController::class);
    Route::resource('locations', LocationsController::class) 
    ->names('locations');
    Route::resource('employees', EmployeeController::class)
    ->names('employees');

    
Route::get('/Procesos_Hidricos/Captacion/Embalses',[RegistroController::class,'ListarEmbalses'])->name('Captacion.Embalses');

Route::get('/Procesos_Hidricos/Aduccion/Estacion_Bombeo',[RegistroController::class,'aduccionEB'])->name('aduccion.nuevaEB');
Route::post('/Procesos_Hidricos/Aduccion/Guardar_EB',[RegistroController::class,'guardarEB'])->name('aduccion.guardarEB');

Route::get('/Procesos_Hidricos/Captacion/Dique_Toma',[RegistroController::class,'ListarDiqueToma'])->name('lista.dique');

Route::get('/Procesos_Hidricos/Potabilizacion/Plantas_de_Filtracion',[RegistroController::class,'potabilizacionFiltracion'])->name('pot.filtracion');
Route::post('/Procesos_Hidricos/Potabilizacion/Guardar_Plantas_de_Filtración',[RegistroController::class,'guardarFiltracion'])->name('guardarFiltracion');

Route::get('/Procesos_Hidricos/Potabilizacion/Plantas_Deszanilizadoras',[RegistroController::class,'potabilizacionDeszanilizadoras'])->name('pot.deszanilizadoras');
Route::post('/Procesos_Hidricos/Potabilizacion/Guardar_Plantas_Deszanilizadoras',[RegistroController::class,'guardarDeszanilizadoras'])->name('guardar.deszanilizadoras');

Route::get('/Procesos_Hidricos/Potabilizacion/Plantas_Potabilizadoras',[RegistroController::class,'potabilizacionPotabilizadoras'])->name('pot.potabilizadoras');
Route::post('/Procesos_Hidricos/Potabilizacion/Guardar_Plantas_Potabilizadoras',[RegistroController::class,'guardarPotabilizadoras'])->name('guardar.Potabilizadoras');

Route::get('/Procesos_Hidricos/Potabilizacion/Plantas_Portatiles',[RegistroController::class,'potabilizacionPortatiles'])->name('pot.Portatiles');
Route::post('/Procesos_Hidricos/Potabilizacion/Guardar_Plantas_Portatiles',[RegistroController::class,'guardarPortatiles'])->name('guardar.Portatiles');



Route::post('/municipios',[UbicacionController::class,'municipios'])->name('municipios');
Route::post('/parroquias',[UbicacionController::class,'parroquias'])->name('parroquias');




});



