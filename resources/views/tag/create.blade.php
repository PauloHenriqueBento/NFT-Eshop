@extends('layouts.headAdmin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center pt-3">
        <h1 class="text-white">Cadastro Tag</h1>
    </div>
    <div class="row">
        <div class="col-6">
            <label class="form-label text-white">Nome da tag:</label>
            <form action="{{route('tag.store')}}" method="POST">
                @csrf
                <input class="form-control" type="text" name="name" minlength="3" maxlength="10" required>
                <div class="d-flex justify-content-start pt-3">
                    <button class="btn btn-success" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
