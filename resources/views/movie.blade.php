<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>{{$movie['title']}}</h1>
    <a href="{{route('home')}}">Torna alla home</a>
</body>

</html>