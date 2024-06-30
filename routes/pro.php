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
    $productos = [
        ["nombre"=>"pelota","categoria"=>"juguete"],
        ["nombre"=>"max","categoria"=>"comida"],
        ["nombre"=>"provet","categoria"=>"medicamento"],
        ["nombre"=>"fiplo","categoria"=>"comida"],
        ["nombre"=>"cepillo","categoria"=>"aseo"],
        ["nombre"=>"pollo plastico","categoria"=>"juguete"],
        
    ];
    $usuario="Milena";
    return view('welcome',["productos"=>$productos],["usuario"=>$usuario]);
});
