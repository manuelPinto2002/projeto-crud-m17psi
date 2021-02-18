@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>produtoss</title>
</head>
<body>
<form action="{{route('produtos.update',['id'=>$produto->id_produto])}}" method="post">
	@csrf

designação: <input type="text" name="designacao" value="{{$produto->designcao}}"><br>
stock: <input type="text" name="stock" value="{{$produto->stock}}"><br>
preço: <input type="text" name="preco" value="{{$produto->preco}}"><br>
<textarea>{{$produto->observacoes}}</textarea>
<input type="submit" value="Enviar">

</form>

</body>
</html>