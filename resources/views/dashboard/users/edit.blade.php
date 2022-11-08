@extends('dashboard.layouts.main')
@section('title', 'Ubah Profil')
@section('container')
    <div class="container my-3">
      <h3>Ubah Profil</h3>
      <form action="/dashboard/update" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label ">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', Auth::user()->username) }}" >
          @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email', Auth::user()->email) }}" name="email" >
          @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', Auth::user()->name) }}" name="name" >
          @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
          <button type="submit" class="btn btn-success" onclick="return confirm('Yakin Ubah Data?')">Ubah</button>
      </form>
    </div>
@endsection