<?php

namespace App\Http\Controllers;
use App\Models\Fitur;
use App\Models\Produk;
use App\Models\Hero;
use App\Models\Mitra;
use App\Models\DownloadRating;
use App\Models\Statistik;
use Illuminate\Http\Request;


class FiturController extends Controller
{
    public function index(){
        return view('home', [
            'fitur' => Fitur::all(),
            'produk' => Produk::all(),
            'statistik' => Statistik::all(),
            'hero' => Hero::all(),
            'mitras' => Mitra::all()
        ]);
    }
}
