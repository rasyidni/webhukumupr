@extends('layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman UKM</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

  <div class="content">
    <div class="container-fluid">
      <a href="/tambahukm" type="button" class="btn btn-success mb-3">+ Tambah UKM</a>
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
                <th>Nama UKM</th>
                <th>Logo</th>
                <th style="width: 20%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item -> nama }}</td>
                <td>
                  <img src="{{ asset('storage/'. $item -> logo) }}" style="width: 100px" class="img-fluid">
                </td>
                <td>
                  <a href="/deleteukm/{{ $item -> id }}" type="button" class="btn btn-danger" style="width: 80px" onclick="return confirm('Anda yakin untuk menghapusnya?')"><i class='fa fa-trash'></i></a>
                  <a href="/tampilkanukm/{{ $item -> id }}" type="button" class="btn btn-info" style="width: 80px "><i class='fa fa-edit'></i></a>
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