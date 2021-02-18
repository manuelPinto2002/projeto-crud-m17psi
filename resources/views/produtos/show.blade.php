@extends('layout2')
@section('nav')
@endsection
@section('conteudolink')

ID: {{$produto->id_produto}}<br>
designacao: {{$produto->designacao}}<br>
stock: {{$produto->stock}}<br>
Preço: {{$produto->preco}}<br>

@if($produto->observacoes>0)
Oberservações: {{$produto->observacoes}}<br>
@else
<div class="alert alert-danger" role='alert'>
	sem Obsercaçoes
</div>
@endif
<br>
<a href="{{route('produtos.edit',['id'=>$produto->id_produto])}}">Editar</a>
<a href="{{route('produtos.delete',['id'=>$produto->id_produto])}}">Eliminar</a>
@endsection