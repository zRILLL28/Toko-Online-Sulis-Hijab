<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Http\Requests\StoreMerkRequest;
use App\Http\Requests\UpdateMerkRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Merk::latest()->get();
        return view('dashboard.merk.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.merk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMerkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMerkRequest $request)
    {
        $validated = $request->validated();
        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('merk_image');
        }

        Merk::create($validated);
        return redirect()->route('dashboard-merk.index')->with('success', 'Merk Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show(Merk $merk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merk = DB::table('merks')->where('id', '=', $id)->first();
        return view('dashboard.merk.edit', compact('merk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMerkRequest  $request
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMerkRequest $request, $merk)
    {
        $result = DB::table('merks')->where('id', '=', $merk)->first();
        $validated = $request->validated();
        if ($request->merk != $result->merk) {
            $message = array(
                'unique' => 'Merk produk sudah ada'
            );
            $validated = $request->validate([
                'merk' => 'unique:merks,merk'
            ], $message);
        }
        if ($img = $request->file('image')) {
            Storage::delete($result->image);
            $validated['image'] = $img->store('merk_image');
        }
        Merk::findOrFail($merk)->update($validated);
        return redirect()->route('dashboard-merk.index')->with('success', 'Merk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Merk::findOrFail($id)->first();
        if ($img = $result['image']) {
            Storage::delete($img);
        }
        Merk::destroy($id);
        return back()->with('success', 'Merk berhasil dihapus!');
    }
}
