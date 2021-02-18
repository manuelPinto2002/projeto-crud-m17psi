@extends('layouts.app')
<h2>deseja eliminar o cliente</h2>
<h2>{{$vendedor->nome}}</h2>

<form method="post" action="{{route('vendedores.destroy',['id'=>$vendedor->id_vendedor])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">





</form>