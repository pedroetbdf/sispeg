
@extends('principal')
@section('conteudo')
<h1>Detalhes do produto {{ $p->nome }} </h1>
  <ul>
   	  	<li>
  		
  		Valor: R$ {{ $p->valor }}
  	</li>
  	
  	<li>
  		
  	    Descrição: {{ $p->descricao }}
  	</li>
  	  	<li>
  		
  		Quantidade em estoque {{ $p->quantidade }} 
  	</li>

  </ul>
@stop

