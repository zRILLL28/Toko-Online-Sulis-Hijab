<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB};
use PDO;

class AppCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Cart::where('user_id', auth()->user()->id)->get();
        return view('apps.cart.index', compact('result'));
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
    public function edit($pc)
    {
        $result = DB::table('carts')->where('product_code', '=', $pc)->first();
        if (Auth::check()) {
            if ($result) {
                Cart::findOrFail($result->id)->update([
                    'user_id' => auth()->user()->id,
                    'product_code' => $pc,
                    'qty' => $result->qty + 1
                ]);
            } else {
                Cart::create([
                    'user_id' => auth()->user()->id,
                    'product_code' => $pc
                ]);
            }
        }
        return back()->with('success', 'Produk berhasil ditambahkan ke keranjang');
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
    public function destroy($pc)
    {
        $result = Cart::where('product_code', $pc)->first();
        Cart::destroy($result->id);
        return back()->with('success', 'Keranjang berhasil dihapus');
    }
}
