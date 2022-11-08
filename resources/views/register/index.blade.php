@extends('layouts.main')
<main class="form-signin m-auto col-md-8 justify-content-center align-items-center shadow p-3 bg-body rounded">
  <h1 class="h3 mb-3 fw-normal text-center">Daftar</h1>
    <form method="post" action="/registrasi">
      @csrf
      <div class="form-floating">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name')}}" autocomplete="off">
        <label for="name">Nama</label>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" d value="{{ old('username')}}  " >
        <label for="username">Username</label>
        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" d value="{{ old('email')}}  ">
        <label for="email">Email</label>
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" d value="{{ old('password')}}">
        <label for="password">Password</label>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <button class=" w-100 btn btn-lg btn-primary bg-secondary border-0 text-white mt-2" type="submit">Daftar</button>
    </form>
    <small>
        <p class="d-flex justify-content-center gap-1">Sudah Punya Akun? 
            <a href="/login">Masuk</a>
        </p>
    </small>
  </main>