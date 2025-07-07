<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Else_;
use Illuminate\Support\Facades\Storage;

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
        //mensagens de erro personalizadas, como não existem apenas regras de preenchimento
        // o tamanho ddo dadoss tem que ser validado, então eu posso personalizar as mensagens de erro
        //para cada regra de validação, eu posso informar uma mensagem de erro personalizada 
        //existem varios ti´pos de validação, como por exemplo: email, url, date, entre outros
        [
            'text_produto.required' => 'Você esqueceu de informar o produto',
            'text_marca.required' => 'Você esqueceu de informar a marca',
            'text_produto.min' => 'O produto deve ter no mínimo 3 caracteres',
            'text_produto.max' => 'O produto deve ter no máximo 10 caracteres',


        ]
    );
   


    
 }



 //upload de ficheiros

  public function upload(){

    ///formulario de upload
    return view('upload');
   

  }

    public function upload_submissao(Request $request){
    
        //validação do ficheiro e upload
        //nessa validdação eu estou informando que o campo ficheiro é obrigatório
        //e que ele deve ser um ficheiro do tipo jpg, png ou jpeg
        //a função validate vai verificar se o ficheiro é do tipo correto e se ele foi
        //enviado corretamente, se não for o caso ela vai redirecionar o usuario  
        //required significa que o campo é obrigatório
        //file significa que o campo deve ser um ficheiro
        //mimes significa que o arquivo de imagem  deve ser do tipo jpg, png ou jpeg
        //max significa que o arquivo de imagem não pode ser maior que 100kb
        //dimensions significa que a imagem deve ter uma largura mínima de 100px e uma altura mínima de 100px


    
        $validacao = $request->validate([

            'ficheiro'=>'required|file|mimes:jpg,png,jpeg|max:100|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ],
        [
             'ficheiro.required' => 'Você esqueceu de secionar uma imagem',
             'ficheiro.file' => 'O aquivo deve ser uma imagem',
             'ficheiro.mimes' => 'O arquivo  deve ser do tipo jpg, png ou jpeg',
             'ficheiro.max' => 'O arquivo não pode ser maior que 100kb',
             'ficheiro.dimensions' => 'A imagem deve ter uma largura mínima de 100px e uma altura mínima de 100px, e uma largura máxima de 1000px e uma altura máxima de 1000px',       

        ]);

        //agora eu quero gurdar na pasta public/arquivos o ficheiro que foi enviado

        $request->file('ficheiro')->storeAs('','novo_ficheiro.pdf',['disk'=>'ficheiros']);


    
    }
  



 




}