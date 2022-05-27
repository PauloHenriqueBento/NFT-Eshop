@extends('layouts.head')

@section('content')
<form action="{{route('tag.update', $tag->id)}}" method="POST">
    @csrf
    @method('PUT')
    <strong class="text-white">Nome da Tag:</strong> <input type="text" name="name" value="{{$tag->name}}">
    <button type="submit">Enviar</button>
</form>
@endsection
