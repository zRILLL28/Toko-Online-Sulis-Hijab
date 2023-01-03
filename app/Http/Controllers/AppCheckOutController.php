<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CheckOut;
use App\Models\Detail;
use Illuminate\Http\Request;

class AppCheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Detail::where('user_id', auth()->user()->id)->paginate(4)->withQueryString();
        return view('apps.checkout.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($total)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        CheckOut::create([
            'price' => $total,
            'user_id' => auth()->user()->id
        ]);
        foreach ($cart as $c) {
            // Masukkan riwayat checkout ke detail
            Detail::create([
                'product_code' => $c->product_code,
                'user_id' => $c->user_id,
                'cart_id' => $c->id,
                'qty' => $c->qty,
                'price' => $c->qty * $c->product->price
            ]);
            // Hapus cart setelah checkout berdasarkan user yang login
            Cart::destroy($c->id);
        }

        return redirect()->route('checkout.index')->with('success', 'Produk berhasil di checkout!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
