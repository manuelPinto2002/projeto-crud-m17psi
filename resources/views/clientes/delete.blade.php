@extends('layouts.app')
<h2>deseja eliminar o cliente</h2>
<h2>{{$cliente->nome}}</h2>

<form method="post" action="{{route('clientes.destroy',['id'=>$cliente->id_cliente])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">





</form>