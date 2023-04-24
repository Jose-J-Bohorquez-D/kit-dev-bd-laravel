<?php

use Illuminate\Support\Facades\Route;

Route::view('/',"welcome")->name('home');
Route::view('/nosotros',"nosotros")->name('nosotros');
Route::view('/blog',"blog")->name('blog');
Route::view('/ingreso',"ingreso")->name('ingreso');
Route::view('/registro',"registro")->name('registro');
Route::view('/contacto',"contacto")->name('contacto');
Route::view('/donaciones',"donaciones")->name('donaciones');

/*Route::get('/', function () {
    return view('welcome');
});*/