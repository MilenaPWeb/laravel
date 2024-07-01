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
    $sedes = [
        ["nombre"=>"Bogota  ","Direccion"=>"calle 30# 25-75"],
        ["nombre"=>"Cali  ","Direccion"=>"calle 100 #45-25"],
        ["nombre"=>"Medellin  ","Direccion"=>"Carrera 15 ##15-89"],
    ];
    $usuario="Milena";
    return view('sedes',["productos"=>$sedes],["usuario"=>$usuario]);
});



