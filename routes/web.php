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

Route::get('/page1', function () {
    $page = [
        'title' => 'Page1'
    ];
    return view('pagina1', $page);
})->name('pagina1');

Route::get('/page2', function () {
    $page = [
        'title' => 'Page2'
    ];
    return view('pagina2', $page);
})->name('pagina2');

Route::get('/page3', function () {
    $page = [
        'title' => 'Page3'
    ];
    return view('pagina3', $page);
})->name('pagina3');
