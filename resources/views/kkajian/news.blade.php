@extends('layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Dashboard Berita</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

  <div class="container">
      <a href="/tambahberita" type="button" class="btn btn-success mb-3">+ Tambah Berita</a>
      <div class="row">
        @if ($message = Session::get('sukses'))
            <div class="alert alert-success">
              {{ $message }}
            </div>
        @endif

      </div>
      <div class="card-body p-0">
        <table class="table table-striped center">
          <thead>
            <tr>
              <th style="width: 10px">No.</th>
              <th>Judul Berita</th>
              <th>Gambar</th>
              <th>Isi Berita</th>
              <th>Tanggal Dibuat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>
                <img src="{{ asset('gambarberita/'. $item -> gambar) }}" style="width: 40px">
              </td>
              <td>{{ $item -> judul }}</td>
              <td>{{ $item -> isi }}</td>
              <td>{{ $item -> created_at -> format('D M Y') }}</td>
              <td>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li style="margin-bottom: 8px">
                    <a href="/deleteberita/{{ $item -> id }}" type="button" class="btn btn-danger" style="width: 80px ">Hapus</a>
                  </li>
                  <li>
                    <a href="/tampilkanberita/{{ $item -> id }}" type="button" class="btn btn-info" style="width: 80px ">Edit</a>
                  </li>
                </ul>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

          {{-- <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Isi Berita</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Tanggal Dibuat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($data as $item)
                      <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $item -> judul }}</td>
                      <td>{{ $item -> isi }}</td>
                      <td>
                        <img src="{{ asset('gambarberita/'. $item -> gambar) }}" style="width: 40px">
                      </td>
                      <td>{{ $item -> created_at -> format('D M Y') }}</td>
                      <td>
                      <a href="/deleteberita/{{ $item -> id }}" class="btn btn-danger">Hapus</a>
                      <a href="/tampilkanberita/{{ $item -> id }}" class="btn btn-info">Edit</a>
                  </td>
                </tr>
                  @endforeach
                
              </tbody>
            </table> --}}
      </div>

  </div>
</div>
@endsection