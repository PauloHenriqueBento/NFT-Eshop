<form action="{{route('nft.update', $nft->id)}}" method="POST">
    @csrf
    Nome do NFT: <input type="text" name="name" value="{{$nft->name}}">
    Drescrição: <input type="text" name="description" value="{{$nft->description}}">
    Preço: <input type="number" step="0.1" name="price" value="{{$nft->price}}">
    <button type="submit">Enviar</button>
</form>
