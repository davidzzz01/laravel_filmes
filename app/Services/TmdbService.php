<?php namespace App\Services;

use Illuminate\Support\Facades\Http;

class TmdbService
{
public $apiKey;
public $apiReadAccessToken;
public $baseUrl;

public function __construct()
{

    $this->apiKey = '813542100a7a0beea4d21c3214c3d11a';
    $this->apiReadAccessToken = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI4MTM1NDIxMDBhN2EwYmVlYTRkMjFjMzIxNGMzZDExYSIsInN1YiI6IjY2M2VjNmJmY2M4ZTQ1Mjk5Y2I1ODYyMSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.kgy_dz6tCVvzZ-rcnM_qYuRelK9mEwta4wb10XKuYnI';
    $this->baseUrl = 'https://api.themoviedb.org/3';
}
    public function getMovieDetails($id)
    {

        $apiKey = '813542100a7a0beea4d21c3214c3d11a';


        $url = "https://api.themoviedb.org/3/movie/{$id}?api_key={$apiKey}";


        $response = file_get_contents($url);


        if ($response !== false) {

            $data = json_decode($response, true);


            return $data;
        }


        return null;
    }


    public function getPopularMovies()
{
$response = Http::withToken($this->apiReadAccessToken)
->get("{$this->baseUrl}/movie/popular");

return $response->json();
}
}
