@extends('layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Berita</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

  <div class="content">
    <div class="container-fluid">
      <a href="/tambahberita" type="button" class="btn btn-success mb-3">+ Tambah Berita</a>
      <div class="card">
          @if ($message = Session::get('sukses'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                {{ $message }}
              </div>
              {{ Session::forget('sukses') }}
          @endif
        <div class="card-body p-0">
          <table class="table table-striped center">
            <thead>
              <tr>
                <th style="width: 10px">No.</th>
                <th>Judul Berita</th>
                <th>Gambar</th>
                <th>Terakhir di update</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item -> judul }}</td>
                <td>
                  <img src="{{ asset('storage/'. $item -> gambar) }}" style="width: 120px" class="img-fluid">
                </td>
                <td>{{ $item -> updated_at -> format('l, d M Y H:i') }}</td>
                <td>
                  <a href="/deleteberita/{{ $item -> id }}" type="button" class="btn btn-danger" style="width: 80px" onclick="return confirm('Anda yakin untuk menghapusnya?')"><i class='fa fa-trash'></i></a>
                      <a href="/tampilkanberita/{{ $item -> id }}" type="button" class="btn btn-info" style="width: 80px "><i class='fa fa-edit'></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection