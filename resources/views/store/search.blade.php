@extends('layouts.store')

@section('content')
    <section class="container py-4">
        <div class="row">
            <div class="mx-auto col-10 text-center">
                <h2 class="text-uppercase">{{ $title }}</h2>
                <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, nobis!</p>
            </div>
        </div>
        <div class="row">
            <!--Página que mostra os produtos direto do BD-->
            @foreach ($nfts as $nft)
                <div class="mx-auto col-sm-10 col-md-6 col-lg-3">
                    <img src="{{ asset($nft->image) }}" class="img-fluid">
                    <span class="d-block h6 text-center mt-3">{{ $nft->name }}</span>
                    <div class="text-center">
                        <span class="text-muted">R$ {{ $nft->price }}</span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-primary btn-sm">Visualizar</a>
                        <a href="#" class="btn btn-secondary btn-sm">Comprar</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection