@extends('dashboard.layouts.main')
@section('title', 'Tambah Statistik')
@section('container')
    <div class="container my-3">
      <h3>Tambah</h3>
      <form action="/dashboard/statistik" method="post"> 
        @csrf
        <div class="mb-3">
          <label for="download" class="form-label ">Download</label>
          <input type="text" class="form-control @error('download') is-invalid @enderror" id="download" name="download" value="{{ old('download') }}" >
          @error('download')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
          <label for="rating" class="form-label">Rating</label>
          <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" value="{{ old('rating') }}" name="rating" >
          @error('rating')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <button type="submit" class="btn btn-success">Buat</button>
      </form>
    </div>
@endsection