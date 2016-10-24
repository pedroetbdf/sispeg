@extends('principal')

@section('conteudo')
  
 <div class="row clearfix">
 
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				   <ol class="breadcrumb breadcrumb-bg-red">
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li class="active">Library</li>
								<li class="active">Cadastro de Produto</li>
                            </ol>
                    <div class="card">
					 <div class="block-header">
                <h2>Cadastrar</h2>
            </div>
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
</div>
</div>
@stop
