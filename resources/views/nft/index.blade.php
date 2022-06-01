@extends('layouts.head')
@section('content')
<a class="btn btn-lg btn-success float-end me-5" href="{{route('nft.create')}}">Criar Nft</a>

<div class="container mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Image</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nfts as $nft)
                <tr>
                    <td>{{$nft->id}}</td>
                    <td>{{$nft->name}}</td>
                    <td><img src="{{asset($nft->image_path)}}"></td>
                    <td>{{$nft->description}}</td>
                    @if ($nft->Category)
                        <td>{{$nft->Category->name}}</td>
                    @else
                        <td>Sem categoria</td>
                    @endif
                    <td>{{$nft->price}}</td>
                    <td><a class="btn btn-primary" href="{{ route('nft.edit', $nft->id) }}">Editar</a></td>
                    <td><a class="btn btn-danger" href="{{ route('nft.destroy', $nft->id) }}">Apagar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
