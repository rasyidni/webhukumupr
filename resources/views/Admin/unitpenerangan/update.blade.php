@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Unit Penerangan Internal</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="/editunitpenerangan/1" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kepala UPI</label>
                <input type="text" name = "nama_kepala" class="form-control @error('nama_kepala') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_kepala }}">
                @error('nama_kepala')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Kepala UPI</label>
                <input type="hidden" name="oldImagek" value="{{ $data -> gambar_kepala }}">
                @if ($data -> gambar_kepala)
                <img src="{{ asset('storage/'.$data -> gambar_kepala) }}" class="img-previewk img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewk img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_kepala" name="gambar_kepala" class="form-control @error('gambar_kepala') is-invalid @enderror" value="{{ $data -> gambar_kepala }}" onchange="previewImagek()">
                @error('gambar_kepala')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Anggota UPI</label>
                <input type="text" name = "nama_anggota1" class="form-control @error('nama_anggota1') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_anggota1 }}">
                @error('nama_anggota1')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Anggota UPI</label>
                <input type="hidden" name="oldImagea1" value="{{ $data -> gambar_anggota1 }}">
                @if ($data -> gambar_anggota1)
                <img src="{{ asset('storage/'.$data -> gambar_anggota1) }}" class="img-previewa1 img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewa1 img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_anggota1" name="gambar_anggota1" class="form-control @error('gambar_anggota1') is-invalid @enderror" value="{{ $data -> gambar_anggota1 }}" onchange="previewImagea1()">
                @error('gambar_anggota1')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Anggota UPI</label>
                <input type="text" name = "nama_anggota2" class="form-control @error('nama_anggota2') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_anggota2 }}">
                @error('nama_anggota2')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Anggota UPI</label>
                <input type="hidden" name="oldImagea2" value="{{ $data -> gambar_anggota2 }}">
                @if ($data -> gambar_anggota2)
                <img src="{{ asset('storage/'.$data -> gambar_anggota2) }}" class="img-previewa2 img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewa2 img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_anggota2" name="gambar_anggota2" class="form-control @error('gambar_anggota2') is-invalid @enderror" value="{{ $data -> gambar_anggota2 }}" onchange="previewImagea2()">
                @error('gambar_anggota2')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                <textarea class="form-control @error('penjelasan') is-invalid @enderror" id="editor" name = "penjelasan" rows="3" placeholder="Masukkan Isi Penjelasan">{{ $data -> penjelasan }}</textarea>
                @error('penjelasan')
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

      function previewImagek(){
        const gambar = document.querySelector('#gambar_kepala');
        const imgPreview = document.querySelector('.img-previewk');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagea1(){
        const gambar = document.querySelector('#gambar_anggota1');
        const imgPreview = document.querySelector('.img-previewa1');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagea2(){
        const gambar = document.querySelector('#gambar_anggota2');
        const imgPreview = document.querySelector('.img-previewa2');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

    </script>

@endsection
