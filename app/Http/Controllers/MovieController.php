<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movie = new Movie();
        $movies = $movie->getAllMovies();

        return view('movies.index', ['movies' => $movies]);
    }

    public function create()
    {
        $genres = Genre::all();
        $genres = $genre->getAllGenres();
        return view('movies.create', compact('genres'));
    }
}
