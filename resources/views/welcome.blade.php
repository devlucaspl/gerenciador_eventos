<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel='stylesheet' href='/css/styles.css'>
        <script src='/js/scripts.js'></script>

    </head>
    <body>
            <h1>Titulo</h1>
            @if( 10 > 7)
                <p>mo vdd isso aí</p>
            @endif

            @for($i = 0; $i < count($arr); $i++)
                <p> {{ $arr[$i] }} </p>
            @endfor

    </body>
</html>
