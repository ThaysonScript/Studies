@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<h1>Bem vindo a view php de produtos</h1>

<p>Esta view irá retornar a view de contact:</p>

<a href="/contact">Deseja visualizar contact?</a>

<br>

<a href="/product2">Deseja visualizar o produto 2?</a>

@if($busca != '')

    <p>O usuario esta procurando por: {{ $busca }}</p>

@endif

@endsection