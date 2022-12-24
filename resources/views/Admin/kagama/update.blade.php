@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Kementerian Agama</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="/editkagama" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Menteri</label>
                <input type="text" name = "nama_menteri" class="form-control @error('nama_menteri') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_menteri }}">
                @error('nama_menteri')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Menteri</label>
                <input type="hidden" name="oldImageM" value="{{ $data -> gambar_menteri }}">
                @if ($data -> gambar_menteri)
                <img src="{{ asset('storage/'.$data -> gambar_menteri) }}" class="img-previewm img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewm img-fluid mb-3 col-sm-5 ">
                @endif
                <input type="file" id="gambar_menteri" name="gambar_menteri" class="form-control @error('gambar_menteri') is-invalid @enderror" value="{{ $data -> gambar_menteri }}" onchange="previewImageM()">
                @error('gambar_menteri')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Lintas Agama</label>
                <input type="text" name = "nama_dagama" class="form-control @error('nama_dagama') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_dagama }}">
                @error('nama_dagama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Lintas Agama</label>
                <input type="hidden" name="oldImageda" value="{{ $data -> gambar_dagama }}">
                @if ($data -> gambar_dagama)
                <img src="{{ asset('storage/'.$data -> gambar_dagama) }}" class="img-previewda img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewda img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_dagama" name="gambar_dagama" class="form-control @error('gambar_dagama') is-invalid @enderror" value="{{ $data -> gambar_dagama }}" onchange="previewImageda()">
                @error('gambar_dagama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Keimanan & Keilmuan</label>
                <input type="text" name = "nama_dilmu" class="form-control @error('nama_dilmu') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_dilmu }}">
                @error('nama_dilmu')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Keimanan & Keilmuan</label>
                <input type="hidden" name="oldImagedil" value="{{ $data -> gambar_dilmu }}">
                @if ($data -> gambar_dilmu)
                <img src="{{ asset('storage/'.$data -> gambar_dilmu) }}" class="img-previewdil img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewdil img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_dilmu" name="gambar_dilmu" class="form-control @error('gambar_dilmu') is-invalid @enderror" value="{{ $data -> gambar_dilmu }}" onchange="previewImagedil()">
                @error('gambar_dilmu')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Staff Kementerian</label>
                <input type="text" name = "nama_staff" class="form-control @error('nama_staff') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_staff }}">
                @error('nama_staff')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Staff Kementerian</label>
                <input type="hidden" name="oldImagest" value="{{ $data -> gambar_staff }}">
                @if ($data -> gambar_staff)
                <img src="{{ asset('storage/'.$data -> gambar_staff) }}" class="img-previewst img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewst img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_staff" name="gambar_staff" class="form-control @error('gambar_staff') is-invalid @enderror" value="{{ $data -> gambar_staff }}" onchange="previewImagest()">
                @error('gambar_staff')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fokus Utama</label>
                <textarea class="form-control @error('fokus_utama') is-invalid @enderror" id="editor" name = "fokus_utama" rows="3" placeholder="Masukkan Isi Fokus Utama">{{ $data -> fokus_utama }}</textarea>
                @error('fokus_utama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Program Kerja</label>
                <textarea class="form-control @error('proker') is-invalid @enderror" id="editor1" name = "proker" rows="3" placeholder="Masukkan Program Kerja">{{ $data -> proker }}</textarea>
                @error('proker')
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

      function previewImageM(){
        const gambar = document.querySelector('#gambar_menteri');
        const imgPreview = document.querySelector('.img-previewm');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImageda(){
        const gambar = document.querySelector('#gambar_dagama');
        const imgPreview = document.querySelector('.img-previewda');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagedil(){
        const gambar = document.querySelector('#gambar_dilmu');
        const imgPreview = document.querySelector('.img-previewdil');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagest(){
        const gambar = document.querySelector('#gambar_staff');
        const imgPreview = document.querySelector('.img-previewst');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

    </script>

@endsection
