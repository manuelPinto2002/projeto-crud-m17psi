@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>clientes</title>
</head>
<body>
<form action="{{route('encomendas_produtos.update',['id'=>$encomenda_produto->id_encomenda_produto])}}" method="post">
	@csrf


id produto: <input type="text" name="id_produto" value="{{$encomenda_produto->id_produto}}"><br>
@if($errors->has('id_produto'))
	erro produto
	@endif
	<br>
id encomenda: <input type="text" name="id_encomenda" value="{{$encomenda_produto->id_encomenda}}"><br>
@if($errors->has('id_encomenda'))
	erro encomendas
	@endif
	<br>
quantidade: <input type="text" name="quantidade" value="{{$encomenda_produto->}}quantidade"><br>
@if($errors->has('quantidade'))
	erro quantidade
	@endif
	<br>
	preco: <input type="text" name="preco" value="{{$encomenda_produto->}}preco"><br>
@if($errors->has('preco'))
	erro preco
	@endif
	<br>





</form>

</body>
</html>