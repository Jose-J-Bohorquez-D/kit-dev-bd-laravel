<?php

use Illuminate\Support\Facades\Route;

$posts = [
    ['titulo' => 'primer post'],
    ['titulo' => 'segundo post'],
    ['titulo' => 'tercero post'],
    ['titulo' => 'cuarto post'],
    ['titulo' => 'quinto post']
];

Route::view('/',"welcome")->name('home');
Route::view('/nosotros',"nosotros")->name('nosotros');
Route::view('/blog',"blog", ['posts' => $posts])->name('blog');
Route::view('/ingreso',"ingreso")->name('ingreso');
Route::view('/registro',"registro")->name('registro');
Route::view('/contacto',"contacto")->name('contacto');
Route::view('/donaciones',"donaciones")->name('donaciones');

/*Route::get('/', function () {
    return view('welcome');
});*/