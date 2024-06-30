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

Route::get('/', function () {
    $mascotas = [
        ["nombre"=>"Copernico","Especie"=>"Canino"],
        ["nombre"=>"Firulais","Especie"=>"Canino"],
        ["nombre"=>"Lola","Especie"=>"Ave"],
        ["nombre"=>"Einstein","Especie"=>"Canino"],
        ["nombre"=>"Nietshe","Especie"=>"Felino"],
        ["nombre"=>"Dante","Especie"=>"Canino"],
        ["nombre"=>"Tesla","Especie"=>"Roedor"],
        ["nombre"=>"Roberto","Especie"=>"Ave"],
    ];
    $usuario="Milena";
    return view('welcome',["mascotas"=>$mascotas],["usuario"=>$usuario]);
});

//Route ::view("/usuario","usuario");



Route::get('/', function () {
    $productos = [
        ["nombre"=>"pelota colores ","cupon"=>"   CUPON:coperfree"],
        ["nombre"=>"max adulto 3 kg","cupon"=>"   CUPON:comida50"],
        ["nombre"=>"provet","cupon"=>"      CUPON:medicamentosale"],
        ["nombre"=>"fiplo","cupon"=>"    CUPON:comida50"],
        ["nombre"=>"cepillo","cupon"=>"   CUPON:aseoblack"],
        ["nombre"=>"pollo plastico","cupon"=>"   CUPON:coperfree"],
        
    ];
    $usuario="Milena";
    return view('welcome',["productos"=>$productos],["usuario"=>$usuario]);
});



