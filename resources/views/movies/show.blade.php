<!DOCTYPE html>
<html>
<head>
    <title>{{ $movie['title'] }}</title>
</head>
<body>
    <h1>{{ $movie['title'] }}</h1>
    <p>{{ $movie['overview'] }}</p>
    <p>Release Date: {{ $movie['release_date'] }}</p>
    <p>Rating: {{ $movie['vote_average'] }}</p>
</body>
</html>
