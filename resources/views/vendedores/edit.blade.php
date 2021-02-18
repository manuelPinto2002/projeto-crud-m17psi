@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>clientes</title>
</head>
<body>
<form action="{{route('vendedores.update',['id'=>$vendedor->id_vendedor])}}" method="post">
	@csrf
	Nome: <input type="text" name="nome" value="{{$vendedor->nome}}"><br>
	@if($errors->has('nome'))
	erro designacao
	@endif
	<br>
	Especialidade: <input type="text" name="especialidade" value="{{$vendedor->especialidade}}"><br>
	@if($errors->has('especialidade'))
	erro stock
	@endif
	<br>
	Email: <input type="text" name="email" value="{{$vendedor->email}}"><br>
	@if($errors->has('email'))
	erro preco
	@endif
<input type="submit" value="Enviar">

</form>

</body>
</html>