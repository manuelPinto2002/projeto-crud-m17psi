@extends('layout2')
@section('nav')
@endsection
@section('conteudolink')
<h1 style="text-align: center;">Encomendas Produtos</h1>
<hr/>
<ul>
@foreach($encomendas_produtos as $encomenda_produto)
<br>
<table style="align-items: center;">
	<tr>
		<td>
<button  class="btn btn-outline-warning" type="button" >
					
<a href="{{route('encomendas_produtos.show', ['id'=>$encomenda_produto->id_enc_prod])}}">
{{$encomenda_produto->id_enc_prod}}</a>
 	</button> 
 	</td>
 	</tr>
 	</table>
@endforeach
</ul>
{{$encomendas_produtos->render()}}
@endsection




