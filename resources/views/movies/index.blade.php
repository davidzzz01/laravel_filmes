<!DOCTYPE html>
<html>
<head>
    <title>Popular Movies</title>
</head>
<body>
@include('movies.header')
<div>
<h2 class="mt-5">Filmes em destaque:</h2>
    <div class="row mt-4 mb-3">
        @foreach($popularMovies['results'] as $movie)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" class="card-img-top" alt="{{ $movie['title'] }}">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title">{{ $movie['title'] }}</h3>
                        <div class="mt-auto">
                            <a href="{{ route('sobre', ['id' => $movie['id']]) }}" class="btn btn-danger btn-block" style="width: 100%; height: 40px; font-size: 18px">Mais informações</a>


                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

















</div>



</body>
</html>
