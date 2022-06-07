@extends('layouts.headAdmin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <h1 class="text-white">Categoria Cadastrada</h1>
    </div>
    <!--<a class="btn btn-lg btn-success float-end me-5" href="{{route('category.create')}}">Criar Categoria</a>-->
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-white">ID</th>
                    <th class="text-white">Nome da Categoria</th>
                    <th class="text-white">Quantidade de Produtos na Categoria</th>
                    <th class="text-white">Editar</th>
                    <th class="text-white">Apagar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="text-white">{{$category->id}}</td>
                    <td class="text-white">{{$category->name}}</td>
                    <td class="text-white">{{$category->Nfts->count() }}
                    <td class="text-white"><a class="btn btn-primary" href="{{ route('category.edit', $category->id) }}">Editar</a></td>
                    <td class="text-white"><a class="btn btn-danger" href="{{ route('category.destroy', $category->id) }}">Apagar</a></td>
                </tr>
                @endforeach
            <tbody>
        </table>
    </div>
@endsection
