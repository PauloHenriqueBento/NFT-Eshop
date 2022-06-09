@extends('layouts.store')
@section('content')
    @foreach($orders as $order)
        <section class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2 class="text-white">Pedido: {{ $order->id }}</h2>
                    <p class="text-white">Endereço de entrega:</p>
                    <ul class="list-group">
                        <li class="list-group-item">{{ $order->address }}</li>
                        <li class="list-group-item">{{ $order->zipcode }}</li>
                        <li class="list-group-item">{{ $order->state }}</li>
                        <li class="list-group-item">{{ $order->city }}</li>
                    </ul>
                </div>

                <div class="col-9 d-flex justify-content-end ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-white">Produto</th>
                                <th class="text-white">Quantidade</th>
                                <th class="text-white">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->Nfts as $nft)
                            <tr>
                                <td class="text-white">{{$nft->pivot->name}}</td>
                                <td class="text-white">{{$nft->pivot->units}}</td>
                                <td class="text-white">{{$nft->pivot->price}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        <hr>
        </section>
    @endforeach
    <div class="d-grid gap-2 col-6 mx-auto mb-5">
        <a href="#" class="btn btn-success" type="button">Finalizar Compra</a>
    </div>
@endsection
