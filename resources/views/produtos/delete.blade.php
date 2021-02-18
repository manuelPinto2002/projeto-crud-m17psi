@extends('layouts.app')
<h2>deseja eliminar o cliente</h2>
<h2>{{$produto->designacao}}</h2>

<form method="post" action="{{route('produtos.destroy',['id'=>$produto->id_produto])}}">
	@csrf
	@method('delete')
	<input type="submit" name="enviar">





</form>