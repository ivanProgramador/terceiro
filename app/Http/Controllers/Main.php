<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Else_;

class Main extends Controller
{

 //==============================================================//   
    public function formulario(){



        return view('formulario');

        

    
       

    }




    
//===============================================================//

// Essa função tem uma assinatura tradicional pra controlar as requisições
// A classe Request recebe todos os dados da requisição por isso a veriável
//$request se tna uma instancia dela e é passada como parametro   

 public function submissao(Request $request)
 {


    //a função validade recebe um array e dentro dele as regra de validação são definidas 
    //primeiro eu informo o campo e depois eu associoa a ele as regras por exemplo 
    // o campo text_produto não aceita uma string menor que 3 caracterese maior que 10 caracteres
    // a função não vai travar o servidor se ela não for atendida ela vai redirecionar o usuario 
    //de volta ao formulario 
    // a sintaxe das regas esta em  https://laravel.com/docs/12.x/validation


    $request->validate(
        [
            'text_produto'=>'required| min:3|max:10',
            'text_marca' =>'required|max:10'
        ],
        //mensagens de erro 
        [
            'text_produto.required' => 'Você esqueceu de informar o produto',
            'text_marca.required' => 'Você esqueceu de informar a marca',


        ]
    );
   
 }

}