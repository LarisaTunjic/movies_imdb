<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('home')}}"> Movies</a>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-4">
            <img class="thumbnail" src="{{$movie->poster}}" >
        </div>
        <div class="col-md-8">
            <h2> {{$movie->title}}</h2>
            <ul class="list-group">
                <li class="list-group-item">Genre(s): {{$movie->genre}}</li>
                <li class="list-group-item">Released: {{$movie->published_at}}</li>
                <li class="list-group-item">Rated: {{$movie->rating}}</li>
                <li class="list-group-item">Director(s): {{$movie->director}}</li>
                <li class="list-group-item">Writer(s): {{$movie->writer}}</li>
                <li class="list-group-item">Actors(s): {{$movie->actor}}</li>
                <li class="list-group-item">Awards Won: {{$movie->awards}}</li>
                <li class="list-group-item">Country/Countries: {{$movie->country}}</li>
                <li class="list-group-item">Language(s): {{$movie->language}}</li>
                <li class="list-group-item">Dvd info: {{$movie->awards}}</li>
                <li class="list-group-item">Box office results: {{$movie->boxOffice}}</li>
                <li class="list-group-item">Production company: {{$movie->production}}</li>
                <li class="list-group-item">Website(s): {{$movie->webSite}}</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="well">
            <h3>Plot</h3>
            {{$movie->plot}}
            <hr>
            <a href="http://imdb.com/title/imdbID" target="_blank" class="btn btn-primary">View IMDB</a>
            <a href="{{route('home')}}" class="btn btn-default">Back to search</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>