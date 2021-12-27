@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1> Crie Seu Evento </h1>
    <form action="/events" method='POST' enctype='multipart/form-data'>
        @csrf
        <div class="form-group">
            <label for="image"> Imagem de Divulgação: </label>
            <input type="file" id='image' name='image' class="from-control-file">
        </div>
        <div class="form-group">
            <label for="title"> Evento: </label>
            <input type="text" class="form-control" id='title' name='title' placeholder='Nome do Evento...'>
        </div>
        <div class="form-group">
            <label for="title"> Cidade: </label>
            <input type="text" class="form-control" id='city' name='city' placeholder='Local do Evento...'>
        </div>
        <div class="form-group">
            <label for="title"> O evento é privado?: </label>
            <select name="private" id="private" class='form-control'>
                <option value="0"> Não </option>
                <option value="1"> Sim </option>
            </select>
        </div>
        <div class="form-group">
            <label for="title"> Descrição: </label>
            <textarea name="description" id="description" class="form-control" placeholder='Descrição do Evento...'></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value='Criar Evento'>
    </form>
</div>

@endsection