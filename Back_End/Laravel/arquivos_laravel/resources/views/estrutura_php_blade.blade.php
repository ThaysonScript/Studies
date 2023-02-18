<!--

    Aqui será um arquivo exemplo do suporte a linguagem php no blade da view
    if, else, while ... etc

    Tambem sera usado o exemplo de layouts blade

-->

@extends('layouts.main')

@section('title', 'HDC Events')


@section('content')
<h1>Algum Título</h1>

<!-- USANDO A IMG DA PASTA PUBLIC -->
<img src="/img/atual-eventos-banner.jpg" alt="Banner">
<!-- Exemplo de estrutura condicional simples no blade -->
@if(10 > 5)
    <p>"10 é maior que 5"</p>
@endif

<!-- Usando os dados criados na route (use o $/chave sempre) -->
<p>{{ $nome }}</p>

<!-- Exemplo de estrutura condicional completa no blade -->
@if($nome == 'Thayson')
    <p>O nome passado foi: {{$nome}} e ele tem {{$idade}} anos e a profissão é: {{$profiss}}</p>

@elseif($nome == 'Arnaldo')
    <p>O nome passado não foi Thayson, mas sim o nome: {{$nome}}</p>

@else
    <p>Não foi passado nenhum nome ou nome inválido</p>

@endif

<!-- Exemplo de estrutura de repetição for no blade -->
@for($i = 0; $i < count($array); $i++)
    <p>{{ $array[$i] }} - {{ $i }}</p>
@endfor

<!-- Exemplo de estrutura de repetição for no blade -->
@foreach($nomes as $nomes)

    {{-- pegando indices do foreach --}}
    <p>{{ $loop -> index }}</p>
    <p>{{ $nomes }}</p>
@endforeach

<!-- Insere codigo php no blade -->
@php

    $nome = 'joao';
    echo $nome;
    echo '<br>';

@endphp

<!-- ESSE TIPO DE COMENTARIO É INSERIDO NO DEV TOOLS -->
{{-- ESTE É UM COMENTARIO DO BLADE E NÃO É INSERIDO NO DEV TOOLS --}}

<a href="/">voltar para home</a>

@endsection