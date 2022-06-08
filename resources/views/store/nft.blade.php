@extends('layouts.head')
@section('content')
<section class="ms-4 pt-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('search-category', $nft->Category->id) }}">{{$nft->Category->name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$nft->name}}</li>
        </ol>
      </nav>
</section>
<section class="container py-4">
    <div class="row pt-2 mt-5">
        <div class="mx-auto col-sm-10 col-md-6 col-lg-3 divnft mb-3">
            <img src="{{ asset($nft->image_path) }}" class="img-fluid nft">
            <div class="row mt-2 m-auto">
                <div class="m-auto col-8 pt-2">
                    <span class="align-middle"><b>{{ $nft->name }}</b></span>
                </div>
                <div class="col-4 m-auto pt-2">

                </div>
                <div class="col-4">
                    <span class="criadorEsq">Preço</span>
                </div>
                <div class="col-8 d-flex justify-content-end">
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

                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto col-6 text-center">
            <h2 class="text-uppercase text-white">{{ $nft->name }}</h2>
            <p class="text-white">{{ $nft->description }}</p>
            <div class="text-center">
                <span class=" text-white">R$ {{ $nft->price }}</span>
            </div>

            <div class="row">
                <div class="col">
                    <form action="{{ route('cart.store', $nft->id) }}" method="POST" style="display:inline">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
                    </form>
                    <div class="text-center mt-5">
                        <h3 class="text-white">Tags</h3>
                        @foreach($nft->Tags as $tag)
                            <a class="btn btn-lg btn-secondary" href="{{ route('serach-tag', $tag->id) }}">{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
