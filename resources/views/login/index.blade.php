@extends('layouts.main')
<main class="form-signin m-auto col-md-8 justify-content-center align-items-center shadow p-3 bg-body rounded">
  @if(session()->has('success'))
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if(session()->has('Loginerror'))
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    {{ session('Loginerror') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
    <form method="post" action="/login">
      @csrf
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror"  id="email" name="email" autofocus value="{{ old('email')}}">
        <label for="email">Email</label>
        @error('email')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
      <div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
        <label for="password">Password</label>
        @error('password')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
      </div>
      <button class=" w-100 btn btn-lg btn-primary mt-3 bg-secondary border-0 text-white" type="submit">Login</button>
    </form>

    <small>
      <p class="d-flex justify-content-center gap-1">Belum Punya Akun? <a href="/registrasi">Daftar</a></p>
    </small>
  </main>