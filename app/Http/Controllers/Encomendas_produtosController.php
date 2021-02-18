<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda_produto;


class Encomendas_produtosController extends Controller
{

 public function index(){

     $encomendas_produtos =Encomenda_produto::paginate(8);

       return view('encomendas_produtos.index', ['encomendas_produtos'=>$encomendas_produtos]);

}

public function show (Request $request){
    $idEncomenda_produto=$request->id;


	$Encomenda_produto=Encomenda_produto::where('id_Enc_prod',$idEncomenda_produto)->first();



 return view('encomendas_produtos.show',  ['encomenda_produto'=>$encomenda_produto]);
}
public function store(Request $request){
		$novoEncomenda_produto=$request -> validate ([
				'id_cliente'=>['required','numeric','min:3','max:20'],
				'id_vendedor'=>['required','numeric','min:1','max:20'],
				'data'=>['nullable','date'],
				'observacoes'=>['nullable','min:3','max:255']
	]);
$encomenda_produto=Encomenda_produto::create($novoEncomenda_produto);
	return redirect()->route('encomendas_produtos.show',['id'=>$encomenda_produto->id_encomenda_produto]);
}


public function edit (Request $request){
$idEncomenda_produto=$request->id;
$encomenda_produto = Encomenda_produto::where('id_encomenda_produto',$idEncomenda_produto)->first();

return view('encomendas_produtos.edit',['encomenda_produto'=>$encomenda_produto]);
}

public function update (Request $request){
$idEncomenda_produto=$request->id;
$encomenda_produto=Encomenda_produto::findOrFail($idEncomenda);

$autalizarEncomenda_produto=$request -> validate ([
		
				'id_cliente'=>['required','numeric','min:3','max:20'],
				'id_vendedor'=>['required','numeric','min:1','max:20'],
				'data'=>['nullable','date'],
				'observacoes'=>['nullable','min:3','max:255']
	]);
$encomenda_produto->update($autalizarEncomenda_produto);

return redirect()->route('encomendas_produtos.show',['id'=>$encomenda_produto->id_encomenda_produto]);
}

public function delete(Request $request){
$idEncomenda_produto=$request->id;
$encomenda_produto = Encomenda_produto::where('id_encomenda_produto',$idEncomenda_produto)->first();

return view('encomendas.delete',['encomenda_produto'=>$encomenda_produto]);
}

public function destroy(Request $request){
$idEncomenda_produto=$request->id;
$encomenda_produto=Encomenda_produto::findOrFail($idEncomenda_produto);
$encomenda_produto->delete();

return redirect()->route('encomendas_produtos.index')->with('mensagem','encomenda eliminado!');
}

}