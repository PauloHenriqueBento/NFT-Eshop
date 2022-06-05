@extends('layouts.headAdmin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <h1 class="text-white">Tag Cadastrada</h1>
    </div>
    <!--<a class="btn btn-lg btn-success float-end me-5" href="{{route('tag.create')}}">Criar Tag</a>-->
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-white">ID</th>
                    <th class="text-white">Nome da Tag</th>
                    <th class="text-white">Quantidade de Produtos</th>
                    <th class="text-white">Editar</th>
                    <th class="text-white">Apagar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                <tr>
                    <td class="text-white">{{$tag->id}}</td>
                    <td class="text-white">{{$tag->name}}</td>
                    <td class="text-white">{{$tag->Nfts->count()}}</td>
                    <!--@if ($tag->Nft)
                        <td>{{$tag->Nft->count()}}</td>
                    @else
                        <td>0</td>
                    @endif-->
                    <td class="text-white"><a class="btn btn-primary" href="{{ route('tag.edit', $tag->id) }}">Editar</a></td>
                    <td class="text-white"><a class="btn btn-danger" href="{{ route('tag.destroy', $tag->id) }}">Apagar</a></td>
                </tr>
                @endforeach
            <tbody>
        </table>
    </div>
@endsection
