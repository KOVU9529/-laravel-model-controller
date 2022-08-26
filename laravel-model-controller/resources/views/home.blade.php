<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <span class="red">Titolo in italiano: {{$movie-> title}} </span> <br>
                <span class="green">Titolo in lingua originale: {{$movie-> original_title}} </span> <br>
                <span class="blu">Nazionalità: {{$movie-> nationality}}</span>  <br>
                <span class="black">Data : {{$movie-> date}} </span><br>
                <span class="violet">Voto : {{$movie-> vote}} </span> <br>
            </li>
        @endforeach
    </ul>
    <div class="padrino">

    </div>
</body>
</html>