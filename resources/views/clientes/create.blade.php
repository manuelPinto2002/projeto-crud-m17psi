
@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Create generos</title>
</head>
<body>
<form action="{{route('clientes.store')}}" enctype="multipart/form-data" method="post">
	@csrf

Nome: <input type="text" name="nome"><br>
Morada: <input type="text" name="morada"><br>
telefone: <input type="text" name="telefone"><br>
Email: <input type="text" name="email"><br>
<label>img encomenda</label>
<input type="file" name="imagem_capa">
@if($errors->has('imagem_capa'))
verifique se introduziu as corretamente
@endif

<input type="submit" value="Enviar">

</form>

</body>
</html>






