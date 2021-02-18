
@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Create enc/pro</title>
</head>
<body>
<form action="{{route('encomendas_produtos.store')}}" method="post">
	@csrf


id produto: <input type="text" name="id_produto"><br>
@if($errors->has('id_produto'))
	erro produto
	@endif
	<br>
id encomenda: <input type="text" name="id_encomenda"><br>
@if($errors->has('id_encomenda'))
	erro encomendas
	@endif
	<br>
quantidade: <input type="text" name="quantidade"><br>
@if($errors->has('quantidade'))
	erro quantidade
	@endif
	<br>
	preco: <input type="text" name="preco"><br>
@if($errors->has('preco'))
	erro preco
	@endif
	<br>




<input type="submit" value="Enviar">

</form>

</body>
</html>






