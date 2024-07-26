<!DOCTYPE html>
<html>
<head>
    <title>Popular Movies</title>
</head>
<body>
    <h1>Popular Movies</h1>
    <ul>
        @foreach ($movies['results'] as $movie)
            <li><a href="{{ url('/movies/' . $movie['id']) }}">{{ $movie['title'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>
