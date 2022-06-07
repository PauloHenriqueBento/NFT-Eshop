@extends('layouts.store')
@section('content')
    @foreach($orders as $order)
        <section class="container mt-5">
            <div>
                <h2>Pedido: {{ $order->id }}</h2>
                <p>Endereço de entrega: {{ $order->address }}, {{ $order->city }}, {{ $order->state }}, {{ $order->zipcode }}</p>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->Nfts as $nft)
                    <tr>
                        <td>{{$nft->pivot->name}}</td>
                        <td>{{$nft->pivot->units}}</td>
                        <td>{{$nft->pivot->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    @endforeach
@endsection
