@extends('layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Regulasi</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

  <div class="content">
    <div class="container-fluid">
      <a href="/tambahregulasi" type="button" class="btn btn-success mb-3">+ Tambah Regulasi</a>
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
                <th>nama Regulasi</th>
                <th>Link Google Drive</th>
                <th>Terakhir di update</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $index => $item)
              <tr>
                <td>{{ $index + $data->firstItem() }}</td>
                <td>{{ $item -> nama }}</td>
                <td>
                  {{ strlen($item -> link_gdrive) > 35 ? substr($item -> link_gdrive,0,35)."..." : $item -> link_gdrive }}
                </td>
                <td>{{ $item -> updated_at ->isoFormat('dddd, D MMMM Y HH:mm.') }}</td>
                <td>
                      <a href="/deleteregulasi/{{ $item -> id }}" type="button" class="btn btn-danger" style="width: 80px" onclick="return confirm('Anda yakin untuk menghapusnya?')"><i class='fa fa-trash'></i></a>
                      <a href="/tampilkanregulasi/{{ $item -> id }}" type="button" class="btn btn-info" style="width: 80px "><i class='fa fa-edit'></i></a>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
@endsection