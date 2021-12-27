@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1> Eventos </h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procure um Evento...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2> Proximos Eventos </h2>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event -> title }}">
                <div class="card-body">
                    <p class="card-date"> 12/12/2021 </p>
                    <h5 class="card-title"> {{ $event -> title }} </h5>
                    <p class="card-participants"> X Participantes </p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary"> Saber Mais </a>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection