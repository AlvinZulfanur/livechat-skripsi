@extends('dashboard.layouts.main')
@section('title', 'Fitur')
@section('container')
  <div class="col-lg-4 my-2 text-center border-0 shadow">
      <div class="card rounded-4" data-aos="zoom-in" data-aos-duration="1700" data-offset="500" >
        <div class="card-body">
          <h5 class="card-title"><img src="{{ asset('storage/' . $detailfitur->photo) }}" alt="" class="img-fluid"></h5>
          <h6 class="card-subtitle mb-2">{{ $detailfitur->title }}</h6>
          <p class="card-text">{{ $detailfitur->description }}</p>
        </div>
      </div>
  </div>

@endsection