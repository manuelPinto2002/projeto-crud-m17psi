@extends('layout2')
@section('nav')
@endsection
@section('conteudolink')


ID_encomenda: {{$encomenda->id_encomenda}}<br>
ID_cliente: {{$encomenda->id_cliente}}<br>
ID_Vendedor: {{$encomenda->id_vendedor}}<br>
Data: {{$encomenda->data}}
<br>

<a href="{{route('encomendas.edit',['id'=>$encomenda->id_encomenda])}}">Editar</a>
<a href="{{route('encomendas.delete',['id'=>$encomenda->id_encomenda])}}">Eliminar</a>
@endsection