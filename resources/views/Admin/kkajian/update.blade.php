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
            <form action="/editkkajian/1" method="POST" enctype="multipart/form-data">
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
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Kajian Strategis</label>
                <input type="text" name = "nama_dks" class="form-control @error('nama_dks') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_dks }}">
                @error('nama_dks')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Kajian Strategis</label>
                <input type="hidden" name="oldImagedks" value="{{ $data -> gambar_dks }}">
                @if ($data -> gambar_dks)
                <img src="{{ asset('storage/'.$data -> gambar_dks) }}" class="img-previewdks img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewdks img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_dks" name="gambar_dks" class="form-control @error('gambar_dks') is-invalid @enderror" value="{{ $data -> gambar_dks }}" onchange="previewImagedks()">
                @error('gambar_dks')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Advokasi</label>
                <input type="text" name = "nama_da" class="form-control @error('nama_da') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_da }}">
                @error('nama_da')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Advokasi</label>
                <input type="hidden" name="oldImageda" value="{{ $data -> gambar_da }}">
                @if ($data -> gambar_da)
                <img src="{{ asset('storage/'.$data -> gambar_da) }}" class="img-previewda img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewda img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_da" name="gambar_da" class="form-control @error('gambar_da') is-invalid @enderror" value="{{ $data -> gambar_da }}" onchange="previewImageda()">
                @error('gambar_da')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kepala Pusat Kajian Kebijakan Regional & Nasional</label>
                <input type="text" name = "nama_kkajian" class="form-control @error('nama_kkajian') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_kkajian }}">
                @error('nama_kkajian')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Kepala Pusat Kajian Kebijakan Regional & Nasional</label>
                <input type="hidden" name="oldImagekk" value="{{ $data -> gambar_kkajian }}">
                @if ($data -> gambar_kkajian)
                <img src="{{ asset('storage/'.$data -> gambar_kkajian) }}" class="img-previewkk img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewkk img-fluid mb-3 col-sm-5 ">
                @endif
                <input type="file" id="gambar_kkajian" name="gambar_kkajian" class="form-control @error('gambar_kkajian') is-invalid @enderror" value="{{ $data -> gambar_kkajian }}" onchange="previewImagekk()">
                @error('gambar_kkajian')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kepala Badan Aksi & Propaganda</label>
                <input type="text" name = "nama_kaksi" class="form-control @error('nama_kaksi') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_kaksi }}">
                @error('nama_kaksi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Kepala Badan Aksi & Propaganda</label>
                <input type="hidden" name="oldImageka" value="{{ $data -> gambar_kaksi }}">
                @if ($data -> gambar_kaksi)
                <img src="{{ asset('storage/'.$data -> gambar_kaksi) }}" class="img-previewka img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewka img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_kaksi" name="gambar_kaksi" class="form-control @error('gambar_kaksi') is-invalid @enderror" value="{{ $data -> gambar_kaksi }}" onchange="previewImageka()">
                @error('gambar_kaksi')
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

      function previewImagedks(){
        const gambar = document.querySelector('#gambar_dks');
        const imgPreview = document.querySelector('.img-previewdks');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImageda(){
        const gambar = document.querySelector('#gambar_da');
        const imgPreview = document.querySelector('.img-previewda');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagekk(){
        const gambar = document.querySelector('#gambar_kkajian');
        const imgPreview = document.querySelector('.img-previewkk');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImageka(){
        const gambar = document.querySelector('#gambar_kaksi');
        const imgPreview = document.querySelector('.img-previewka');

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
