
@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Create generos</title>
</head>
<body>
<form action="{{route('encomendas.store')}}" method="post">
	@csrf


id cliente: <input type="text" name="id_cliente"><br>
@if($errors->has('id_cliente'))
	erro designacao
	@endif
	<br>
id vendedor: <input type="text" name="id_vendedor"><br>
@if($errors->has('id_vendedor'))
	erro designacao
	@endif
	<br>
data: <input type="date" name="data"><br>
@if($errors->has('data'))
	erro designacao
	@endif
	<br>
observações: <input type="text" name="observacoes"><br>


<input type="submit" value="Enviar">

</form>

</body>
</html>






