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
            <form action="/editkkomunikasi/1" method="POST" enctype="multipart/form-data">
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
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Media</label>
                <input type="text" name = "nama_dmedia" class="form-control @error('nama_dmedia') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_dmedia }}">
                @error('nama_dmedia')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Media</label>
                <input type="hidden" name="oldImagedm" value="{{ $data -> gambar_dmedia }}">
                @if ($data -> gambar_dmedia)
                <img src="{{ asset('storage/'.$data -> gambar_dmedia) }}" class="img-previewdm img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewdm img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_dmedia" name="gambar_dmedia" class="form-control @error('gambar_dmedia') is-invalid @enderror" value="{{ $data -> gambar_dmedia }}" onchange="previewImagedm()">
                @error('gambar_dmedia')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Hubungan Masyarakat</label>
                <input type="text" name = "nama_dhubungan" class="form-control @error('nama_dhubungan') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_dhubungan }}">
                @error('nama_dhubungan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Hubungan Masyarakat</label>
                <input type="hidden" name="oldImagedh" value="{{ $data -> gambar_dhubungan }}">
                @if ($data -> gambar_dhubungan)
                <img src="{{ asset('storage/'.$data -> gambar_dhubungan) }}" class="img-previewdh img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewdh img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_dhubungan" name="gambar_dhubungan" class="form-control @error('gambar_dhubungan') is-invalid @enderror" value="{{ $data -> gambar_dhubungan }}" onchange="previewImagedh()">
                @error('gambar_dhubungan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Dokumentasi</label>
                <input type="text" name = "nama_ddokumentasi" class="form-control @error('nama_ddokumentasi') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_ddokumentasi }}">
                @error('nama_ddokumentasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Dokumentasi</label>
                <input type="hidden" name="oldImagedd" value="{{ $data -> gambar_ddokumentasi }}">
                @if ($data -> gambar_ddokumentasi)
                <img src="{{ asset('storage/'.$data -> gambar_ddokumentasi) }}" class="img-previewdd img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewdd img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_ddokumentasi" name="gambar_ddokumentasi" class="form-control @error('gambar_ddokumentasi') is-invalid @enderror" value="{{ $data -> gambar_ddokumentasi }}" onchange="previewImagedd()">
                @error('gambar_ddokumentasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Direktur Jenderal Jurnalistik</label>
                <input type="text" name = "nama_djurnalistik" class="form-control @error('nama_djurnalistik') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_djurnalistik }}">
                @error('nama_djurnalistik')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Direktur Jenderal Jurnalistik</label>
                <input type="hidden" name="oldImagedj" value="{{ $data -> gambar_djurnalistik }}">
                @if ($data -> gambar_djurnalistik)
                <img src="{{ asset('storage/'.$data -> gambar_djurnalistik) }}" class="img-previewdj img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewdj img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_djurnalistik" name="gambar_djurnalistik" class="form-control @error('gambar_djurnalistik') is-invalid @enderror" value="{{ $data -> gambar_djurnalistik }}" onchange="previewImagedj()">
                @error('gambar_djurnalistik')
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
                <label for="exampleInputEmail1" class="form-label">Nama Staff Kementerian</label>
                <input type="text" name = "nama_staff3" class="form-control @error('nama_staff3') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_staff3 }}">
                @error('nama_staff3')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Staff Kementerian</label>
                <input type="hidden" name="oldImagest3" value="{{ $data -> gambar_staff3 }}">
                @if ($data -> gambar_staff3)
                <img src="{{ asset('storage/'.$data -> gambar_staff3) }}" class="img-previewst3 img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewst3 img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_staff3" name="gambar_staff3" class="form-control @error('gambar_staff3') is-invalid @enderror" value="{{ $data -> gambar_staff3 }}" onchange="previewImagest3()">
                @error('gambar_staff3')
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

      function previewImagedm(){
        const gambar = document.querySelector('#gambar_dmedia');
        const imgPreview = document.querySelector('.img-previewdm');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagedh(){
        const gambar = document.querySelector('#gambar_dhubungan');
        const imgPreview = document.querySelector('.img-previewdh');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagedd(){
        const gambar = document.querySelector('#gambar_ddokumentasi');
        const imgPreview = document.querySelector('.img-previewdd');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagedj(){
        const gambar = document.querySelector('#gambar_djurnalistik');
        const imgPreview = document.querySelector('.img-previewdj');

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

      function previewImagest3(){
        const gambar = document.querySelector('#gambar_staff3');
        const imgPreview = document.querySelector('.img-previewst3');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

    </script>

@endsection
