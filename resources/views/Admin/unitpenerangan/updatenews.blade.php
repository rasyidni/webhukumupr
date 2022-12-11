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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="/editberita/{{ $data -> id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Berita</label>
                <input type="text" name = "judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> judul }}">
                @error('judul')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $data -> gambar }}">
                @if ($data -> gambar)
                <img src="{{ asset('storage/'.$data -> gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-preview img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar" name="gambar" class="form-control @error('gambar') is-invalid @enderror" value="{{ $data -> gambar }}" onchange="previewImage()">
                @error('gambar')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Isi Berita</label>
                <textarea class="form-control @error('isi') is-invalid @enderror" id="editor" name = "isi" rows="3" placeholder="Masukkan Isi Berita">{{ $data -> isi }}</textarea>
                @error('isi')
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