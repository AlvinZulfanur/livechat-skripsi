@extends('dashboard.layouts.main')
@section('title', 'Ubah Nilai')
@section('container')
    <div class="container my-3">
      <h3>Ubah</h3>
      <form action="/dashboard/statistik/{{ $statistik->id }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="download" class="form-label">Download</label>
          <input type="text" class="form-control @error('download') is-invalid @enderror" id="download" value="{{ old('download', $statistik->download) }}" name="download" >
          @error('download')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="rating" class="form-label ">Rating</label>
          <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" value="{{ old('rating', $statistik->rating) }}" >
          @error('rating')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
          <button type="submit" class="btn btn-success" onclick="return confirm('Yakin Ubah Data?')">Ubah</button>
      </form>
    </div>
@endsection