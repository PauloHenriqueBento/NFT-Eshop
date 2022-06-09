@extends('layouts.head')

@section('content')
<a class="btn btn-lg btn-danger float-end me-5" href="{{route('tag.create')}}">Usuarios excluidos</a>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-white">ID</th>
                <th class="text-white">Foto</th>
                <th class="text-white">Nome</th>
                <th class="text-white">E-mail</th>
                <th class="text-white">Função</th>
                <th class="text-white">Apagar</th>
                <th class="text-white">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="text-white">{{$user->id}}</td>
                <td class="text-white">{{$user->name}}</td> <!-- Foto -->
                <td class="text-white">{{$user->name}}</td>
                <td class="text-white">{{$user->email}}</td>
                <td class="text-white">{{$user->role}}</td>
                <td class="text-white"><a href="">Editar</a></td>
                <td class="text-white"><a href="">Apagar</a></td>
            </tr>
            @endforeach
        <tbody>
    </table>
</div>
@endsection
