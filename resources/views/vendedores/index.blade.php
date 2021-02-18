@extends('layout2')
@section('nav')
@endsection
@section('conteudolink')

<h1 style="text-align: center;">Vendedores</h1>
<hr/>
<ul>
@foreach($vendedores as $vendedor)
<br>
<table style="align-items: center;">
	<tr>
		<td>
<button  class="btn btn-outline-warning" type="button" >
					
<a href="{{route('vendedores.show', ['id'=>$vendedor->id_vendedor])}}">
{{$vendedor->nome}}</a>
 	</button> 
 	</td>
 	</tr>
 	</table>
@endforeach
</ul>

<a href="{{route('vendedores.create')}}">criar</a>


@endsection






