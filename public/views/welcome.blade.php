@include('partials.header')
<body>

    @include('partials.search')
    <div class="container">
            <div id="movies" class="row">
         <h2>Last searched</h2> 
            @foreach($latestMovies as $movieLat)
                    <div class="col-md-3">
                        <div class="well text-center">
                        <img src="{{$movieLat->poster}}">
                            <h5>{{$movieLat->title}}</h5>
                            {{$movieLat->updated_at->format('M d, Y')}}<br>
                            <a class="btn btn-primary" href="{{route('movie', $movieLat->id)}}">Details</a>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</body>
</html>