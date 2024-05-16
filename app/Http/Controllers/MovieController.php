<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AboutMovieController;
use App\Services\TmdbService;
use Illuminate\Http\Request;

class MovieController extends Controller
{
public $tmdbService;

    public function __construct(TmdbService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }

    public function index()
    {
        $popularMovies = $this->tmdbService->getPopularMovies();


        return view('movies.index', compact('popularMovies'));
    }
}
