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
    $data = [
        $name = 'Simone',
        $surname = 'Ferrini',

        //qui c'è un errore, dice route(pagina1/2) non definito
        $urls = [
            $urlOne = route('pagina1'),
            $urlTwo = route('pagina2'),
        ],
    ];

    return view('home', $data);
});

Route::get('/pagina1', function () {
    $name = 'Simone';
    return view('pagina1', compact('name'));
});

Route::get('/pagina2', function () {
    $surname = 'Ferrini';
    return view('pagina2', compact('surname'));
});