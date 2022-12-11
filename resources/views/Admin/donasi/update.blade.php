@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Update Donasi</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="/editdonasi/{{ $data -> id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Donasi</label>
                <input type="text" name = "nama_donasi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Donasi" value="{{ $data -> nama_donasi }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Google Form</label>
                <textarea class="form-control" name = "link_gform" rows="3" placeholder="Masukkan link google form">{{ $data -> link_gform }}</textarea>
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
              </form>      
              </div>
        </div>
      </div>
    </section>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection

  {{-- <div class="card-body">
    <form action="/editberita/{{ $data -> id }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Judul</label>
                              <input type="text" name = "judul" class="form-control" id="exampleInputEmail1" value="{{ $data -> judul }}" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Isi</label>
                                <input type="text" name = "isi" class="form-control" id="exampleInputEmail1" value="{{ $data -> isi }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Gambar</label>
                                <input type="file" name = "gambar" class="form-control" id="exampleInputEmail1" value="{{ $data -> gambar }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
                
            </div>

        </div> --}}