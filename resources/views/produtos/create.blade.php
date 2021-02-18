
@extends('layouts.app')

<form action="{{route('produtos.store')}}" method="post">
	@csrf
	Designação: <input type="text" name="designacao" value="{{old('designacao')}}"><br>
	@if($errors->has('designacao'))
	erro designacao
	@endif
	<br>
	Stock: <input type="text" name="stock" value="{{old('stock')}}"><br>
	@if($errors->has('stock'))
	erro stock
	@endif
	<br>
	Preço: <input type="text" name="preco" value="{{old('preco')}}"><br>
	@if($errors->has('preco'))
	erro preco
	@endif
	<br>
	
	<textarea name="observacoes" >{{old('observacoes')}}</textarea>
<input type="submit" name="enviar">
</form>
