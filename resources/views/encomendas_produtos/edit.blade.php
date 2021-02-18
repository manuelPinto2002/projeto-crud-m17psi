@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>clientes</title>
</head>
<body>
<form action="{{route('encomendas.update',['id'=>$encomenda->id_encomenda])}}" method="post">
	@csrf

id cliente: <input type="text" name="id_cliente" value="{{$encomenda->id_cliente}}"><br>
id vendedor: <input type="text" name="id_vendedor" value="{{$encomenda->id_vendedor}}"><br>
data: <input type="date" name="data" value="{{$encomenda->data}}"><br>
observações: <input type="text" name="observacoes" value="{{$encomenda->observacoes}}"><br>
<input type="submit" value="Enviar">





</form>

</body>
</html>