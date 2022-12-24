@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Kementerian Pemberdayaan Perempuan</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="/editkperempuan/1" method="POST" enctype="multipart/form-data">
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
                <input type="hidden" name="oldImagem" value="{{ $data -> gambar_menteri }}">
                @if ($data -> gambar_menteri)
                <img src="{{ asset('storage/'.$data -> gambar_menteri) }}" class="img-previewm img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewm img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_menteri" name="gambar_menteri" class="form-control @error('gambar_menteri') is-invalid @enderror" value="{{ $data -> gambar_menteri }}" onchange="previewImagem()">
                @error('gambar_menteri')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Kajian Isu Perempuan</label>
                <input type="text" name = "nama_dkip" class="form-control @error('nama_dkip') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_dkip }}">
                @error('nama_dkip')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Kajian Isu Perempuan</label>
                <input type="hidden" name="oldImagedkip" value="{{ $data -> gambar_dkip }}">
                @if ($data -> gambar_dkip)
                <img src="{{ asset('storage/'.$data -> gambar_dkip) }}" class="img-previewdkip img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewdkip img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_dkip" name="gambar_dkip" class="form-control @error('gambar_dkip') is-invalid @enderror" value="{{ $data -> gambar_dkip }}" onchange="previewImagedkip()">
                @error('gambar_dkip')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Perlindungan Perempuan</label>
                <input type="text" name = "nama_dpp" class="form-control @error('nama_dpp') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_dpp }}">
                @error('nama_dpp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Perlindungan Perempuan</label>
                <input type="hidden" name="oldImagedpp" value="{{ $data -> gambar_dpp }}">
                @if ($data -> gambar_dpp)
                <img src="{{ asset('storage/'.$data -> gambar_dpp) }}" class="img-previewdpp img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewdpp img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_dpp" name="gambar_dpp" class="form-control @error('gambar_dpp') is-invalid @enderror" value="{{ $data -> gambar_dpp }}" onchange="previewImagedpp()">
                @error('gambar_dpp')
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
                <textarea class="form-control @error('fokus_utama') is-invalid @enderror" id="editor" name = "fokus_utama" rows="3" placeholder="Masukkan Isi Fokus utama">{{ $data -> fokus_utama }}</textarea>
                @error('fokus_utama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Program Kerja</label>
                <textarea class="form-control @error('proker') is-invalid @enderror" id="editor1" name = "proker" rows="3" placeholder="Masukkan Isi Program Kerja">{{ $data -> proker }}</textarea>
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

      function previewImagem(){
        const gambar = document.querySelector('#gambar_menteri');
        const imgPreview = document.querySelector('.img-previewm');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagedkip(){
        const gambar = document.querySelector('#gambar_dkip');
        const imgPreview = document.querySelector('.img-previewdkip');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagedpp(){
        const gambar = document.querySelector('#gambar_dpp');
        const imgPreview = document.querySelector('.img-previewdpp');

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
