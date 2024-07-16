<a href="{{route('movie', $movie['id'])}}">
    <p><strong>Title: </strong>{{$movie['title']}}</p>
</a>
<p><strong>Original title: </strong>{{$movie['original_title']}}</p>
<p><strong>Vote: </strong>{{$movie['vote']}}</p>
<p><strong>Date: </strong>{{Carbon::parse($movie['date'])->format('d/m/y')}}</p>