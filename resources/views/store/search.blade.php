@extends('layouts.store')

@section('content')
    <section class="container py-4">
        <div class="row">
            <div class="mx-auto col-10 text-center">
                <h2 class="text-uppercase text-white">{{ $title }}</h2>
                <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, nobis!</p>
            </div>
        </div>
        <div class="row">
            <div>
            <!--Página que mostra os produtos direto do BD-->
            @foreach ($nfts as $nft)
                <div class="mx-auto col-sm-10 col-md-6 col-lg-3">
                    <img src="{{ asset($nft->image_path) }}" class="img-fluid">
                    <span class="d-block h6 text-center text-white mt-3">{{ $nft->name }}</span>
                    <div class="text-center">
                        <span class="text-white">R$ {{ $nft->price }}</span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route ('show.nft', $nft->id)}}" class="btn btn-primary btn-sm">Visualizar</a>
                        <form action="{{route ('cart.store', $nft->id)}}" method="POST" style="display:inline">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">Comprar</button>
                        </form>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
