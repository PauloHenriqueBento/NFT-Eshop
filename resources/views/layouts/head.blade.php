<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e39c5f9262.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/home.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-primary bg-dark ps-5 pe-5 container">
            <div>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="pesquisa navegacao">
                <form>
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="buscar">
                    <!--<button class="btn btn-outline-success" type="submit">Search</button>-->
                </form>
            </div>

            <div class="dropdown navegacao">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    @if (Auth::check())
                        {{Auth::user()->name}}
                    @else
                        <a href="">TEste</a>
                    @endif
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item active" href="{{ route('category.index') }}">Categoria</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>

            <div class="d-flex justify-content-end">
                <div class="text-white collapse navbar-collapse">
                    <div class="navbar-nav">
                        <a href="#" class="text-decoration-none text-reset nav-link">Sobre</a>
                        <a href="#" class="text-decoration-none text-reset nav-link">FAQ</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
