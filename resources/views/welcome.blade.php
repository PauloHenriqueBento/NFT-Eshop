@extends('layouts.head')

@section('title', 'NFT - Eshop')

@section('content')
<section id="meuCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#meuCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#meuCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#meuCarousel" data-bs-slide-to="2"></button>

    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1449850/header.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1449850/header.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1449850/header.jpg" class="d-block w-100">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#meuCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden"> Voltar</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#meuCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</section>

<section class="container">
    <div class="mt-5">
        <h2 class="text-white">Tendências</h2>
    </div>
    <div class="row pt-2">
        <div class="col-3">
            <div class="col-3 divnft">
                <a href="#"><img src="/images/nft.gif" class="nft"></a>
                <div class="row m-auto">
                    <div class="m-auto col-8 pt-2">
                        <span class="align-middle"><b>Warrior #001</b></span>
                    </div>
                    <div class="col-4 m-auto pt-2">
                        <button class="adicionar">+</button>
                    </div>
                    <div class="col-4">
                        <span class="criadorEsq">Preço</span>
                        <!--<span><i class="fa-solid fa-circle-dollar"></i></span>-->
                    </div>
                    <div class="col-8  d-flex justify-content-end">
                        <div>
                            <img src="/images/bit.png" class="bit">
                            <span><b>$1.000,00</b></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <span class="criadorEsq">Criador</span>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <span class="nomeCriador">Nome</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="col-3 divnft">
                <a href="#"><img src="/images/nft.gif" class="nft"></a>
                <div class="row m-auto">
                    <div class="m-auto col-8 pt-2">
                        <span class="align-middle"><b>Warrior #001</b></span>
                    </div>
                    <div class="col-4 m-auto pt-2">
                        <button class="adicionar">+</button>
                    </div>
                    <div class="col-4">
                        <span class="criadorEsq">Preço</span>
                        <!--<span><i class="fa-solid fa-circle-dollar"></i></span>-->
                    </div>
                    <div class="col-8  d-flex justify-content-end">
                        <div>
                            <img src="/images/bit.png" class="bit">
                            <span><b>$1.000,00</b></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <span class="criadorEsq">Criador</span>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <span class="nomeCriador">Nome</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="col-3 divnft">
                <a href="#"><img src="/images/nft.gif" class="nft"></a>
                <div class="row m-auto">
                    <div class="m-auto col-8 pt-2">
                        <span class="align-middle"><b>Warrior #001</b></span>
                    </div>
                    <div class="col-4 m-auto pt-2">
                        <button class="adicionar">+</button>
                    </div>
                    <div class="col-4">
                        <span class="criadorEsq">Preço</span>
                        <!--<span><i class="fa-solid fa-circle-dollar"></i></span>-->
                    </div>
                    <div class="col-8  d-flex justify-content-end">
                        <div>
                            <img src="/images/bit.png" class="bit">
                            <span><b>$1.000,00</b></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <span class="criadorEsq">Criador</span>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <span class="nomeCriador">Nome</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="col-3 divnft">
                <a href="#"><img src="/images/nft.gif" class="nft"></a>
                <div class="row m-auto">
                    <div class="m-auto col-8 pt-2">
                        <span class="align-middle"><b>Warrior #001</b></span>
                    </div>
                    <div class="col-4 m-auto pt-2">
                        <button class="adicionar">+</button>
                    </div>
                    <div class="col-4">
                        <span class="criadorEsq">Preço</span>
                        <!--<span><i class="fa-solid fa-circle-dollar"></i></span>-->
                    </div>
                    <div class="col-8  d-flex justify-content-end">
                        <div>
                            <img src="/images/bit.png" class="bit">
                            <span><b>$1.000,00</b></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <span class="criadorEsq">Criador</span>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <span class="nomeCriador">Nome</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="mt-5">
        <h2 class="text-white">Top Criadores</h2>
    </div>
    <div class="row pt-2">
        <div class="col-3">
            <div class="divnft-2">
                <img src="https://wallpapercave.com/wp/wp10537280.jpg" class="nft-criadores">
                <div class="d-flex justify-content-center">
                    <img src="https://public.nftstatic.com/static/nft/zipped/18b5012fbd8341d2a6a2d994a2e6509a_zipped.jpeg" class="icon">
                </div>
                <div class="d-flex justify-content-center pt-1">
                    <span>NFT LION</span>
                </div>
                <div class="d-flex justify-content center ps-3 pt-1">
                    <p>Voice Life F-NFT represents the tokenization of its intellectual property and
                        groundbreaking wireless power.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="divnft-2">
                <img src="https://wallpapercave.com/wp/wp10537280.jpg" class="nft-criadores">
                <div class="d-flex justify-content-center">
                    <img src="https://public.nftstatic.com/static/nft/zipped/18b5012fbd8341d2a6a2d994a2e6509a_zipped.jpeg" class="icon">
                </div>
                <div class="d-flex justify-content-center pt-1">
                    <span>NFT LION</span>
                </div>
                <div class="d-flex justify-content center ps-3 pt-1">
                    <p>Voice Life F-NFT represents the tokenization of its intellectual property and
                        groundbreaking wireless power.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="divnft-2">
                <img src="https://wallpapercave.com/wp/wp10537280.jpg" class="nft-criadores">
                <div class="d-flex justify-content-center">
                    <img src="https://public.nftstatic.com/static/nft/zipped/18b5012fbd8341d2a6a2d994a2e6509a_zipped.jpeg" class="icon">
                </div>
                <div class="d-flex justify-content-center pt-1">
                    <span>NFT LION</span>
                </div>
                <div class="d-flex justify-content center ps-3 pt-1">
                    <p>Voice Life F-NFT represents the tokenization of its intellectual property and
                        groundbreaking wireless power.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="divnft-2">
                <img src="https://wallpapercave.com/wp/wp10537280.jpg" class="nft-criadores">
                <div class="d-flex justify-content-center">
                    <img src="https://public.nftstatic.com/static/nft/zipped/18b5012fbd8341d2a6a2d994a2e6509a_zipped.jpeg" class="icon">
                </div>
                <div class="d-flex justify-content-center pt-1">
                    <span>NFT LION</span>
                </div>
                <div class="d-flex justify-content center ps-3 pt-1">
                    <p>Voice Life F-NFT represents the tokenization of its intellectual property and
                        groundbreaking wireless power.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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


@endsection
