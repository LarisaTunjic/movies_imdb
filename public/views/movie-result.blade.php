@include('partials.header')
   
@include('partials.search')
    
    <div class="container">
        <div id="movies" class="row">
            <h2>Search results</h2>
            @foreach($displayResults as $movie)
                <div class="col-md-3">
                    <div class="well text-center">
                    <img class="image-fluid" src="{{$movie->poster}}">
                        <h5>{{$movie->title}}</h5>
                        {{$movie->updated_at->format('d.m.Y')}}<br>
                        {{$movie->type}}<br>
                        <a class="btn btn-primary" href="{{route('movie', $movie->id)}}">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>