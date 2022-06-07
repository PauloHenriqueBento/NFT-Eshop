@extends('layouts.store')
@section('content')
<section class="container mt-5">
    <div class="row">
        <div class="col-4">
            <h2 class="text-white">Detalhes do Endereço</h2>
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="zipcode"  class="text-white">CEP</label>
                    <input type="text" class="form-control" name="zipcode" placeholder="CEP">
                </div>
                <div class="form-group pt-2">
                    <label for="address"  class="text-white">Endereco</label>
                    <input type="text" class="form-control" name="address" placeholder="Endereço">
                </div>
                <div class="form-group pt-2">
                    <label for="city"  class="text-white">Cidade</label>
                    <input type="text" class="form-control" name="city" placeholder="Cidade">
                </div>
                <div class="form-group pt-2">
                    <label for="state"  class="text-white">Estado</label>
                    <input type="text" class="form-control" name="state" placeholder="Estado">
                </div>
                <div class="d-grid gap-2 pt-3">
                    <button type="submit" class="btn btn-lg btn-primary my-2 float-end">Comprar</button>
                </div>
            </form>
        </div>
        <div class="col-8">
            <h2 class="text-white">Detalhes dos Produtos</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-white">Foto</th>
                        <th class="text-white">Produto</th>
                        <th class="text-white">Preço</th>
                        <th class="text-white">Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                <?php  $total = 0.0 ?>
                @foreach($itens as $item)
                    <tr>
                        <td class="text-white"><img src="{{ asset($item->Nft->image_path) }}" style="width: 70px"></td>
                        <td class="text-white">{{$item->Nft->name}}</td>
                        <td class="text-white">{{$item->Nft->price}}</td>
                        <td class="text-white">
                            <form action="{{ route('cart.store', $item->Nft->id) }}" method="POST" style="display:inline">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">+</button>
                            </form>
                            {{$item->units}}
                            <form action="{{ route('cart.destroy', $item->Nft->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-primary btn-sm">-</button>
                            </form>
                        </td>
                    </tr>
                    <?php $total += $item->Nft->price * $item->units ?>
                @endforeach
                    <tr>
                        <td class="fw-bold text-white">Total</td>
                        <td class="fw-bold text-white">R$ {{ number_format($total,2) }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
