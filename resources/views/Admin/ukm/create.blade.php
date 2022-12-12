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
            <form action="/insertukm" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Nama UKM</label>
                <input type="text" name = "nama" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" required>
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Logo</label>
                <img class="logo-preview img-fluid mb-3 col-sm-5">
                <input type="file" id="logo" name = "logo" class="form-control @error('logo') is-invalid @enderror" onchange="previewLogo()">
                @error('logo')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                <textarea class="form-control @error('keterangan') is-invalid @enderror" id="editor" name = "keterangan" rows="3" placeholder="Masukkan Keterangan"></textarea>
                @error('keterangan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Link Instagram</label>
                <input type="text" name = "ig" class="form-control @error('ig') is-invalid @enderror" id="exampleInputEmail1" required>
                @error('ig')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Link Youtube</label>
                <input type="text" name = "youtube" class="form-control @error('youtube') is-invalid @enderror" id="exampleInputEmail1" required>
                @error('youtube')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Link Facebook</label>
                <input type="text" name = "fb" class="form-control @error('fb') is-invalid @enderror" id="exampleInputEmail1" required>
                @error('fb')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Whatsapp</label>
                <input type="text" name = "wa" class="form-control @error('wa') is-invalid @enderror" id="exampleInputEmail1" required>
                @error('wa')
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

      function previewLogo(){
        const logo = document.querySelector('#logo');
        const logoPreview = document.querySelector('.logo-preview');

        logoPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(logo.files[0]);

        oFReader.onload = function(oFREvent) {
          logoPreview.src = oFREvent.target.result;
        }
      }

    </script>

@endsection
