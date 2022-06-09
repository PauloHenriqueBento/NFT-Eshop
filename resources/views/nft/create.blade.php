@extends('layouts.headAdmin')

@section('content')
    <div class="mt-5 container">
        <div class="d-flex justify-content-center pb-3">
            <h1 class="text-white">Cadastro NFT</h1>
        </div>
        <form action="{{route('nft.store')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label class="form-label text-white">Nome do NFT:</label>
                    <input class="form-control" type="text" name="name" autofocus>
                </div>
                <div class="col">
                    <label class="form-label text-white"> Drescrição:</label>
                    <input class="form-control" type="text" name="description">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label text-white pt-3"> Preço:</label>
                    <input class="form-control" type="number" step="0.1" name="price">
                </div>
                <div class="col">
                    <label class="form-label text-white pt-3"> Imagem:</label>
                    <input class="form-control" type="file" name="image_path">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label text-white pt-3"> Categoria:</label>
                    <select class="form-select" name="category_id">
                        <option value="0" selected>Selecione uma categoria</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label class="form-label text-white pt-3">Tag:</label>
                    <select class="form-select" multiple name="tags[]">
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="d-grid gap-2 pt-3">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection
