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

    public function Search(Request $request)
    {

        $req = $request;
        $searchMovies = $request->input('query');

        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://www.omdbapi.com/?&apikey=c138b63c&s='.$searchMovies);

        $response = $request->getBody();
        $arrayResponse = json_decode($response->getContents(), true);
   
        foreach($arrayResponse as $key => $arr) {
            if($key == "Search") {
                foreach($arr as $a){

                    $aimdb = $a['imdbID'];
                    $requestB = $client->get('http://www.omdbapi.com/?&apikey=c138b63c&i='.$aimdb);
                    $responseB = $requestB->getBody();
                    $arrayResponseB = json_decode($responseB->getContents(), true);
                  
                    if ( !empty( $arrayResponseB)  ) {
                        $insertMovie = Movies::firstOrCreate([
                            'title' => $arrayResponseB['Title']
                        ], [
                            'imdbID'=> $arrayResponseB['imdbID'],
                            'type'=> $arrayResponseB['Type'],
                            'poster'=> $arrayResponseB['Poster'],
                            'rating'=> $arrayResponseB['Rated'],
                            'genre'=> $arrayResponseB['Genre'],
                            'director'=> $arrayResponseB['Director'],
                            'writer'=> $arrayResponseB['Writer'],
                            'actor'=> $arrayResponseB['Actors'],
                            'plot'=> $arrayResponseB['Plot'],
                            'language'=> $arrayResponseB['Language'],
                            'country'=> $arrayResponseB['Country'],
                            'awards'=> $arrayResponseB['Awards'],                            
                        ]);

                        $insertMovie->save();
                    }
                  
                }
            }
        }
        
        $displayResults = Movies :: WHERE('title', 'LIKE','%' .$searchMovies. '%') -> get();

        return view('movie-result', compact('displayResults'));
    }

    public function moviesSearch(Request $request)
    {

        $req = $request;
        $movieSearch = $request->input('query');

        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://www.omdbapi.com/?&apikey=c138b63c&type=movie&s='.$movieSearch);

        $response = $request->getBody();
        $arrayResponse = json_decode($response->getContents(), true);
   
        foreach($arrayResponse as $key => $arr) {
            if($key == "Search") {
                foreach($arr as $a){

                    $aimdb = $a['imdbID'];
                    $requestB = $client->get('http://www.omdbapi.com/?&apikey=c138b63c&i='.$aimdb);
                    $responseB = $requestB->getBody();
                    $arrayResponseB = json_decode($responseB->getContents(), true);
                  
                    if ( !empty( $arrayResponseB)  ) {
                        $insertMovie = Movies::firstOrCreate([
                            'title' => $arrayResponseB['Title']
                        ], [
                            'imdbID'=> $arrayResponseB['imdbID'],
                            'type'=> $arrayResponseB['Type'],
                            'poster'=> $arrayResponseB['Poster'],
                            'rating'=> $arrayResponseB['Rated'],
                            'genre'=> $arrayResponseB['Genre'],
                            'director'=> $arrayResponseB['Director'],
                            'writer'=> $arrayResponseB['Writer'],
                            'actor'=> $arrayResponseB['Actors'],
                            'plot'=> $arrayResponseB['Plot'],
                            'language'=> $arrayResponseB['Language'],
                            'country'=> $arrayResponseB['Country'],
                            'awards'=> $arrayResponseB['Awards'],
                        ]);

                        $insertMovie->save();
                    }
                  
                }
            }
        }

        $displayResults = Movies :: WHERE('title', 'LIKE','%' .$movieSearch. '%') -> get();

        return view('movie-result', compact('displayResults'));
    }


    public function seriesSearch(Request $request)
    {

        $req = $request;
        $searchSeries = $request->input('query');

        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://www.omdbapi.com/?&apikey=c138b63c&type=series&s='.$searchSeries);

        $response = $request->getBody();
        $arrayResponse = json_decode($response->getContents(), true);
   
        foreach($arrayResponse as $key => $arr) {
            if($key == "Search") {
                foreach($arr as $a){

                    $aimdb = $a['imdbID'];
                    $requestB = $client->get('http://www.omdbapi.com/?&apikey=c138b63c&i='.$aimdb);
                    $responseB = $requestB->getBody();
                    $arrayResponseB = json_decode($responseB->getContents(), true);
                  
                    if ( !empty( $arrayResponseB)  ) {
                        $insertMovie = Movies::firstOrCreate([
                            'title' => $arrayResponseB['Title']
                        ], [
                            'imdbID'=> $arrayResponseB['imdbID'],
                            'type'=> $arrayResponseB['Type'],
                            'poster'=> $arrayResponseB['Poster'],
                            'rating'=> $arrayResponseB['Rated'],
                            'genre'=> $arrayResponseB['Genre'],
                            'director'=> $arrayResponseB['Director'],
                            'writer'=> $arrayResponseB['Writer'],
                            'actor'=> $arrayResponseB['Actors'],
                            'plot'=> $arrayResponseB['Plot'],
                            'language'=> $arrayResponseB['Language'],
                            'country'=> $arrayResponseB['Country'],
                            'awards'=> $arrayResponseB['Awards'],
                        ]);

                        $insertMovie->save();
                    }
                  
                }
            }
        }

        $displayResults = Movies :: WHERE('title', 'LIKE','%' .$searchSeries. '%') -> get();

        return view('movie-result', compact('displayResults'));
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
