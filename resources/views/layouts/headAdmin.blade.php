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
        <nav class="navbar navbar-expand-lg navbar-primary bg-dark ps-5 pe-5">
            <div>
                <a class="navbar-brand" href="/">Logo</a>
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

            <div class="d-flex justify-content-end ps-3">
                <div class="dropdown navegacao">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastrar
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton3">
                        <li><a class="dropdown-item active" href="{{route('nft.create')}}">NFT</a></li>
                        <li><a class="dropdown-item" href="{{route('category.create')}}">Categoria</a></li>
                        <li><a class="dropdown-item" href="{{route('tag.create')}}">Tag</a></li>
                    </ul>
                </div>

                <div class="dropdown navegacao ps-3">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                        Visualizar
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton4">
                        <li><a class="dropdown-item" href="{{route('nft.index')}}">NFT</a></li>
                        <li><a class="dropdown-item" href="{{route('category.index')}}">Categoria</a></li>
                        <li><a class="dropdown-item" href="{{route('tag.index')}}">Tag</a></li>
                    </ul>
                </div>

                <div class="dropdown navegacao ps-3">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                        Restaurar
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton5">
                        <li><a class="dropdown-item" href="{{route('nft.trash')}}">NFT</a></li>
                        <li><a class="dropdown-item" href="{{route('category.trash')}}">Categoria</a></li>
                        <li><a class="dropdown-item" href="{{route('tag.trash')}}">Tag</a></li>
                    </ul>
                </div>

                <div class="dropdown navegacao ps-3">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Explore
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>


                <div class="text-white collapse navbar-collapse ps-3">
                    <div class="navbar-nav">
                        <a href="#" class="text-decoration-none text-reset nav-link">Sobre</a>
                        <a href="faq" class="text-decoration-none text-reset nav-link">FAQ</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="background-dark">
        @yield('content')
    </main>
    <footer class="pt-5">
        <div class="div-color">
            <address class="rodape">
                Av. Eng. Eusébio Stevaux, 823 <br>
                Santo Amaro, São Paulo - SP<br>
                04696-000
            </address>
            <div class="rodape">
                <span class="rodape">Tel: (XX) XXXXX-XXXX</span>
                <div class="icones">
                    <a href="#" class="midia"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="midia"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="midia"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="midia"><i class="fa-brands fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
