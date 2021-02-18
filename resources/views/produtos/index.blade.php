@extends('layout2')
@section('nav')
@endsection
@section('conteudolink')


<h1 style="text-align: center;">Produtos</h1>
<hr/>
<ul>
@foreach($produtos as $produto)
<br>
<table style="align-items: center;">
	<tr>
		<td>
<button  class="btn btn-outline-warning" type="button" >
					
<a href="{{route('produtos.show', ['id'=>$produto->id_produto])}}">
{{$produto->designacao}}</a>
 	</button> 
 	</td>
 	</tr>
 	</table>
@endforeach
</ul>
<br>
<a href="{{route('produtos.create')}}">criar</a>


@endsection


