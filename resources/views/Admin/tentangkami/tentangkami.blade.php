@extends('layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Tentang Kami</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <div class="content">
    <div class="container-fluid">
      <div class="card">
          @if ($message = Session::get('sukses'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                {{ $message }}
              </div>
              {{ Session::forget('sukses') }}
          @endif
        <div class="card-body p-5">
          <div class="row d-flex justify-content-center align-items-center h-100 gx-5 p-3">
            <div class="col">
                  <div class="card" style="border-radius: 15px;">
                    <div class="card-body text-center">
                        <img src="{{ asset('storage\berita\foto.jpeg') }}"
                        class="rounded-circle img-fluid" style="width: 200px;" />
                      <h6 class="mb-2">Presma</h6>
                      <p class="text-muted mb-4">@Programmer</p>
                    </div>
                  </div>
            </div>
            <div class="col">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body text-center">
                    <img src="{{ asset('storage\berita\foto.jpeg') }}"
                      class="rounded-circle img-fluid" style="width: 200px;" />
                  <h6 class="mb-2">Wapresma</h6>
                  <p class="text-muted mb-4">@Programmer</p>
                </div>
              </div>
            </div>
            <div class="col">
                  <div class="card" style="border-radius: 15px;">
                    <div class="card-body text-center">
                        <img src="{{ asset('storage\berita\foto.jpeg') }}"
                        class="rounded-circle img-fluid" style="width: 200px;" />
                      <h6 class="mb-2">Sekretaris</h6>
                      <p class="text-muted mb-4">@Programmer</p>
                    </div>
                  </div>
            </div>
            <div class="col">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body text-center">
                    <img src="{{ asset('storage\berita\foto.jpeg') }}"
                      class="rounded-circle img-fluid" style="width: 200px;" />
                  <h6 class="mb-2">Bendahara</h6>
                  <p class="text-muted mb-4">@Programmer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row d-flex justify-content-center align-items-center h-100 gx-5 p-3">
            <div class="col text-center">
              <h5 class="mb-2">Visi</h5>
              <p>
                Teks
              </p>
            </div>
          </div>

          <div class="row d-flex justify-content-center align-items-center h-100 gx-5 p-3">
            <div class="col text-center">
              <h5 class="mb-2">Misi</h5>
              <p>
                Teks
              </p>
            </div>
          </div>

          <div class="row d-flex justify-content-center align-items-center h-100 gx-5 p-3">
            <div class="col text-center">
              <h6 class="mb-2">Email</h6>
              <p>
                Teks
              </p>
            </div>
            <div class="col text-center">
              <h6 class="mb-2">Instagram</h6>
              <p>
                Teks
              </p>
            </div>
            <div class="col text-center">
              <h6 class="mb-2">Youtube</h6>
              <p>
                Teks
              </p>
            </div>
          </div>

          <div class="row d-flex justify-content-center align-items-center h-100 gx-5 p-3">
            <div class="col text-center">
              <h6 class="mb-2">Facebook</h6>
              <p>
                Teks
              </p>
            </div>
            <div class="col text-center">
              <h6 class="mb-2">Twitter</h6>
              <p>
                Teks
              </p>
            </div>
            <div class="col text-center">
              <h6 class="mb-2">Line</h6>
              <p>
                Teks
              </p>
            </div>
          </div>

        </div>
        <div class="card-footer">
          <a href="kegiatan.php" type="button" class="btn btn-primary float-left"><i ></i>Edit Tentang Kami</a>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection