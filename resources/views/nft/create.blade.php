<form action="{{route('nft.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    Nome do NFT: <input type="text" name="name">
    Drescrição: <input type="text" name="description">
    Preço: <input type="number" step="0.1" name="price">
    Selecione uma categoria:
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <br>
    Imagem: <input type="file" name="image_path">
    <button type="submit">Enviar</button>
</form>
