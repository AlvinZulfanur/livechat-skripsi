<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.produk.index', [
            'title' => 'Produk',
            'produk' => Produk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = $request->validate([
            'title' => 'required|max:255',
            'photo' => 'image|file|max:1024',
            'description' => 'required'
        ]);

        if($request->file('photo')) {
            $produk['photo'] = $request->file('photo')->store('post-produk');
        }

        Produk::create($produk);

        return redirect('/dashboard/produk')->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return view('dashboard.produk.show', [
            'detailproduk' => $produk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('dashboard.produk.edit', [
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $rules = $request->validate([
            'title' => 'required|max:255',
            'photo' => 'required|file',
            'description' => 'required'
        ]);

        if ($request->file('photo')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $rules['photo'] = $request->file('photo')->store('post-produk');
        }

        Produk::where('id', $produk->id)
            ->update($rules);

        return redirect('/dashboard/produk')->with(['success' => 'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        
            if ($produk->photo) {
                Storage::delete($produk->photo);
            }
        Produk::destroy($produk->id);

        return redirect('/dashboard/produk')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
