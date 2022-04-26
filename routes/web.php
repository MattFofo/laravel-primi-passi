<?php

use Illuminate\Support\Facades\Route;

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
    $greetings = [
        'name' => 'World',
        'type' => 'Hello'
    ];
    return view('home', $greetings);
});

Route::get('/pagina1', function () {
    return view('pagina1');
});

Route::get('/pagina2', function () {
    return view('pagina2');
});

Route::get('/pagina3', function () {
    return view('pagina3');
});
