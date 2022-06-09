@extends('layouts.headAdmin')

@section('content')

    <div class="d-flex justify-content-center pt-3">
        <h1 class="text-white">NFTs apagados</h1>
    </div>
    <!--<a class="btn btn-lg btn-success float-end me-5" href="{{route('nft.create')}}">Criar Nft</a>-->

    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-white">ID</th>
                    <th class="text-white">Nome</th>
                    <th class="text-white">Descrição</th>
                    <th class="text-white">Categoria</th>
                    <th class="text-white">Preço</th>
                    <th class="text-white">Restaurar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nfts as $nft)
                    <tr>
                        <td class="text-white">{{$nft->id}}</td>
                        <td class="text-white">{{$nft->name}}</td>
                        <td class="text-white">{{$nft->description}}</td>
                        @if ($nft->Category)
                            <td class="text-white">{{$nft->Category->name}}</td>
                        @else
                            <td class="text-white">Sem categoria</td>
                        @endif
                        <td class="text-white">{{$nft->price}}</td>
                        <td><a class="btn btn-primary" href="{{ route('nft.restore', $nft->id) }}">Restaurar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
