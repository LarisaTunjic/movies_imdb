@include('partials.header')
<body>

    <div class="row">
        <div class="col-md-4" style= "width:18.333333%";>
            <img class="thumbnail" src="{{$movie->poster}}" >
        </div>
        <div class="col-md-8" style= "width: 77.666667%";>
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
</body>
</html>