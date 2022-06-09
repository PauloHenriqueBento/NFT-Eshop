@extends('layouts.head')

@section('content')
    <section class="container py-4">
        <div class="row">
            <div class="mx-auto col-10 text-center">
                <h2 class="text-uppercase text-white">{{ $title }}</h2>
                <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, nobis!</p>
            </div>
        </div>
        <div class="row">
            <div class="row pt-2 mt-5">
            <!--Página que mostra os produtos direto do BD-->
        @foreach ($nfts as $nft)
            <div class="col-3 mx-auto mb-2">
                <div class="mx-auto col-sm-10 col-md-6 col-lg-3 divnft mb-3">
                    <img src="{{ asset($nft->image_path) }}" class="img-fluid nft ">
                    <div class="row m-auto">
                        <div class="m-auto col-8 pt-2">
                            <span class="align-middle"><b>{{ $nft->name }}</b></span>
                        </div>
                        <div class="col-4 m-auto pt-2">

                        </div>
                        <div class="col-4">
                            <span class="criadorEsq">Preço</span>
                        </div>
                        <div class="col-8  d-flex justify-content-end">
                            <div>
                                <img src="/images/bit.png" class="bit">
                                <span><b>$ {{ $nft->price }}</b></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <span class="criadorEsq">Criador</span>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <span class="nomeCriador">Nome</span>
                        </div>
                        <div class="row pt-1">
                            <div class="col">
                                <a href="{{ route ('show.nft', $nft->id)}}" class="btn btn-primary btn-sm" style="width: 90px">Visualizar</a>
                            </div>
                            <div class="col">
                                <form action="{{ route('cart.store', $nft->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    <button type="submit" class="adicionar">Adicionar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            </div>
        </div>
    </section>
@endsection
