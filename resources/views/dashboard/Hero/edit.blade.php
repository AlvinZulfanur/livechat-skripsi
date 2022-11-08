@extends('dashboard.layouts.main')
@section('title', 'Ubah Hero')
@section('container')
    <div class="container my-3">
      <h3>Ubah Hero</h3>
      <form action="/dashboard/hero/{{ $hero->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label ">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $hero->title) }}" >
          @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" value="{{ old('description', $hero->description) }}" name="description" >
          @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        
        <div class="mb-3">
          <label for="photo" class="form-label">Masukkan gambar</label>
          <input type="hidden" name="oldImage" value="{{ $hero->photo }}">
          @if ($hero->photo)
            <img src="{{ asset('storage/' . $hero->photo) }}" class="img-preview img-fluid mb-3 col-sm-4 d-block">
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