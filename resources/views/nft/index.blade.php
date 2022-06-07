@extends('layouts.headAdmin')
@section('content')
    <div class="d-flex justify-content-center mt-3">
        <h1 class="text-white">NFT Cadastrado</h1>
    </div>
    <!--<a class="btn btn-lg btn-success float-end me-5" href="{{route('nft.create')}}">Criar Nft</a>-->

    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-white">ID</th>
                    <th class="text-white">Nome</th>
                    <th class="text-white">Image</th>
                    <th class="text-white">Descrição</th>
                    <th class="text-white">Categoria</th>
                    <th class="text-white">Tag</th>
                    <th class="text-white">Preço</th>
                    <th class="text-white">Editar</th>
                    <th class="text-white">Apagar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nfts as $nft)
                    <tr>
                        <td class="text-white">{{$nft->id}}</td>
                        <td class="text-white">{{$nft->name}}</td>
                        <td class="text-white"><img src="{{asset($nft->image_path)}}" style="width: 50px"></td>
                        <td class="text-white">{{$nft->description}}</td>
                        @if ($nft->Category)
                            <td class="text-white">{{$nft->Category->name}}</td>
                        @else
                            <td class="text-white">Sem categoria</td>
                        @endif
                        <td class="text-white">@foreach($nft->Tags()->get() as $tag)
                            {{$tag->name}}
                            @endforeach</td>
                        <td class="text-white">{{$nft->price}}</td>
                        <td class="text-white"><a class="btn btn-primary" href="{{ route('nft.edit', $nft->id) }}">Editar</a></td>
                        <td class="text-white"><a class="btn btn-danger" href="{{ route('nft.destroy', $nft->id) }}">Apagar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
