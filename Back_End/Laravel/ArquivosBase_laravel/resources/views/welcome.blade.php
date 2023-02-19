@extends('layouts.main')

@section('title', 'Ir para...')

@section('content')

    <h1>Hello World Laravel</h1>
    <a href="/contact">ir para contact</a>
    <br>
    <a href="/product">ir para produtos</a>
    <br>
    <a href="/estrutura_php_blade">ir para estrutura_php_blade</a>
    <br>

    {{-- variavel como vaiavel usada dentro do foreach para printar --}}
    @foreach($events as $event)

        <p>{{ $event->title }} -- {{ $event->description }}</p>    {{-- pegue o valor de title e description --}}

        {{-- adicionado no video #17 --}}
        <img src="/img/events/{{ $event -> image }}" alt="{{ $event -> title }}">

        {{-- adicionado no video #18 --}}
        <a href="/events/{{ $event -> id }}">Saber Mais</a>

    @endforeach

@endsection