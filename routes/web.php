<?php

use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

//rota parra o formulario
Route::get('/',[Main::class, 'formulario'])->name('formulario');

Route::post('/submissao',[Main::class, 'submissao'])->name('submissao');

//upload de ficheiros 

Route::get('/upload',[Main::class, 'upload'])->name('upload');

Route::post('/upload_submissao',[Main::class, 'upload_submissao'])->name('upload_submissao');


 