@extends('dashboard.layouts.main')
@section('title', 'Tambah Mitra')
@section('container')
    <div class="container my-3">
      <h3>Tambah Mitra</h3>
      <form action="/dashboard/mitra" method="post" enctype="multipart/form-data"> 
        @csrf
        <div class="mb-3">
          <label for="photo" class="form-label">Masukkan gambar</label>
          <img class="img-preview img-fluid mb-3 col-sm-4">
          <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" onchange="previewImage()">
          @error('photo')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
          <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
@endsection