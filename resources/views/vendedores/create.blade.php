
@extends('layouts.app')

<form action="{{route('vendedores.store')}}" method="post">
	@csrf
	Nome: <input type="text" name="nome" value="{{old('nome')}}"><br>
	@if($errors->has('nome'))
	erro designacao
	@endif
	<br>
	Especialidade: <input type="text" name="especialidade" value="{{old('especialidade')}}"><br>
	@if($errors->has('especialidade'))
	erro stock
	@endif
	<br>
	Email: <input type="text" name="email" value="{{old('email')}}"><br>
	@if($errors->has('email'))
	erro preco
	@endif

<input type="submit" name="enviar">
</form>
