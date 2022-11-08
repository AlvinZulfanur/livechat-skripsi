<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DashboardFiturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fitur.index', [
            'title' => 'Fitur',
            'fitur' => Fitur::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.fitur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fitur = $request->validate([
            'title' => 'required|max:255',
            'photo' => 'image|file|max:1024',
            'description' => 'required'
        ]);

        if ($request->file('photo')) {
            $fitur['photo'] = $request->file('photo')->store('img-fitur');
        
        Fitur::create($fitur);

        return redirect('/dashboard/fitur')->with(['success' => 'Data Berhasil Ditambahkan']);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function show(Fitur $fitur)
    {
        return view('dashboard.fitur.show', [
            'detailfitur' => $fitur
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function edit(Fitur $fitur)
    {
        return view('dashboard.fitur.edit', [
            'fitur' => $fitur
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fitur $fitur)
    {

        $rules = $request->validate([
            'title' => 'required|max:255',
            'photo' => 'image|file|max:1024',
            'description' => 'required'
        ]);
        if ($request->file('photo')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $rules['photo'] = $request->file('photo')->store('img-fitur');
        }
        Fitur::where('id', $fitur->id)
        ->update($rules);
        
        return redirect('/dashboard/fitur')->with(['success' => 'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fitur  $fitur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fitur $fitur)
    {
        if ($fitur->photo) {
            Storage::delete($fitur->photo);
        }
        Fitur::destroy($fitur->id);

        return redirect('/dashboard/fitur')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
