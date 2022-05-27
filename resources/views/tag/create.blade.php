@extends('layouts.head')

@section('content')
<form action="{{route('tag.store')}}" method="POST">
    @csrf
    <strong class="text-white">Nome da tag:</strong> <input type="text" name="name">
    <button type="submit">Enviar</button>
</form>
@endsection
