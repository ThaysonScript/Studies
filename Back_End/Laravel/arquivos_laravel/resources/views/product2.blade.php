@extends('layouts.main')

@section('title', 'Produto2')

@section('content')

    @if($id != null)
        <p>foi digitado {{ $id }}</p>
    @endif

<a href="/product">voltar para produtos</a>

@endsection