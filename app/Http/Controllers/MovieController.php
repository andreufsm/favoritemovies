<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieAddFavoriteRequest;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index(){
        $movies = Movie::paginate();
        return MovieResource::collection($movies);
    }

    public function favorite(Movie $movie){

        $movie->is_favorite = !$movie->is_favorite;

        $movie->save();
        return new MovieResource($movie);

    }

    public function addFavorite(Movie $movie){

    }

    public function update(){

    }

    public function destroy(){

    }
}
