@extends('layouts.head')

<a class="btn btn-lg btn-success float-end me-5" href="{{route('nft.create')}}">Criar Nft</a>

<div class="container mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Restaurar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nfts as $nft)
                <tr>
                    <td>{{$nft->id}}</td>
                    <td>{{$nft->name}}</td>
                    <td>{{$nft->description}}</td>
                    <td>{{$nft->Category->name}}</td>
                    <td>{{$nft->price}}</td>
                    <td><a class="btn btn-primary" href="{{ route('nft.restore', $nft->id) }}">Restaurar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
