<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Movies;
use Response;
use DB;

class PublicController extends Controller
{

    public function home()
    {

        $latestMovies = Movies::orderBy('updated_at', 'desc')-> get();
        return view('welcome', compact('latestMovies'));
    }

    public function movieSearch(Request $request)
    {

        $req = $request;
        $searchMovies = $request->input('query');
        $movies = Movies :: WHERE('title', 'LIKE','%' .$searchMovies. '%') -> get();

        $insertMovie = Movies::firstOrCreate(
            ['title' => '${movie.Title}'],
        );

        $insertMovie->save();

        return view('movie-result', compact('movies'));
    }

    /**
     * Invoke article action.
     * 
     * @param string $slug
     * @param string $id
     * 
     * @return array
     */
    public function movie($id)
    {
        $movie = Movies::find($id);

        if (!$movie) {
            abort(404);
        }

        return view('movie', compact('movie'));

    }
    /*public function formSubmit(Request $request)
    {
        $searchMovies = $request->input('query');
        $movies = Movies :: WHERE('title', 'LIKE','%' .$searchMovies. '%') -> get();
        
        return view('welcome', compact('movies'));
    }*/
}
