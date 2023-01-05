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
                  <th>Terakhir Di Update</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $index => $item)
                <tr>
                  <td>{{ $index + $data->firstItem() }}</td>
                  <td>{{ $item -> nama_donasi }}</td>
                  <td>{{ strlen($item -> link_gform) > 35 ? substr($item -> link_gform,0,35)."..." : $item -> link_gform }}</td>
                  <td>{{ $item -> updated_at ->isoFormat('dddd, D MMMM Y HH:mm.') }}</td>
                  <td>
                    <a href="/deletedonasi/{{ $item -> id }}" type="button" class="btn btn-danger" style="width: 80px" onclick="return confirm('Anda yakin untuk menghapusnya?')"><i class='fa fa-trash'></i></a>
                      <a href="/tampilkandonasi/{{ $item -> id }}" type="button" class="btn btn-info" style="width: 80px "><i class='fa fa-edit'></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
              </br>
              <div style="padding: 0 15px 0;">
                {{ $data->links() }}
              </div>
          </div>
      </div>
    </div>
  </section>
</div>
<br>
<br>
@endsection