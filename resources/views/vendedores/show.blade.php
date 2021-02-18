@extends('layout2')
@section('nav')
@endsection
@section('conteudolink')

ID: {{$vendedor->id_vendedor}}<br>
Nome: {{$vendedor->nome}}<br>
Especialidade: {{$vendedor->especialidade}}<br>
Email: {{$vendedor->email}}<br>

<a href="{{route('vendedores.edit',['id'=>$vendedor->id_vendedor])}}">Editar</a>
<a href="{{route('vendedores.delete',['id'=>$vendedor->id_vendedor])}}">Eliminar</a>
@endsection
