@extends('layouts.headAdmin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center pt-3">
        <h1 class="text-white">Cadastro Categoria</h1>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <label class="form-label text-white"> Nome da categoria:</label>
                <input class="form-control"  type="text" name="name" minlength="3" maxlength="15" required>
                <div class="d-flex justify-content-start pt-3">
                    <button class="btn btn-success" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
