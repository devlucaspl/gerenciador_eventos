@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    <h1>Titulo</h1>
    @if($id != null)
    <p>Exibindo Produto id: {{ $id }} </p>
    @endif

@endsection