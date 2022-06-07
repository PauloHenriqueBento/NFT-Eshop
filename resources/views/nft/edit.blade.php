@extends('layouts.headAdmin')

@section('content')
<div class="mt-5 container">
        <div class="d-flex justify-content-center pb-3">
            <h1 class="text-white">Editar NFT</h1>
        </div>
        <form action="{{route('nft.update', $nft->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label class="text-white form-label"> Nome do NFT:</label>
                    <input class="form-control" type="text" name="name" value="{{$nft->name}}">
                </div>
                <div class="col">
                    <label class="text-white form-label"> Drescrição:</label>
                    <input class="form-control" type="text" name="description" value="{{$nft->description}}">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col">
                    <label class="text-white form-label"> Preço:</label>
                    <input class="form-control" type="number" step="0.1" name="price" value="{{$nft->price}}">
                </div>
                <div class="col">
                    <label class="text-white form-label">Categoria:</label>
                    <select class="form-control" name="category_id">

                        @foreach($categories as $category)
                        <option value="{{$category->id}}"
                            {{ $nft->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6 mt-3">
                <label class="text-white form-label">Tag:</label>
                <select class="form-control" multiple name="tags[]">
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}"
                        {{ $nft->hasTag($tag->id) ? 'selected' : '' }}
                        >{{$tag->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-grid gap-2 pt-3">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection
