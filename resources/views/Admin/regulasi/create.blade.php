@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Tambah Regulasi</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="/insertregulasi" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Nama Regulasi</label>
                <input type="text" name = "nama" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" placeholder="Masukkan nama regulasi">
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Google Drive Dokumen</label>
                <input class="form-control @error('link_gdrive') is-invalid @enderror" name = "link_gdrive" placeholder="Masukkan Link Google Drive">
                @error('link_gdrive')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
              </form>     
            </div>
          </div>
        </div>
    </section>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>

      function previewImage(){
        const gambar = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

    </script>

@endsection
