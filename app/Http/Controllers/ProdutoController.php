<?php

   namespace estoque\Http\Controllers;
   use Illuminate\Support\Facades\DB;
   use Request;
   use estoque\Produto;
Class ProdutoController extends Controller{


public function lista(){

     $produtos = produto::all();
      return view('listagem')->with('produtos',$produtos);
}

  public function mostra($id){

    $produto = Produto::find($id);
  	return view('detalhes')->with('p',$produto);
  }

  public function novo(){
        return view('novo');
  }

 public function adiciona(){
 	//pegar as informações do from
       Produto::create(Request::all());
       return redirect('/produtos')->withInput();
  }

  public function remove($id){
    $produto = Produto::find($id);
    $produto->delete();
    return redirect()->action('ProdutoController@lista');
  }


}

