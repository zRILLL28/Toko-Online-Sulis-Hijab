<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Support\Facades\Validator;

class AppWishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Wishlist::with(['product'])
            ->where('user_id', auth()->user()->id)
            ->paginate(5)->withQueryString();
        return view('apps.wishlist.index', compact('result'));
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
    public function edit($id)
    {
        $result = DB::table('wishlists')->where('product_code', '=', $id)->first();
        if (Auth::check()) {
            if ($result) {
                return back()->with('error', 'Produk kamu telah terdaftar!');
            } else {
                Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_code' => $id
                ]);
                return redirect()->route('wishlist.index')->with('success', 'Produk berhasil ditambahkan!');
            }
        } else {
            return back()->with('error', 'Produk gagal ditambahkan!');
        }
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
        $result = Wishlist::where('product_code', $pc)->first();
        Wishlist::destroy($result->id);
        return back()->with('success', 'Data berhasil dihapus');
    }
}
