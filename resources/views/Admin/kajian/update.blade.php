@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Update Kajian</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="/editkajian/{{ $data -> id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Kajian</label>
                <input type="text" name = "judul" placeholder="Masukkan Judul Kajian" class="form-control @error('judul') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> judul }}">
                @error('judul')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $data -> gambar }}">
                </br>
                @if ($data -> gambar)
                <img src="{{ asset('storage/'.$data -> gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="border: 1px solid #000000;">
                @else
                <img class="img-preview img-fluid mb-3 col-sm-5 " style="border: 1px solid #000000;">
                @endif
                <input type="file" id="gambar" name="gambar" class="form-control @error('gambar') is-invalid @enderror" value="{{ $data -> gambar }}" onchange="previewImage()">
                @error('gambar')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Abstrak Kajian</label>
                <textarea class="form-control @error('isi') is-invalid @enderror" id="editor" name = "isi" rows="3" placeholder="Masukkan Isi Kajian">{{ $data -> isi }}</textarea>
                @error('isi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dokumen Kajian (pdf)</label>
                <input type="hidden" name="oldFile" value="{{ $data -> file }}">
                </br>
                </br>
                @if ($data -> file)
                <embed type="application/pdf" src="{{ asset('storage/'.$data -> file) }}" class="file-preview" width="600" height="400" style="border: 1px solid #000000;"></embed>
                @else
                <embed type="application/pdf" class="file-preview" width="600" height="400" style="border: 1px solid #000000;"></embed>
                @endif
                </br>
                </br>
                <input type="file" id="file" name="file" class="form-control @error('file') is-invalid @enderror" value="{{ $data -> file }}" onchange="previewFile()">
                @error('file')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
              </form>
            </div>
        </div>
      </div>
    </section>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>

      function previewFile(){
        const file = document.querySelector('#file');
        const filePreview = document.querySelector('.file-preview');

        filePreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(file.files[0]);

        oFReader.onload = function(oFREvent) {
          filePreview.src = oFREvent.target.result;
        }
      }

      function previewImage(){
        const gambar = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.gambar-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

    </script>

@endsection

 