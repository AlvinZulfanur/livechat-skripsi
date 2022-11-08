<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardMitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mitra.index', [
            'title' => 'Mitra',
            'mitras' => Mitra::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mitra = $request->validate([
            'photo' => 'image|file|max:1024',
        ]);

        if ($request->file('photo')) {
            $mitra['photo'] = $request->file('photo')->store('img-mitra');

            Mitra::create($mitra);

            return redirect('/dashboard/mitra')->with(['success' => 'Data Berhasil Ditambahkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show(Mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitra $mitra)
    {
        return view('dashboard.mitra.edit', [
            'mitras' => $mitra
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mitra $mitra)
    {
        $rules = $request->validate([
            'photo' => 'image|file|max:1024'
        ]);
        if ($request->file('photo')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $rules['photo'] = $request->file('photo')->store('img-fitur');
        }
        Mitra::where('id', $mitra->id)
        ->update($rules);

        return redirect('/dashboard/mitra')->with(['success' => 'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        if ($mitra->photo) {
            Storage::delete($mitra->photo);
        }
        Mitra::destroy($mitra->id);

        return redirect('/dashboard/mitra')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
