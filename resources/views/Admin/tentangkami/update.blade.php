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
            <form action="/edittentangkami/1" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Presma</label>
                <input type="text" name = "nama_ketua" class="form-control @error('nama_ketua') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_ketua }}">
                @error('nama_ketua')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Presma</label>
                <input type="hidden" name="oldImagek" value="{{ $data -> gambar_ketua }}">
                @if ($data -> gambar_ketua)
                <img src="{{ asset('storage/'.$data -> gambar_ketua) }}" class="img-previewk img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewk img-fluid mb-3 col-sm-5 ">
                @endif
                <input type="file" id="gambar_ketua" name="gambar_ketua" class="form-control @error('gambar_ketua') is-invalid @enderror" value="{{ $data -> gambar_ketua }}" onchange="previewImagek()">
                @error('gambar_ketua')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Wakil Presma</label>
                <input type="text" name = "nama_wakil" class="form-control @error('nama_wakil') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_wakil }}">
                @error('nama_wakil')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Wakil Presma</label>
                <input type="hidden" name="oldImagew" value="{{ $data -> gambar_wakil }}">
                @if ($data -> gambar_wakil)
                <img src="{{ asset('storage/'.$data -> gambar_wakil) }}" class="img-previeww img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previeww img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_wakil" name="gambar_wakil" class="form-control @error('gambar_wakil') is-invalid @enderror" value="{{ $data -> gambar_wakil }}" onchange="previewImagew()">
                @error('gambar_wakil')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sekretaris</label>
                <input type="text" name = "nama_sekretaris" class="form-control @error('nama_sekretaris') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_sekretaris }}">
                @error('nama_sekretaris')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Sekretaris</label>
                <input type="hidden" name="oldImages" value="{{ $data -> gambar_sekretaris }}">
                @if ($data -> gambar_sekretaris)
                <img src="{{ asset('storage/'.$data -> gambar_sekretaris) }}" class="img-previews img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previews img-fluid mb-3 col-sm-5 ">
                @endif
                
                <input type="file" id="gambar_sekretaris" name="gambar_sekretaris" class="form-control @error('gambar_sekretaris') is-invalid @enderror" value="{{ $data -> gambar_sekretaris }}" onchange="previewImages()">
                @error('gambar_sekretaris')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bendahara</label>
                <input type="text" name = "nama_bendahara" class="form-control @error('nama_bendahara') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> nama_bendahara }}">
                @error('nama_bendahara')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar Bendahara</label>
                <input type="hidden" name="oldImageb" value="{{ $data -> gambar_bendahara }}">
                @if ($data -> gambar_bendahara)
                <img src="{{ asset('storage/'.$data -> gambar_bendahara) }}" class="img-previewb img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-previewb img-fluid mb-3 col-sm-5 ">
                @endif
                <input type="file" id="gambar_bendahara" name="gambar_bendahara" class="form-control @error('gambar_bendahara') is-invalid @enderror" value="{{ $data -> gambar_bendahara }}" onchange="previewImageb()">
                @error('gambar_bendahara')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Visi</label>
                <textarea class="form-control @error('visi') is-invalid @enderror" id="editor" name = "visi" rows="3" placeholder="Masukkan Isi Visi">{{ $data -> visi }}</textarea>
                @error('visi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Misi</label>
                <textarea class="form-control @error('misi') is-invalid @enderror" id="editor1" name = "misi" rows="3" placeholder="Masukkan Misi">{{ $data -> misi }}</textarea>
                @error('misi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Email</label>
                <input type="text" name = "email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> email }}">
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Instagram</label>
                <input type="text" name = "ig" class="form-control @error('ig') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> ig }}">
                @error('ig')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Youtube</label>
                <input type="text" name = "youtube" class="form-control @error('youtube') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> youtube }}">
                @error('youtube')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Facebook</label>
                <input type="text" name = "fb" class="form-control @error('fb') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> fb }}">
                @error('fb')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Twitter</label>
                <input type="text" name = "twitter" class="form-control @error('twitter') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> twitter }}">
                @error('twitter')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Line</label>
                <input type="text" name = "line" class="form-control @error('line') is-invalid @enderror" id="exampleInputEmail1" value="{{ $data -> line }}">
                @error('line')
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

      function previewImageb(){
        const gambar = document.querySelector('#gambar_bendahara');
        const imgPreview = document.querySelector('.img-previewb');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagek(){
        const gambar = document.querySelector('#gambar_ketua');
        const imgPreview = document.querySelector('.img-previewk');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImagew(){
        const gambar = document.querySelector('#gambar_wakil');
        const imgPreview = document.querySelector('.img-previeww');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

      function previewImages(){
        const gambar = document.querySelector('#gambar_sekretaris');
        const imgPreview = document.querySelector('.img-previews');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

    </script>

@endsection
