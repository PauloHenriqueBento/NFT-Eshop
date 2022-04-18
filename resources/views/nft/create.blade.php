<form action="{{route('nft.store')}}" method="POST">
    @csrf
    Nome do NFT: <input type="text" name="name">
    Drescrição: <input type="text" name="description">
    Preço: <input type="number" step="0.1" name="price">
    <button type="submit">Enviar</button>
</form>
