<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Merk;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('products')->latest()->get();
        return view('dashboard.product.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merk::get();
        return view('dashboard.product.create', compact('merk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('product_image');
        }

        Product::create($validated);
        return redirect()->route('dashboard-product.index')->with('success', 'Produk Berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $data = array(
            'product' => Product::where('product_code', $product)->first(),
            'product_code' => $product,
            'merk' => Merk::get()
        );
        return view('dashboard.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $product)
    {
        $result = Product::where('product_code', $product)->first();
        $validated = $request->validated();
        if ($request['product_code'] != $product) {
            $message = array(
                'unique' => 'Kode produk telah digunakan'
            );
            $validated = $request->validate([
                'product_code' => 'unique:products,product_code'
            ], $message);
        }
        if ($request['image']) {
            Storage::delete($result['image']);
            $validated['image'] = $request->file('image')->store('product_image');
        }
        Product::findOrFail($product)->update($validated);
        return redirect()->route('dashboard-product.index')->with('success', 'Produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($pc)
    {
        $result = Product::where('product_code', $pc)->first();
        if ($img = $result['image']) {
            Storage::delete($img);
        }
        Product::destroy($result->product_code);
        return back()->with('success', 'Produk berhasil dihapus!');
    }
}
