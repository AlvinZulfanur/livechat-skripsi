@extends('dashboard.layouts.main')
@section('title', 'Produk')
@section('container')
`<div class="col-lg-6 text-center">
    <div id="card-1" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
      <div>
        <img src="{{ asset('storage/' . $detailproduk->photo) }}" width="200" alt="">
      </div>
      <div class="text-center bg-white py-2 shadow text-center" style="width: 50% margin:auto">
        <h6>{{ $detailproduk->title }}</h6>
        <p>{{  $detailproduk->description }} 
        </p>
      </div>
    </div>
  </div>
@endsection