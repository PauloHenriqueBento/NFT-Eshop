@extends('layouts.headAdmin')

@section('content')
    <div class="d-flex justify-content-center pt-3">
        <h1 class="text-white">Categorias apagadas</h1>
    </div>
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-white">ID</th>
                    <th class="text-white">Nome da Categoria</th>
                    <th class="text-white">Quantidade de Produtos na Categoria</th>
                    <th class="text-white">Restaurar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="text-white">{{$category->id}}</td>
                    <td class="text-white">{{$category->name}}</td>
                    <td class="text-white">{{$category->Nfts->count() }}
                    <td><a class="btn btn-primary" href="{{ route('category.restore', $category->id) }}">Restaurar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
