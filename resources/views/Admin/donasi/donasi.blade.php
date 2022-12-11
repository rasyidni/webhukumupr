@extends('layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Donasi</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

  <section class="content">
    <div class="container-fluid">
        <a href="/tambahdonasi" type="button" class="btn btn-success mb-3">+ Tambah Donasi</a>
        <div class="card">
          @if ($message = Session::get('sukses'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  {{ $message }}
                </div>
                {{ Session::forget('sukses') }}
            @endif
          <div class="card-body p-0">
            <table class="table table-striped center">
              <thead>
                <tr>
                  <th style="width: 10px">No.</th>
                  <th>Nama Donasi</th>
                  <th>Link Google Form</th>
                  <th>Tanggal Dibuat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item -> nama_donasi }}</td>
                  <td>{{ $item -> link_gform }}</td>
                  <td>{{ $item -> created_at -> format('l, d M Y H:i') }}</td>
                  <td>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li style="margin-bottom: 8px">
                        <a href="/deletedonasi/{{ $item -> id }}" type="button" class="btn btn-danger" style="width: 80px " onclick="return confirm('Anda yakin untuk menghapusnya?')">Hapus</a>
                      </li>
                      <li>
                        <a href="/tampilkandonasi/{{ $item -> id }}" type="button" class="btn btn-info" style="width: 80px ">Edit</a>
                      </li>
                    </ul>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </section>
</div>
@endsection