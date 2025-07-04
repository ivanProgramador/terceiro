<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{

    //mostrando o formulario 
    public function formulario(){

        return view('formulario');
    }


    //tratando os dados vindos do formulário

    public function submissao(){

        
    }


}