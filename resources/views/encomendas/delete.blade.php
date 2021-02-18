@extends('layouts.app')
<h2>deseja eliminar o cliente</h2>
<h2>{{$encomenda->observacoes}}</h2>

<form method="post" action="{{route('encomendas.destroy',['id'=>$encomenda->id_encomenda])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">





</form>