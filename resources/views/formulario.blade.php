@extends('layouts.layout_main') <!-- traz o layout --> 
@section('conteudo') <!-- tez o conteudo do layout junto com as libs associadas -->

<div class="container">
    
     <div class="row">
          <div class="col-md-4 offset-md-4 ">
             
              
              
              {{-- erros
              
                A variável $errors e disponibilizada pelo laravel para mostrar ao cliente os erros pre-definidos no metodo 
                    validate() do controller, ou sej, se o cliente não preencher o campo porduto ou marca, o laravel vai
                    mostrar uma mensagem de erro dizendo que o campo é obrigatório, e essa mensagem é armazenada na variável $errors
                    e para mostrar essa mensagem de erro, usamos a diretiva @if($errors->any()) que verifica se há algum erro
                    e se houver, ele entra no bloco de código e mostra as mensagens de erro.
                    A diretiva @foreach($errors->all() as $mensagem_errors) percorre todos os erros e mostra cada um deles.
                    A diretiva @endforeach fecha o bloco de código.
                    A diretiva @if($errors->any()) fecha o bloco de código.
              --}}
                 
              @if($errors -> any())

                 <div class="alert alert-danger p-2 mb-3">

                    @foreach($errors->all() as $mensagen_errors)
                      
                       <p>{{ $mensagen_errors }}</p>
                        
                    @endforeach

                 </div>
                 @endif
              
              
              
              
              
               <!-- 
                    quando mensionar uma rota no route() escreva o nome sem a barra. 
               -->
               

               <form action="{{ route('submissao') }}" method="POST">
                    
                     <!--isso é uma diretiva de segurança do laravel nenhum formulario funciona sem ela -->
                      @csrf

                      <!--
                          Se o formulário for muito longo eo cliente preencheu boa parte dele, por um erro em um dos campo o usuário não pode
                          perder o resto dos dados e caso então os campos devem manter os dados digitados e mostrar o erro para que o usuario 
                          faça a correção e continue o fluxo por isso eu usso a função old() no value do campo ele segura o valor que foi 
                          digitado antes do primiero submit, isso evita que o usuário tenha um retrabalho.
                      -->
                      
                      <div class="mb-3">
                            <label for="text_produto" class="form-label">Produto:</label>
                            <input type="text" class="form-control" id="text_produto" name="text_produto" value="{{ old('text_produto')}}" >
                      </div>

                       <div class="mb-3">
                            <label for="text_marca" class="form-label">Marca:</label>
                            <input type="text" class="form-control" id="text_marca" name="text_marca" value="{{ old('text_marca')}}">
                      </div>

                      <div class="text_center">
                            <button type="submit" class="btn btn-primary"  value="Guardar"> Gravar</button>
                      </div>

               </form>



          </div>
     </div>

</div>

@endsection <!-- finaliza a renderização -->