<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('movies.header')
<div class="mt-5">

        <div class="col-md-5 offset-md-1">

            <div class="row">

                <div  class="col-md-6" >
                    <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" style="height: 500px;">
                </div>

                <div  class="col-md-6">
                    <h1>{{ $movie['title'] }}</h1>
                    <p><i class="far fa-calendar-alt "></i> {{$formatted_date}}</p>
                    <h3>Sobre o filme:</h3>
                    <h5 style="text-align: justify">{{ $movie['overview'] }}</h5>
                    <a href="#" class="btn btn-danger mt-3" style="width: 100%;height: 60px; font-size: 22px ; display: flex; align-items: center;justify-content: center"><b>Ver onde assistir</b></a>
                </div>
            </div>
        </div>

</div>


</body>
</html>
