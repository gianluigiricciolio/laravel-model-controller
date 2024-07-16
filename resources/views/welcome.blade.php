<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>Movies</h1>

    <ul class="d-flex flex-wrap">
        @foreach($movies as $movie)
        <li class="my-card col-20">
            <div class="m-3 p-3 rounded border-0">@include('shared.card')</div>
        </li>
        @endforeach
    </ul>
</body>

</html>