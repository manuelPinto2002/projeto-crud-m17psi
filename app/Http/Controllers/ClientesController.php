<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Models\Cliente;
use App\Models\Encomenda;
use App\Models\Produto;
use App\Models\Vendedor;
use Auth;


class ClientesController extends Controller
{

public function index(){

     $clientes = Cliente::all()->sortbydesc('nome');

       return view('clientes.index', ['clientes'=>$clientes]);

}

public function show (Request $request){
    $idCliente=$request->id;


    $cliente=Cliente::where('id_cliente', $idCliente)->with(['encomendas','produtos','Encomendas_produtos'])->first();

    return view('clientes.show',  ['cliente'=>$cliente]);
}

			public function create() {

	$encomendas=Encomenda::all();
	return view ('clientes.create',['encomendas'=>$encomendas]);
}
public function store(Request $request){
	

	$novoCliente=$request -> validate ([
				'nome'=>['required','min:3','max:100'],
				'morada'=>['nullable','min:3','max:20'],
				'telefone'=>['nullable','numeric','min:1'],
				'email'=>['nullable','min:3','max:255'],
				'imagem_capa'=>['image','nullable','max:2000']
	]);
if ($request->hasFile('imagem_capa')) {
	$nomeimagem=$request->file('imagem_capa')->getClientOriginalName();

	$nomeimagem=time().'_'.$nomeimagem;
	$guardaimagem=$request->file('imagem_capa')->storeAs('imagem/clientes',$nomeimagem);

	$novoCliente['imagem_capa']=$nomeimagem;
}


$cliente=Cliente::create($novoCliente);
	return redirect()->route('clientes.show',['id'=>$cliente->id_cliente]);
}


public function edit (Request $request){
$idCliente=$request->id;
$encomendas=Encomenda::all();
$cliente = Cliente::where('id_cliente',$idCliente)->first();
if (Gate::allows('atualizar-cliente',$cliente)||Gate::allows('admin')) {



return view('clientes.edit',['cliente'=>$cliente,'encomendas'=>$encomendas]);
	}
	else{
		return redirect()->route('clientes.index')->with('mensagem','nao tem permissão para acedar a pagina');
	}
}
	


public function update (Request $request){
$idCliente=$request->id;
$cliente=Cliente::findOrFail($idCliente);
$imagemantiga=$cliente->imagem_capa;
$autalizarCliente=$request -> validate ([
				'nome'=>['required','min:3','max:100'],
				'morada'=>['nullable','min:3','max:20'],
				'telefone'=>['nullable','numeric','min:1'],
				'email'=>['nullable','min:3','max:255'],
				'imagem_capa'=>['image','nullable','max:2000']
	]);

if ($request->hasFile('imagem_capa')) {
	$nomeimagem=$request->file('imagem_capa')->getClientOriginalName();

	$nomeimagem=time().'_'.$nomeimagem;
	$guardaimagem=$request->file('imagem_capa')->storeAs('imagem/clientes',$nomeimagem);

if (!is_null($imagemantiga)) {
	Storage::Delete('imagem/clientes/.$imagemantiga');
}
	$autalizarCliente['imagem_capa']=$nomeimagem;
}

$cliente->update($autalizarCliente);

return redirect()->route('clientes.show',['id'=>$cliente->id_cliente]);
}
public function delete(Request $request){
$idCliente=$request->id;
$cliente = Cliente::where('id_cliente',$idCliente)->first();

return view('clientes.delete',['cliente'=>$cliente]);
}

public function destroy(Request $request){
$idCliente=$request->id;
$cliente=Cliente::findOrFail($idCliente);
$cliente->delete();

return redirect()->route('clientes.index')->with('mensagem','cliente eliminado!');
}






}