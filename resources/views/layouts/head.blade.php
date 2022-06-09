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
        <nav class="navbar navbar-expand-lg navbar-primary bg-dark ps-5 pe-5 ">
            <div>
                <a class="navbar-brand" href="/">
                    <img src="{{asset('images/logo.png')}}" alt="" width="50px" style="border-radius: 50%">
                </a>
            </div>

            <div class="pesquisa navegacao">
                <form action="{{ route('search.nft') }}">
                    <div class="input-group">
                        <input type="text form-control me-2" class="form-control" placeholder="Digite o nome do produto" name="s">
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="cart d-flex justify-content-end">
                <!--Icone Carrinho-->
                <a href="cart" class="cart"><i class="fa-solid fa-cart-arrow-down"></i></a>
            </div>

            <div class="dropdown navegacao me-3">
                @if (Auth::user())
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                @else
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Explorar
                    </button>
                @endif
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item active" href="{{ route('category.index') }}">Categoria</a></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Deslogar</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>

            <div class="d-flex justify-content-end">
                <div class="text-white">
                    <div class="navbar-nav">
                        @if (Auth::user())

                        @else
                            <a href="{{ route('login') }}" class="text-decoration-none text-reset nav-link">Login</a>
                            <a href="{{ route('register') }}" class="text-decoration-none text-reset nav-link">Cadastrar</a>
                            <a href="/sobre" class="text-decoration-none text-reset nav-link">Sobre</a>
                            <a href="faq" class="text-decoration-none text-reset nav-link">FAQ</a>
                            <a style="color: white" href="{{route('user.logout')}}" class="text-decoration-none text-reset nav-link">Logout</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="background-dark">
        @yield('content')
    </main>
</body>
</html>
