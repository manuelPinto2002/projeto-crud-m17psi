<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;


class EncomendasController extends Controller
{

 public function index(){

    
     $encomendas =Encomenda::all()->sortbydesc('id_encomenda');
       return view('encomendas.index', ['encomendas'=>$encomendas]);
}

public function show (Request $request){
    $idEncomenda=$request->id;
	$encomenda=Encomenda::where('id_encomenda',$idEncomenda)->first();
    return view('encomendas.show',  ['encomenda'=>$encomenda]);
}
	public function create() {
	return view ('encomendas.create');
}

public function store(Request $request){
		$novoEncomenda=$request -> validate ([
				'id_cliente'=>['required','numeric','min:3','max:20'],
				'id_vendedor'=>['required','numeric','min:1','max:20'],
				'data'=>['nullable','date'],
				'observacoes'=>['nullable','min:3','max:255']
	]);
$encomenda=Encomenda::create($novoEncomenda);
	return redirect()->route('encomendas.show',['id'=>$encomenda->id_encomenda]);
}


public function edit (Request $request){
$idEncomenda=$request->id;
$encomenda = Encomenda::where('id_encomenda',$idEncomenda)->first();

return view('encomendas.edit',['encomenda'=>$encomenda]);
}

public function update (Request $request){
$idEncomenda=$request->id;
$encomenda=Encomenda::findOrFail($idEncomenda);

$autalizarEncomenda=$request -> validate ([
		
				'id_cliente'=>['required','numeric','min:3','max:20'],
				'id_vendedor'=>['required','numeric','min:1','max:20'],
				'data'=>['nullable','date'],
				'observacoes'=>['nullable','min:3','max:255']
	]);
$encomenda->update($autalizarEncomenda);

return redirect()->route('encomendas.show',['id'=>$encomenda->id_encomenda]);
}

public function delete(Request $request){
$idEncomenda=$request->id;
$encomenda = Encomenda::where('id_encomenda',$idEncomenda)->first();

return view('encomendas.delete',['encomenda'=>$encomenda]);
}

public function destroy(Request $request){
$idEncomenda=$request->id;
$encomenda=Encomenda::findOrFail($idEncomenda);
$encomenda->delete();

return redirect()->route('encomendas.index')->with('mensagem','encomenda eliminado!');
}

}