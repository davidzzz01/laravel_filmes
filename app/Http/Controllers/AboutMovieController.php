<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TmdbService;
class AboutMovieController extends Controller
{
    public function __construct(TmdbService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }
public function show($id) {

    $movie = $this->tmdbService->getMovieDetails($id);
    $release_date = $movie['release_date'];
    $formatted_date = date('d/m/Y', strtotime($release_date));

    return view('movies.AboutMovie', compact('movie','formatted_date'));
}

}

