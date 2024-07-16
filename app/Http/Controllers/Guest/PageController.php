<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = [
            'movies' => Movie::all()    // SELECT * FROM Movies
        ];

        return view('welcome', $data);
    }

    public function show($id)
    {

        $movie = Movie::find($id);

        return view('movie', compact('movie'));
    }
}
