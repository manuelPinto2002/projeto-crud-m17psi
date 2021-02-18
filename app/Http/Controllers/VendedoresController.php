<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;


class VendedoresController extends Controller
{

 public function index(){

     $vendedores=Vendedor::all()->sortbydesc('nome');

       return view('vendedores.index', ['vendedores'=>$vendedores]);

}

public function show (Request $request){
    $idVendedor=$request->id;


$vendedor=Vendedor::where('id_vendedor',$idVendedor)->first();

    return view('vendedores.show',  ['vendedor'=>$vendedor]);
}
			public function create() {

	return view ('vendedores.create');
}
public function store(Request $request){
	

	$novoVendedor=$request -> validate ([
				'nome'=>['required','min:3','max:100'],
				'especialidade'=>['nullable','min:0','max:30'],
				'email'=>['nullable','min:1','max:30'],
				
	]);
$vendedor=Vendedor::create($novoVendedor);
	return redirect()->route('vendedores.show',['id'=>$vendedor->id_vendedor]);
}


public function edit (Request $request){
$idVendedor=$request->id;
$vendedor = Vendedor::where('id_vendedor',$idVendedor)->first();

  return view('vendedores.edit',  ['vendedor'=>$vendedor]);
}

public function update (Request $request){
$idVendedor=$request->id;
$vendedor=Vendedor::findOrFail($idVendedor);

$autalizarVendedor=$request -> validate ([
		
				'nome'=>['required','min:3','max:100'],
				'especialidade'=>['nullable','min:0','max:30'],
				'email'=>['nullable','min:1','max:30'],
	]);
$vendedor->update($autalizarVendedor);

return redirect()->route('vendedores.show',['id'=>$vendedor->id_vendedor]);
}

public function delete(Request $request){
$idVendedor=$request->id;
$vendedor = Vendedor::where('id_vendedor',$idVendedor)->first();

return view('vendedores.delete',['vendedor'=>$vendedor]);
}

public function destroy(Request $request){
$idVendedor=$request->id;
$vendedor=Vendedor::findOrFail($idVendedor);
$vendedor->delete();

return redirect()->route('vendedores.index')->with('mensagem','vendedor eliminado!');
}

}