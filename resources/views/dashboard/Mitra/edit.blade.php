@extends('dashboard.layouts.main')
@section('title', 'Ubah mitra')
@section('container')
    <div class="container my-3">
      <h3>Ubah Mitra</h3>
      <form action="/dashboard/mitra/{{ $mitras->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="photo" class="form-label">Masukkan gambar</label>
          <input type="hidden" name="oldImage" value="{{ $mitras->photo }}">
          @if ($mitras->photo)
            <img width="100" src="{{ asset('storage/' . $mitras->photo) }}" class="img-preview img-fluid mb-3 col-sm-4 d-block">
          @else
            <img class="img-preview img-fluid mb-3 col-sm-4">
          @endif
          <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" onchange="previewImage()">
          @error('photo')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
          <button type="submit" class="btn btn-success" onclick="return confirm('Yakin Ubah Data?')">Ubah</button>
      </form>
    </div>
@endsection