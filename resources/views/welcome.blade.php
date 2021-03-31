@include('partials.header')
<body>

    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">Search for movie or TV show</h3>
            
            <form id="searchForm" action="{{route('movie-result')}}" method="get">
                <input type="text" class="form-control" name="query" id="searchText" placeholder="Search...">
                <div class="row-md-3">
                    <input type="checkbox" id="all" name="all" value="all" checked>
                        <label for="all">All</label>
                    <input type="checkbox" id="movie" name="movie" value="movie">
                        <label for="movie">Movie</label>
                    <input type="checkbox" id="show" name="show" value="show">
                        <label for="show">TV show</label>
                </div>
            </form>
        </div>
    </div>
    
    <div class="container">
            <div id="movies" class="row">
         <h2>Last searched</h2>
            @foreach($latestMovies as $movieLat)
                <div class="col-md-3">
                    <div class="well text-center">
                    <img src="">
                        <h5>{{$movieLat->title}}</h5>
                        {{$movieLat->updated_at->format('Y')}}<br>
                        <a class="btn btn-primary" href="{{route('movie', $movieLat->id)}}">Details</a>
                    </div>
                </div>
            @endforeach
           
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>