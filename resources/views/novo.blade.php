@extends('principal')

@section('conteudo')
  
 <div class="row clearfix">
 
               
      
         
    
                        <div class="header">
            
<form action="/produtos/adiciona/" method="post">
<input value="{{csrf_token()}}"  type="hidden" name="_token" >
  <div class="form-group">
  
   <div class="form-line">
    <input type="text" class="form-control" placeholder="Nome" name="nome" >
  </div>
  
  </div>
    <div class="form-group">
     <div class="form-line">
    <input name="valor" placeholder="Valor" class="form-control">
  </div>
  </div>
    <div class="form-group">
   <div class="form-line">
    <input name="quantidade" placeholder="Quantidade" class="form-control">
  </div>
  </div>
      <div class="form-group">
    <div class="form-line">
    <input name="tamanho" class="form-control" placeholder="Tamanho">
  </div>
  </div>
    <div class="form-group">
        <div class="form-line">
    <textarea name="descricao" class="form-control"  placeholder="Descrição"></textarea>
  </div>
  </div>
  <button class="btn btn-primary" type="submit">Gravar</button>
  
</form>
</div>


</div>
@stop
