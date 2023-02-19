@extends('layouts.main')

@section('title', $event -> title)

@section('content')

    <div class="imagem">
        <img src="/img/events/{{ $event -> image }}" alt="" class="image">
    </div>

@endsection