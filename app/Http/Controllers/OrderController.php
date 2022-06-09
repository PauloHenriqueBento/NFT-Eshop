<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function index(){
        return view('order.index')->with('orders', Order::where('user_id',Auth()->user()->id)->get());
    }

    public function store(Request $request){
        $order = Order::create([
            'user_id' => Auth()->user()->id,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state
        ]);

        $cart = Cart::where('user_id', Auth()->user()->id);
        foreach($cart->get() as $item){
            $order->Nfts()->attach([
                $item->nft_id => [
                    'name' => $item->Nft->name,
                    'price' => $item->Nft->price,
                    'units' => $item->units
                ]
            ]);
        }

        $cart->delete();
        return redirect(route('order.index'));
    }
}
