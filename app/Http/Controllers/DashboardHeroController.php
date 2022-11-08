<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hero.index', [
            'title' => 'Hero',
            'hero' => Hero::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hero = $request->validate([
            'title' => 'required|max:255',
            'photo' => 'image|file|max:1024',
            'description' => 'required'
        ]);

        if ($request->file('photo')) {
            $hero['photo'] = $request->file('photo')->store('img-hero');

            Hero::create($hero);

            return redirect('/dashboard/hero')->with(['success' => 'Data Berhasil Ditambahkan']);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('dashboard.hero.edit', [
            'hero' => $hero
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $rules = $request->validate([
            'title' => 'required|max:255',
            'photo' => 'image|file|max:1024',
            'description' => 'required'
        ]);
        if ($request->file('photo')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $rules['photo'] = $request->file('photo')->store('img-fitur');
        }
        Hero::where('id', $hero->id)
        ->update($rules);

        return redirect('/dashboard/hero')->with(['success' => 'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
