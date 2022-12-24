@extends('layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Halaman Kementerian Komunikasi, Media, dan Informasi</h1>
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
            <div class="col-md-3">
                  <div class="card" style="border-radius: 15px; height: 18rem;">
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/'. $data->gambar_menteri) }}"
                        class="rounded-circle img-fluid" style="width: 200px;" />
                    </br>
                    </br>
                      <h6 class="mb-2">Menteri</h6>
                      <p class="text-muted mb-4">{{ $data->nama_menteri }}</p>
                    </div>
                  </div>
            </div>

            <div class="col-md-3">
              <div class="card" style="border-radius: 15px; height: 18rem; ">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/'. $data->gambar_dmedia) }}"
                      class="rounded-circle img-fluid" style="width: 200px;" />
                    </br>
                    </br>
                  <h6 class="mb-2">Direktur Jenderal Media</h6>
                  <p class="text-muted mb-4">{{ $data->nama_dmedia }}</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card" style="border-radius: 15px; height: 18rem;">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/'. $data->gambar_dhubungan) }}"
                      class="rounded-circle img-fluid" style="width: 200px;" />
                    </br>
                    </br>
                  <h6 class="mb-2">Direktur Jenderal Hubungan Masyarakat</h6>
                  <p class="text-muted mb-4">{{ $data->nama_dhubungan }}</p>
                </div>
              </div>
            </div>
          </div>
            
          <div class="row d-flex justify-content-center align-items-center h-100 gx-5 p-3">
            <div class="col-md-3">
                  <div class="card" style="border-radius: 15px; height: 18rem; ">
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/'. $data-> gambar_ddokumentasi) }}"
                        class="rounded-circle img-fluid" style="width: 200px;" />
                      </br>
                      </br>
                      <h6 class="mb-2">Direktur Jenderal Dokumentasi</h6>
                      <p class="text-muted mb-4">{{ $data->nama_ddokumentasi }}</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="border-radius: 15px; height: 18rem; ">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/'. $data->gambar_djurnalistik) }}"
                    class="rounded-circle img-fluid" style="width: 200px;" />
                  </br>
                  </br>
                  <h6 class="mb-2">Direktur Jenderal Jurnalistik</h6>
                  <p class="text-muted mb-4">{{ $data->nama_djurnalistik }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row d-flex justify-content-center align-items-center h-100 gx-5 p-3">
            <div class="col-md-3">
                  <div class="card" style="border-radius: 15px; height: 18rem; ">
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/'. $data-> gambar_staff1) }}"
                        class="rounded-circle img-fluid" style="width: 200px;" />
                      </br>
                      </br>
                      <h6 class="mb-2">Staff Kementerian</h6>
                      <p class="text-muted mb-4">{{ $data->nama_staff1 }}</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="border-radius: 15px; height: 18rem; ">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/'. $data->gambar_staff2) }}"
                    class="rounded-circle img-fluid" style="width: 200px;" />
                  </br>
                  </br>
                  <h6 class="mb-2">Staff Kementerian</h6>
                  <p class="text-muted mb-4">{{ $data->nama_staff2 }}</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="border-radius: 15px; height: 18rem; ">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/'. $data->gambar_staff3) }}"
                    class="rounded-circle img-fluid" style="width: 200px;" />
                  </br>
                  </br>
                  <h6 class="mb-2">Staff Kementerian</h6>
                  <p class="text-muted mb-4">{{ $data->nama_staff3 }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row d-flex justify-content-center align-items-center h-100 gx-5 p-3">
            <div class="col-10 text-center">
              <h5 class="mb-2">Fokus Utama</h5>
              <div class="text-justify">
                {!! $data->fokus_utama !!}
              </div>
            </div>
          </div>

          <div class="row d-flex justify-content-center align-items-center h-100 gx-5 p-3">
            <div class="col-10 text-center">
              <h5 class="mb-2">Program Kerja</h5>
              <div class="text-justify">
              {!! $data->proker !!}
              </div>
            </div>
          </div>

        </div>
        <div class="card-footer">
          <a href="tampilkankkomunikasi/1" type="button" class="btn btn-primary float-left"><i ></i>Edit Data</a>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
