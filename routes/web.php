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

    $name = 'Simone';
    $surname = 'Ferrini';
    
    $urls = [
        $urlOne = 'pagina1',
        $urlTwo = 'pagina2',
    ];

    return view('home', compact('name','surname','urls'));
});

Route::get('/pagina1', function () {
    $name = 'Simone';
    return view('pagina1', compact('name'));
})->name('pagina1');

Route::get('/pagina2', function () {
    $surname = 'Ferrini';
    return view('pagina2', compact('surname'));
})->name('pagina2');