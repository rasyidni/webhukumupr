@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Kementerian Dalam Negeri</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="/editkdalamnegeri/1" method="POST" enctype="multipart/form-data">
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
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Statistik</label>
                <input type="text" name = "nama_dstatistik" class="form-control @error('nama_dstatistik') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_dstatistik }}">
                @error('nama_dstatistik')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Statistik</label>
                <input type="hidden" name="oldImageds" value="{{ $data -> gambar_dstatistik }}">
                @if ($data -> gambar_dstatistik)
                <img src="{{ asset('storage/'.$data -> gambar_dstatistik) }}" class="img-previewds img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewds img-fluid mb-3 col-sm-5 ">
                @endif
                <input type="file" id="gambar_dstatistik" name="gambar_dstatistik" class="form-control @error('gambar_dstatistik') is-invalid @enderror" value="{{ $data -> gambar_dstatistik }}" onchange="previewImageds()">
                @error('gambar_dstatistik')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Urusan Akademik & Kemahasiswaan</label>
                <input type="text" name = "nama_duak" class="form-control @error('nama_duak') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_duak }}">
                @error('nama_duak')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Urusan Akademik & Kemahasiswaan</label>
                <input type="hidden" name="oldImageduak" value="{{ $data -> gambar_duak }}">
                @if ($data -> gambar_duak)
                <img src="{{ asset('storage/'.$data -> gambar_duak) }}" class="img-previewduak img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewduak img-fluid mb-3 col-sm-5 ">
                @endif
                <input type="file" id="gambar_duak" name="gambar_duak" class="form-control @error('gambar_duak') is-invalid @enderror" value="{{ $data -> gambar_duak }}" onchange="previewImageduak()">
                @error('gambar_duak')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Urusan Ormawa & UKM</label>
                <input type="text" name = "nama_duou" class="form-control @error('nama_duou') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_duou }}">
                @error('nama_duou')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Urusan Ormawa & UKM</label>
                <input type="hidden" name="oldImageduou" value="{{ $data -> gambar_duou }}">
                @if ($data -> gambar_duou)
                <img src="{{ asset('storage/'.$data -> gambar_duou) }}" class="img-previewduou img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewduou img-fluid mb-3 col-sm-5 ">
                @endif
                <input type="file" id="gambar_duou" name="gambar_duou" class="form-control @error('gambar_duou') is-invalid @enderror" value="{{ $data -> gambar_duou }}" onchange="previewImageduou()">
                @error('gambar_duou')
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
              <div class="mb-3">Program Kerja</label>
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
        const gambar = document.querySelector('#gambar_dstatistik');
        const imgPreview = document.querySelector('.img-previewds');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImageduak(){
        const gambar = document.querySelector('#gambar_duak');
        const imgPreview = document.querySelector('.img-previewduak');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImageduou(){
        const gambar = document.querySelector('#gambar_duou');
        const imgPreview = document.querySelector('.img-previewduou');

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
