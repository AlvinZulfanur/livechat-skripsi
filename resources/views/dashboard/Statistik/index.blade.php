@extends('dashboard.layouts.main')
@section('title', 'Rating')
@section('container')

      <div class="table-responsive col-lg-12 my-3">
        <h2>Rating</h2>
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <a href="/dashboard/statistik/create" class="btn btn-primary bold text-white my-1">Tambah</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>No</th>
              <th>Download</th>
              <th>Rating</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($statistik as $statistiks)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $statistiks->download }}</td>
              <td>{{ $statistiks->rating }}</td>
              <td>
                <a href="/dashboard/statistik/{{ $statistiks->id }}/edit" class="badge bg-warning"><i data-feather="edit"></i></a>
                <form action="/dashboard/statistik/{{ $statistiks->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Yakin Hapus Data?')"><span data-feather="trash-2"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table> 
@endsection