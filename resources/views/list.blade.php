@extends('layout.base')

@section('titulo','cadastro de usuário')

@section('conteudo')
    @foreach ( $products as $item )
        <div>{{ $item->name }}</div>
    @endforeach
   
@endsection