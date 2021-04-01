<div class="container">
    <div class="jumbotron">
        <h3 class="text-center">Search for movies of TV shows</h3>
        <div class="row">
            <div class="col-md-4">
            <form id="searchForm" action="{{route('all-results')}}" method="get">
                <input type="text" class="form-control" name="query" id="searchText" placeholder="Search...">
                <button class="btn btn-primary" type="submit">Search All Database</button>
            </form></div>
            <div class="col-md-4">
            <form id="searchForm" action="{{route('series-results')}}" method="get">
                <input type="text" class="form-control" name="query" id="searchText" placeholder="Series name...">
                <button class="btn btn-primary"  type="submit">Search Series</button>
            </form>
            </div>
            <div class="col-md-4">
            <form id="searchForm" action="{{route('movies-results')}}" method="get">
                <input type="text" class="form-control" name="query" id="searchText" placeholder="Movie title...">
                <button class="btn btn-primary"  type="submit">Search Movies</button>
            </form>
            </div>
        </div>
    </div>
</div>