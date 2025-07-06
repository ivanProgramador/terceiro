@extends('layouts.layout_main') <!-- traz o layout --> 
@section('conteudo') <!-- tez o conteudo do layout junto com as libs associadas -->

<div class="container">
    
     <div class="row">
          <div class="col-md-4 offset-md-4 ">
             
              
              
            
              @if($errors -> any())

                 <div class="alert alert-danger p-2 mb-3">

                    @foreach($errors->all() as $mensagen_errors)
                      
                       <p>{{ $mensagen_errors }}</p>
                        
                    @endforeach

                 </div>
                 @endif

                 <!-- Quando se trata de upload de arquivo não esqueça o parametro:
                     enctype="multipart/form-data"
                 -->
                 <form action="{{ route('upload_submissao') }}" method="post" enctype="multipart/form-data">
                    
                    @csrf

                    <div class="mb-3">
                         <input type="file" name="ficheiro" class="form-control">
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>


                 
                 </form>



              
              
              
              
              
            
@endsection <!-- finaliza a renderização -->