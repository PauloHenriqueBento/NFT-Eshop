<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nft;

class NftController extends Controller
{
    public function index(){
        return view('nft.index')->with('nfts', Nft::all());
    }

    public function create(){
        return view('nft.create');
    }

    public function store(Request $request){
        $nft = Nft::create($request->all());

        session()->flash('success', 'NFT criado com Sucesso!');
        return redirect(route('nft.index'));
    }

    public function destroy(Nft $nft){
        $nft->delete();
        session()->flash('success', 'NFT Apagado com Sucesso!');
        return redirect(route('nft.index'));
    }

    public function edit(Nft $nft){
        return view('nft.edit')->with('nft', $nft);
    }

    public function update(Nft $nft, Request $request){
        $nft->update($request->all());
        session()->flash('success', 'Nft Editado com Sucesso');
        return redirect(route('nft.index'));
    }
}
