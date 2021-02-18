@extends('layout2')
@section('nav')
@endsection


@section('conteudolink')

<h1 style="text-align: center;">Clientes</h1>
<hr/>


<ul>
@foreach($clientes as $cliente)
<br>
<table style="align-items: center;">
	<tr>
		<td>
<button  class="btn btn-outline-warning" type="button" >
					
<a href="{{route('clientes.show', ['id'=>$cliente->id_cliente])}}">
 {{$cliente->nome}}</a>
 	</button> 
 	</td>
 	</tr>
 	</table>
@endforeach
</ul>
<br>
<br>
<a href="{{route('clientes.create')}}">criar</a>

@endsection

