@extends('layouts.head')
@section('content')
<style>

.background-light{
    background: #545454;
}

.color-white{
    color: #fff;
}

.price{
    font-size: 24px;
}

@media(max-width: 960px){
    .text-position{
        text-align: center;
    }
}

</style>
<section class="container  background-light">
    <div class="row pt-4">
        <div class="col-lg-6 col-12 d-flex align-items-center color-white flex-column">
            <img src="{{ asset($nft->image_path) }}" class="w-50 ">
            <p class="mt-3">Criado por: <b>{{$nft->created_by}}</b></p>
        </div>
        <div class="col-lg-6 col-12 color-white text-position">
            <h2 class="font-weight-bold">{{ $nft->name }}</h2>
            <p>{{ $nft->description }}</p>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-white">Categorias</h3>
                        @if ($nft->Category)
                            <a class="btn btn-primary" href="{{ route('search-category', $nft->Category->id) }}">{{$nft->Category->name}}</a>

                        @else
                            <p>Sem categoria</p>
                        @endif
                </div>

                <div class="col-lg-6">
                    <h3 class="text-white">Tags</h3>

                    @if ($nft->Tags)
                            @foreach($nft->Tags as $tag)
                            <a class="btn btn-secondary" href="{{ route('serach-tag', $tag->id) }}">{{$tag->name}}</a>
                            @endforeach

                        @else
                            <p>Sem categoria</p>
                        @endif
                </div>
            </div>
            <p class="price"><img src="/images/bit.png" class="bit" width="60px"><b>$ {{ $nft->price }}</b></p>
            <form action="{{ route('cart.store', $nft->id) }}" method="POST" style="display:inline">
                @csrf
                <button type="submit" class="btn btn-success btn-lg">Comprar</button>
            </form>
        </div>
    </div>
</section>

@endsection
