@extends('layouts.headAdmin')

@section('content')
    <div class="d-flex justify-content-center pt-3">
        <h1 class="text-white">Tags apagadas</h1>
    </div>
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-white">ID</th>
                    <th class="text-white">Nome da Tag</th>
                    <th class="text-white">Quantidade de Produtos</th>
                    <th class="text-white">Restaurar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                <tr>
                    <td class="text-white">{{$tag->id}}</td>
                    <td class="text-white">{{$tag->name}}</td>
                    <td class="text-white">{{$tag->Nfts->count() }}
                    <td><a class="btn btn-primary" href="{{ route('tag.restore', $tag->id) }}">Restaurar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
