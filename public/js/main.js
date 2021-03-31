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
                            ${movie.Year}<br>
                            <a onclick="movieSelected('${movie.imdbID}')" class="btn btn-primary" href="{{movie-result}}">Detalji</a>
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
    window.location = '{{movie-result}}';
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