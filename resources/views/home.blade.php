<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-primi-passi</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    Hello World!!!
    <br>
    <hr>
    <br>
    Welcome {{$name}} {{$surname}}.
    <br>
    <hr>
    <br>
    <div class="my-container">
        <h2>Header: </h2>
        <ul>
            @foreach($urls as $url)
            <li><a href="{{route($url)}}">Vai alla {{$url}}</a></li>
            @endforeach
        </ul>
    </div>
</body>
</html>