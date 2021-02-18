@extends('layout2')
@section('nav')
@endsection
@section('conteudolink')
<h1 style="text-align: center;">Clientes</h1>
<hr/>
<ul>
@foreach($encomendas as $encomenda)
<br>
<table style="align-items: center;">
	<tr>
		<td>
<button  class="btn btn-outline-warning" type="button" >
					
<a href="{{route('encomendas.show', ['id'=>$encomenda->id_encomenda])}}">
{{$encomenda->id_encomenda}}</a>
 	</button> 
 	</td>
 	</tr>
 	</table>
@endforeach
</ul>
<br>
<a href="{{route('encomendas.create')}}">criar</a>

@endsection




