<?php

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

//Route ::view("/usuario","usuario");


Route::get('/', function () {
    $servicios = [
        ["nombre"=>"Baño ","Precio"=>" $55.000"],
        ["nombre"=>"Corte","Precio"=>" $25.000"],
        ["nombre"=>"Vacunacion","Precio"=>" $75.000"],
        ["nombre"=>"Nutricionista","Precio"=>" $25.000"],
        ["nombre"=>"Consulta ","Precio"=>" $35.000"],
        ["nombre"=>"Laboratorios","Precio"=>" $65.000"],
        
    ];
    $usuario="Milena";
    return view('servicios',["servicios"=>$servicios],["usuario"=>$usuario]);
});

