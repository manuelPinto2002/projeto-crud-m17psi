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

@endsection