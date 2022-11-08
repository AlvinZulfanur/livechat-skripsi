@extends('dashboard.layouts.main')
@section('title', 'Tambah Fitur')
@section('container')
    <div class="container my-3">
      <h3>Tambah Keunggulan</h3>
      <form action="/dashboard/fitur" method="post" enctype="multipart/form-data"> 
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label ">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" >
          @error('title')
            <div class="invalid-feedback"> 
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" value="{{ old('description') }}" name="description" >
          @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        
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