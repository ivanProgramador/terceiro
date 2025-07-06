@extends('layouts.layout_main') <!-- traz o layout --> 
@section('conteudo') <!-- tez o conteudo do layout junto com as libs associadas -->

<div class="container">
    
     <div class="row">
          <div class="col-md-4 offset-md-4 ">
             
              
              
              {{-- erros
              
                A varivel erros e disponibilizada eplo laravel para mostrar ao cliente os erros pre-definidos no metodo 
                oque eu estou fazndo e um loop pra mostra-las na tela 
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
                      
                      <div class="mb-3">
                            <label for="text_produto" class="form-label">Produto:</label>
                            <input type="text" class="form-control" id="text_produto" name="text_produto">
                      </div>

                       <div class="mb-3">
                            <label for="text_marca" class="form-label">Marca:</label>
                            <input type="text" class="form-control" id="text_marca" name="text_marca">
                      </div>

                      <div class="text_center">
                            <button type="submit" class="btn btn-primary"  value="Guardar"> Gravar</button>
                      </div>

               </form>



          </div>
     </div>

</div>

@endsection <!-- finaliza a renderização -->