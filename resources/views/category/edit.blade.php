@extends('layouts.headAdmin')

@section('content')
<div class="row container pt-3">
    <div class="col-6">
        <form action="{{route('category.update', $category->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label text-white"> Nome da Categoria:</label>
            <input class="form-control" type="text" name="name" value="{{$category->name}}">
            <div class="d-flex justify-content-start pt-3">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div
@endsection
