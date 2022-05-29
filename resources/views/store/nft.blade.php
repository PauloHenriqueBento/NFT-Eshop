@extends('layouts.store')
@section('content')
<section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('serach-category', $nft->Category->id) }}">{{$nft->Category->name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$nft->name}}</li>
        </ol>
      </nav>
</section>
<section class="container py-4">
    <div class="row">
        <div class="col-4 mx-auto text-center">
            <img src="{{ asset($nft->image) }}" class="img-fluid">
        </div>
        <div class="mx-auto col-8 text-center">
            <h2 class="text-uppercase">{{ $nft->name }}</h2>
            <p class="text-muted">{{ $nft->description }}</p>
            <div class="text-center">
                <span>{{ $nft->price }}</span>
            </div>
            <form action="{{ route('cart.store', $nft->id) }}" method="POST" style="display:inline">
                @csrf
                <button type="submit" class="btn btn-primary btn-sm">Comprar</button>
            </form>
            <div class="text-center mt-5">
                <h3>Tags</h3>
                @foreach($nft->Tags as $tag)
                    <a class="btn btn-sm btn-secondary" href="{{ route('serach-tag', $tag->id) }}">{{$tag->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
