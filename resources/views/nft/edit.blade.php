<form action="{{route('nft.update', $nft->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    Nome do NFT: <input type="text" name="name" value="{{$nft->name}}">
    Drescrição: <input type="text" name="description" value="{{$nft->description}}">
    Preço: <input type="number" step="0.1" name="price" value="{{$nft->price}}">
    Selecione uma categoria:
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}"
            {{ $nft->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->name }}</option>
        @endforeach
    </select>
    <select multiple name="tags[]">
        @foreach($tags as $tag)
        <option value="{{$tag->id}}"
            {{ $nft->hasTag($tag->id) ? 'selected' : '' }}
            >{{$tag->name}}</option>
        @endforeach
    </select>
    <button type="submit">Enviar</button>
</form>
