@extends('layouts.main')

@section('title', 'Contatos')

@section('content')

            <h1>Titulo</h1>
            @if( 10 > 7)
                <p>mo vdd isso aí</p>
            @endif

            @for($i = 0; $i < count($arr); $i++)
                <p> {{ $arr[$i] }} </p>
            @endfor

@endsection