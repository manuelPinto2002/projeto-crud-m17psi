@extends('layout2')
@section('nav')
@endsection
@section('conteudolink')


ID Encomenda: {{$encomenda_produto->id_encomenda}}<br>
ID Enc Prod: {{$encomenda_produto->id_enc_prod}}<br>
ID Produto: {{$encomenda_produto->id_produto}}<br>
Quantidade: {{$encomenda_produto->quantidade}}<br>
Preço: {{$encomenda_produto->preco}}<br>
Desconto: {{$encomenda_produto->Desconto}}<br>


           <a href="{{route('encomendas_produtos.edit',['id'=>$encomenda_produto->id_encomenda_produto])}}">Editar</a>

           <a href="{{route('encomendas_produtos.delete',['id'=>$encomenda_produto->id_encomenda_produto])}}">Eliminar</a>

@endsection