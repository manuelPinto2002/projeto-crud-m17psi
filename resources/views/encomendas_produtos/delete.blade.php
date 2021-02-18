@extends('layouts.app')
<h2>deseja eliminar o cliente</h2>
<h2>{{$encomenda->observacoes}}</h2>

<form method="post" action="{{route('encomendas_produtos.destroy',['id'=>$encomenda_produto->id_encomenda_produto])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">





</form>