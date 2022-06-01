@extends('layouts.head')

@section('content')
<a class="btn btn-lg btn-success float-end me-5" href="{{route('tag.create')}}">Criar Tag</a>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Tag</th>
                <th>Quantidade de Produtos</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tags as $tag)
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->name}}</td>
                @if ($tag->Nft)
                    <td>{{$tag->Nft->count()}}</td>
                @else
                    <td>0</td>
                @endif
                <td><a href="{{ route('tag.edit', $tag->id) }}">Editar</a></td>
                <td><a href="{{ route('tag.destroy', $tag->id) }}">Apagar</a></td>
            </tr>
            @endforeach
        <tbody>
    </table>
</div>
@endsection
