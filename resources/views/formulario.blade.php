@extends('layouts.layout_main') <!-- traz o layout --> 
@section('conteudo') <!-- tez o conteudo do layout junto com as libs associadas -->

<div class="container">
    
     <div class="row">
          <div class="col-md-4 offset-md-4 ">
             

               <form action="" method="post">

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