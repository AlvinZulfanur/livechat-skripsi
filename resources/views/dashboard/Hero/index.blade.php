@extends('dashboard.layouts.main')
@section('title', 'Hero')
@section('container')

      <div class="table-responsive col-lg-12 my-3">
        <h2>Hero</h2>
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <a href="/dashboard/hero/create" class="btn btn-primary bold text-white my-1">Tambah Hero</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>No</th>
              <th>Photo</th>
              <th>Title</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($hero as $heroes)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><img width="50" src="{{ asset('storage/' . $heroes->photo) }}"></td>
              <td>{{ $heroes->title }}</td>
              <td>{{ $heroes->description }}</td>
              <td>
                <a href="/dashboard/hero/{{ $heroes->id}}" class="badge bg-info"><i data-feather="eye"></i></a>
                <a href="/dashboard/hero/{{ $heroes->id}}/edit" class="badge bg-warning"><i data-feather="edit"></i></a>
                <form action="/dashboard/hero/{{ $heroes->id}}" method="post" class="d-inline">
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