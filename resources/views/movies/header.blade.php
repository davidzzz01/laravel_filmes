<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg bg-danger" style="height: 80px;">
<div class="container-fluid">
    <img  style="width:60px;"src="https://imgs.search.brave.com/oXdesIVweLZngCcpFUKSsMxizoq7lGFt13qo_Gd324k/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9kMjlm/aHB3MDY5Y3R0Mi5j/bG91ZGZyb250Lm5l/dC9pY29uL2ltYWdl/LzU5NTQ1L3ByZXZp/ZXcuc3Zn.svg">
    <a class="navbar-brand" href="#" style="color: white; font-size: 30px;">Filmania</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;"> Meus Ingressos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}" style="color: white;"> Lista de Filmes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">Notícias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">Horários</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Pesquise seu filme" aria-label="Search">
            <button class="btn btn-light" type="submit">Pesquisar</button>
        </form>
    </div>
</div>
</nav>
