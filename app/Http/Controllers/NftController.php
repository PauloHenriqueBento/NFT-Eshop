<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Nft;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NftController extends Controller
{
    public function index(){
        return view('nft.index')->with('nfts', Nft::all());
    }

    public function create(){
        return view('nft.create')->with([
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'user' => User::all()
        ]);
    }

    public function store(Request $request){
        $image = "storage/".$request->file('image_path')->store('itens');

        $nft = Nft::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id'  => $request->category_id,
            'created_by'    => Auth::user()->name,
            'image_path' => $image,
            'price' => $request->price,
        ]);

        $nft->Tags()->sync($request->tags);

        session()->flash('success', 'NFT criado com Sucesso!');
        return redirect(route('nft.index'));
    }

    public function destroy(Nft $nft){
        $nft->delete();
        session()->flash('success', 'NFT Apagado com Sucesso!');
        return redirect(route('nft.index'));
    }

    public function edit(Nft $nft){
        return view('nft.edit')->with([
            'nft' => $nft,
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    public function update(Nft $nft, Request $request){
        if($request->image){
            $image = "storage/".$request->file('image')->store('itens');
            $nft->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                //'stock' => $request->stock,
                'category_id' => $request->category_id,
                'image' => $image
            ]);
        }else{
            $nft->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                //'stock' => $request->stock,
                'category_id' => $request->category_id,
            ]);
        }
        $nft->Tags()->sync($request->tags);
        session()->flash('success', 'Nft Editado com Sucesso');
        return redirect(route('nft.index'));

        //Ver esse método. Está diferente no arquivo do prof
    }

    public function trash(){
        return view('nft.trash')->with('nfts', Nft::onlyTrashed()->get());
    }

    public function restore($nft_id){
        $nft = Nft::onlyTrashed()->where('id', $nft_id)-> first();
        $nft->restore();
        session()->flash('success', 'NFT restaurado!');
        return redirect(route('nft.index'));
    }
}
