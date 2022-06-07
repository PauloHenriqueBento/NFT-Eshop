<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nft;
use App\Models\Category;
use App\Models\Tag;

class eCommerceController extends Controller
{
    public function index(){
        return view('welcome')->with('nfts', Nft::all());
    }

    public function searchCategory(Category $category){
        return view('store.search')->with(['nfts' => $category->Nfts, 'title' => $category->name]);
    }

    public function searchTag(Tag $tag){
        return view('store.search')->with(['nfts' => $tag->Nfts, 'title' => $tag->name]);
    }

    public function searchNft(Request $request){
        $search = $request->query('s');

        if($search){
            $nfts = Nft::where('name','LIKE',"%{$search}%")->get();
            return view('store.search')->with(['nfts' => $nfts, 'title' => $search]);
        }else{
            session()->flash('error', 'Você precisa digitar o nome de algum produto.');
            return redirect()->back();
        }
    }

    public function showNft(Nft $nft){
        return view('store.nft')->with('nft',$nft);
    }
}
