<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutosController extends Controller
{

 public function index(){

     $produtos = Produto::all()->sortbydesc('designacao');

       return view('produtos.index', ['produtos'=>$produtos]);

}

public function show (Request $request){
    $idProduto=$request->id;


$produto=Produto::where('id_produto',$idProduto)->first();

    return view('produtos.show',  ['produto'=>$produto]);
}


			public function create() {

	return view ('produtos.create');
}
public function store(Request $request){
	

	$novoProduto=$request -> validate ([
				'designacao'=>['required','min:3','max:100'],
				'stock'=>['nullable','min:0','max:2000','numeric'],
				'preco'=>['nullable','min:1','max:2000'],
				'observacoes'=>['nullable','min:3','max:255'],
	]);
$produto=Produto::create($novoProduto);
	return redirect()->route('produtos.show',['id'=>$produto->id_produto]);
}


public function edit (Request $request){
$idProduto=$request->id;
$produto = Produto::where('id_produto',$idProduto)->first();

  return view('produtos.edit',  ['produto'=>$produto]);
}

public function update (Request $request){
$idProduto=$request->id;
$produto=Produto::findOrFail($idProduto);

$autalizarProduto=$request -> validate ([
		
				'designacao'=>['required','min:3','max:100'],
				'stock'=>['nullable','min:0','max:2000','numeric'],
				'preco'=>['nullable','min:1','max:2000'],
				'observacoes'=>['nullable','min:3','max:255'],
	]);
$produto->update($autalizarProduto);

return redirect()->route('produtos.show',['id'=>$produto->id_produto]);
}

public function delete(Request $request){
$idProduto=$request->id;
$produto = Produto::where('id_produto',$idProduto)->first();

return view('produtos.delete',['produto'=>$produto]);
}

public function destroy(Request $request){
$idProduto=$request->id;
$produto=Produto::findOrFail($idProduto);
$produto->delete();

return redirect()->route('produtos.index')->with('mensagem','produto eliminado!');
}



}