@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Update Grand Design</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
              <form action="/editgdesign/{{ $data -> id }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gambar Grand Design</label>
                    <input type="hidden" name="oldImage" value="{{ $data -> gambar }}">
                    @if ($data -> gambar)
                    <img src="{{ asset('storage/'.$data -> gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-5 ">
                    @endif
                    <input type="file" id="gambar" name = "gambar" class="form-control" placeholder="Masukkan Gambar" value="{{ $data -> gambar }}" onchange="previewImage()">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link Google Drive Dokumen Grand Design</label>
                    <input type="text" name = "link_gdrive" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Link Google Drive" value="{{ $data -> link_gdrive }}" >
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