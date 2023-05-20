<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">--}}





    <title>@yield('tituloPagina')</title>


</head>
<body>

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Enlace desplegable
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route("transportes.indext") }}">Transportes</a></li>
                            <li><a class="dropdown-item" href="{{ route("camiones.indexc") }}">Camiones</a></li>
                            <li><a class="dropdown-item" href="{{ route("personas.index") }}">Personas</a></li>
                            <li><a class="dropdown-item" href="{{ route("predios.indexp") }}">Predios</a></li>
                            <li><a class="dropdown-item" href="{{ route("tmercancias.indextm") }}">Tipo_mercancia</a></li>
                            <li><a class="dropdown-item" href="{{ route("mercancias.indexm") }}">Mercancia</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>



<div>
    <a href="{{ route("transportes.indext") }}" class="btn btn-primary">
        <span class="fa-solid fa-truck"></span>Transportes
    </a>

    <a href="{{ route("camiones.indexc") }}" class="btn btn-primary">
        <span class="fa-solid fa-truck"></span>Camiones

    </a>

    <a href="{{ route("personas.index") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>Piloto
    </a>

    <a href="{{ route("predios.indexp") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>Predio
    </a>

    <a href="{{ route("tmercancias.indextm") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>Tipo_mercancia
    </a>

    <a href="{{ route("mercancias.indexm") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>Mercancia
    </a>

    <a href="{{ route("layout/home") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>home
    </a>

</div>



@section('sidebar')
    @parent
    <br>
    <h3><div class="text-center" >
            Sistema para el registro de transacciones
        </div>
    </h3>
@endsection

@section('carousel')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Kenworth1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Transportes internacionales</h5>
                    <p>SOMOS LOS PIONEROS.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Kenworth2.jpeg" class="d-block w-100" alt="Kenworth Clasico">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Venta de transporte</h5>
                    <p>A LOS MEJORES PRECIOS.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Kenworth3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Traslado de cargas pesadas</h5>
                    <p>A TODAS PARTES DEL MUNDO.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <a href="https://www.google.com/">Ir google</a>

    </div>

@endsection



    <div class="container">
        <br><br>
        @yield('error402')
    </div>


    <div class="container">
        <br><br>
        @yield('error404')
    </div>

    <div class="container">
        <br><br>
        @yield('sidebar')
    </div>

    <div class="container">
        <br><br>
        @yield('carousel')
    </div>

    <div class="container">
        <br><br>
    @yield('contenido')
    </div>

    <div class="container">
        <br>
        @yield('contenidot')
    </div>

    <div class="container">
        <br>
        @yield('contenidoc')
    </div>

    <div class="container">
        <br>
        @yield('contenidop')
    </div>

    <div class="container">
        <br>
        @yield('contenidotm')
    </div>

    <div class="container">
        <br>
        @yield('contenidom')
    </div>






<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>--}}


</body>
</html>
