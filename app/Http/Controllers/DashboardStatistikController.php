<?php

namespace App\Http\Controllers;

use App\Models\Statistik;
use Illuminate\Http\Request;

class DashboardStatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.statistik.index', [
            'statistik' => Statistik::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.statistik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $statistik = $request->validate([
            'download' => 'required|max:255',
            'rating' => 'required|max:255'
        ]);

        Statistik::create($statistik);

        return redirect('/dashboard/statistik')->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statistik  $statistik
     * @return \Illuminate\Http\Response
     */
    public function show(Statistik $statistik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statistik  $statistik
     * @return \Illuminate\Http\Response
     */
    public function edit(Statistik $statistik)
    {
        return view('dashboard.statistik.edit', [
            'statistik' => $statistik
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statistik  $statistik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statistik $statistik)
    {
        $rules = $request->validate([
            'download' => 'required|max:255',
            'rating' => 'required|max:255',
        ]);

        Statistik::where('id', $statistik->id)
            ->update($rules);

        return redirect('/dashboard/statistik')->with(['success' => 'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statistik  $statistik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistik $statistik)
    {
        Statistik::destroy($statistik->id);

        return redirect('/dashboard/statistik')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
