@include('partials.header')
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('home')}}"> Movies</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">Search movies</h3>
            <form id="searchForm" action="{{route('movie-result')}}" method="get">
                <input type="text" class="form-control" name="query" id="searchText" placeholder="Movie title">
            </form>
        </div>
    </div>
    
    <div class="container">
        <div id="movies" class="row">
            <h2>Pretraženi filmovi</h2>
            @foreach($movies as $movie)
                <div class="col-md-3">
                    <div class="well text-center">
                    <img src="">
                        <h5>{{$movie->title}}</h5>
                        {{$movie->updated_at->format('d.m.Y')}}<br>
                        {{$movie->type}}<br>
                        <a class="btn btn-primary" href="{{route('movie', $movie->id)}}">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
    $(document).ready(() => {
        $('#searchForm').on('submit', (e) => {
            let searchText = $('#searchText').val();
            getMovies(searchText);
            e.preventDefault();
        });
    });

function getMovies(searchText){
    axios.get('http://www.omdbapi.com/?i=tt3896198&apikey=c138b63c&s=' + searchText)
        .then((response) => {
            console.log(response);
            let movies = response.data.Search;
            let output ='';
            $.each(movies, (index, movie) =>{
                output += `
                    <div class="col-md-3">
                        <div class="well text-center">
                            <img src="${movie.Poster}">
                            <h5>${movie.Title}</h5>
                            <a onclick="movieSelected('${movie.imdbID}')" class="btn btn-primary" href="{{route('movie', $movie->id)}}">Detalji</a>
                        </div>
                    </div>
                `;
            })

            $('#movies').html(output);
        })
        .catch((err) => {
            console.log(err);
        });
}

function movieSelected(id){
    sessionStorage.setItem('movieId',id);
    window.location = '{{route('movie', $movie->id)}}';
    return false;
}

function getMovie(){
    let movieId = sessionStorage.getItem(movieId);

    axios.get('http://www.omdbapi.com/?i=tt3896198&apikey=c138b63c&i=' + movieId)
        .then((response) => {
            console.log(response);
        })
        .catch((err) => {
            console.log(err);
        });
}
    </script>
</body>
</html>