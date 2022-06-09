@extends('layouts.headAdmin')

@section('content')
<div class="row container pt-3">
    <div class="d-flex justify-content-center">
        <h1 class="text-white">Editar Tag</h1>
    </div>
    <div class="col-6">
        <form action="{{route('tag.update', $tag->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label text-white">Nome da Tag:</label>
            <input class="form-control" type="text" name="name"  minlength="3" maxlength="10" required value="{{$tag->name}}">
            <div class="d-flex justify-content-start pt-3">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
