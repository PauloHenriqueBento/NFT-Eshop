@extends('layouts.store')
@section('content')
<section class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th class="text-white">Foto</th>
                <th class="text-white">NFT</th>
                <th class="text-white">Preço</th>
                <th class="text-white">Quantidade</th>
            </tr>
        </thead>
        <tbody>
        @foreach($itens as $item)
            <tr>
                <td class="text-white"><img src="{{ asset($item->Nft->image_path) }}" style="width: 70px"></td>
                <td class="text-white">{{$item->Nft->name}}</td>
                <td class="text-white">{{$item->Nft->price}}</td>
                <td class="text-white">
                    <form action="{{route('cart.store', $item->Nft->id)}}"method="POST" style="display:inline">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">+</button>
                    </form>
                    {{$item->units}}
                    <form action="{{ route('cart.destroy', $item->Nft->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-primary btn-sm">-</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>
@endsection
