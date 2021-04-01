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