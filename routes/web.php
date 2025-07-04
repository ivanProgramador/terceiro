<?php

use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

//rota parra o formulario
Route::get('/',[Main::class, 'formulario'])->name('formulario');

 
Route::post('/submeter',[Main::class,'submissao'])->name('submissao');

