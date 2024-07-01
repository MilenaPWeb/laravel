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
    $productos = [
        ["nombre"=>"Pelota  ","Precio"=>" $15.600"],
        ["nombre"=>"Max  3 kg","Precio"=>" $35.800"],
        ["nombre"=>"Provet","Precio"=>" $22.600"],
        ["nombre"=>"Fiplo","Precio"=>" $19.500"],
        ["nombre"=>"Cepillo","Precio"=>" $13.500"],
        ["nombre"=>"Pollo plastico","Precio"=>" $22.300"],
        
    ];
    $usuario="Milena";
    return view('welcome',["productos"=>$productos],["usuario"=>$usuario]);
});

