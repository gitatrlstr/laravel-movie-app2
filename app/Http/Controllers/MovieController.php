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
    return view('movies.create', compact('genres'));
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'genre_id' => 'required',
        'poster' => 'required',
        'synopsis' => 'required',
    ]);

    Movie::create($validatedData);

    return redirect('/movies')->with('success', 'Movie added successfully!');
}
}
