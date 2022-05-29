<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Nft;

class CartController extends Controller
{
    public function index(){
        $itens = Cart::where('user_id', Auth()->user()->id)->get();
        return view('cart.index')->with('itens', $itens);
    }

    public function store(Nft $nft){
        $user = auth()->user();

        $cart = Cart::where([
            'user_id' => $user->id,
            'nft_id' => $nft->id])->first();

        if($cart){
            $cart->update([
                'user_id' => $user_id,
                'nft_id' => $nft->id,
                'units' => 1
            ]);
        }
        session()->flash()('success', 'Nft (' .$nft->name. ') foi adicionado.');
        return redirect()->back();
    }

    public function destroy(Nft $nft){
        $user = Auth()->user();
        $cart = Cart::where([
            'user_id' => $user->id,
            'nft_id' => $nft->id])->first();

        if(!$cart){
            session()->flash('error', 'A nft (' .$nft->name. ') não está no carrinho');
            return redirect()->back();
        }

        if($cart->units > 1){
            $cart->update([
                'units' => $cart->units - 1
            ]);
        }else{
            $cart->delete();
        }

        session()->flash('success', 'O produto ('.$nft->name.') foi removido do carrinho.');
        return redirect()->back();
    }
}
