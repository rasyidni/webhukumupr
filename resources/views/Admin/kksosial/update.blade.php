@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Kementerian Koordinator Sosial dan Lingkungan Hidup</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="/editkksosial/1" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Menteri Koordinator</label>
                <input type="text" name = "nama_menteri" class="form-control @error('nama_menteri') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_menteri }}">
                @error('nama_menteri')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Menteri Koordinator</label>
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
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Sosial</label>
                <input type="text" name = "nama_dsosial" class="form-control @error('nama_dsosial') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_dsosial }}">
                @error('nama_dsosial')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Sosial</label>
                <input type="hidden" name="oldImageds" value="{{ $data -> gambar_dsosial }}">
                @if ($data -> gambar_dsosial)
                <img src="{{ asset('storage/'.$data -> gambar_dsosial) }}" class="img-previewds img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewds img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_dsosial" name="gambar_dsosial" class="form-control @error('gambar_dsosial') is-invalid @enderror" value="{{ $data -> gambar_dsosial }}" onchange="previewImageds()">
                @error('gambar_dsosial')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Lingkungan Hidup & Tata Ruang</label>
                <input type="text" name = "nama_dlingkungan" class="form-control @error('nama_dlingkungan') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_dlingkungan }}">
                @error('nama_dlingkungan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Lingkungan Hidup & Tata Ruang</label>
                <input type="hidden" name="oldImagedl" value="{{ $data -> gambar_dlingkungan }}">
                @if ($data -> gambar_dlingkungan)
                <img src="{{ asset('storage/'.$data -> gambar_dlingkungan) }}" class="img-previewdl img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewdl img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_dlingkungan" name="gambar_dlingkungan" class="form-control @error('gambar_dlingkungan') is-invalid @enderror" value="{{ $data -> gambar_dlingkungan }}" onchange="previewImagedl()">
                @error('gambar_dlingkungan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Staff Kementerian</label>
                <input type="text" name = "nama_staff1" class="form-control @error('nama_staff1') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_staff1 }}">
                @error('nama_staff1')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Staff Kementerian</label>
                <input type="hidden" name="oldImagest1" value="{{ $data -> gambar_staff1 }}">
                @if ($data -> gambar_staff1)
                <img src="{{ asset('storage/'.$data -> gambar_staff1) }}" class="img-previewst1 img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewst1 img-fluid mb-3 col-sm-5 ">
                @endif
                <input type="file" id="gambar_staff1" name="gambar_staff1" class="form-control @error('gambar_staff1') is-invalid @enderror" value="{{ $data -> gambar_staff1 }}" onchange="previewImagest1()">
                @error('gambar_staff1')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Staff Kementerian</label>
                <input type="text" name = "nama_staff2" class="form-control @error('nama_staff2') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_staff2 }}">
                @error('nama_staff2')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Staff Kementerian</label>
                <input type="hidden" name="oldImagest2" value="{{ $data -> gambar_staff2 }}">
                @if ($data -> gambar_staff2)
                <img src="{{ asset('storage/'.$data -> gambar_staff2) }}" class="img-previewst2 img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewst2 img-fluid mb-3 col-sm-5 ">
                @endif
                <input type="file" id="gambar_staff2" name="gambar_staff2" class="form-control @error('gambar_staff2') is-invalid @enderror" value="{{ $data -> gambar_staff2 }}" onchange="previewImagest2()">
                @error('gambar_staff2')
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

      function previewImageds(){
        const gambar = document.querySelector('#gambar_dsosial');
        const imgPreview = document.querySelector('.img-previewds');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagedl(){
        const gambar = document.querySelector('#gambar_dlingkungan');
        const imgPreview = document.querySelector('.img-previewdl');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagest1(){
        const gambar = document.querySelector('#gambar_staff1');
        const imgPreview = document.querySelector('.img-previewst1');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagest2(){
        const gambar = document.querySelector('#gambar_staff2');
        const imgPreview = document.querySelector('.img-previewst2');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

    </script>

@endsection
