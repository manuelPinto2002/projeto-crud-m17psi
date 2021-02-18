@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>clientes</title>
</head>
<body>
<form action="{{route('clientes.update',['id'=>$cliente->id_cliente])}}" method="post">
	@csrf

Nome: <input type="text" name="nome" value="{{$cliente->nome}}"><br>
Morada: <input type="text" name="morada" value="{{$cliente->morada}}"><br>
telefone: <input type="text" name="telefone" value="{{$cliente->telefone}}"><br>
Email: <input type="text" name="email" value="{{$cliente->email}}"><br>
<input type="file" name="imagem_capa">{{$cliente->imagem_capa}}
<input type="submit" value="Enviar">

</form>

</body>
</html>