<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
 
});

// AQUI VAN TODAS LAS FUNCIONES
Route::get('/calculadoraLumen/{numero1}/{numero2}', function ($numero1, $numero2) {
    $totalSuma = $numero1 + $numero2;
    $totalResta = $numero1 - $numero2;
    $totalMultiplicacion = $numero1 * $numero2;
    $totalDivision = $numero1 / $numero2;
    return "La suma es:"  .$totalSuma ."<br>".
     "la resta es: " .$totalResta."<br>".
     "La Multiplicacion es:" .$totalMultiplicacion."<br>".
     "La Division es:" .$totalDivision;
 
});