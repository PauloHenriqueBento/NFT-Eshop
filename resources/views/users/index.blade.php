@extends('layouts.head')

@section('content')
<a class="btn btn-lg btn-danger float-end me-5" href="{{route('tag.create')}}">Usuarios excluidos</a>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Função</th>
                <th>Apagar</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td> <!-- Foto -->
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td><a href="">Editar</a></td>
                <td><a href="">Apagar</a></td>
            </tr>
            @endforeach
        <tbody>
    </table>
</div>
@endsection
