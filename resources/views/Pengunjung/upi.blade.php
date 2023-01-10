@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Unit Penerangan Internal</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End-->


<!-- Team Section Start -->
<section class="team">
    <div class="container">
        <header class="section-header">
            <h3 class="section-title">Unit Penerangan Internal</h3>
        </header>
        <br>

        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1->gambar_kepala) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_kepala }}</span> <span class="card-text">Kepala UPI</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    <br/>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1->gambar_anggota1) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_anggota1 }}</span> <span class="card-text">Anggota UPI</span>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1->gambar_anggota2) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_anggota2 }}</span> <span class="card-text">Anggota UPI</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- About Us Section Start-->
<section class="about">
    <div class="container" style="padding: 0 15% 0;">
        <header class="section-header">
            <h3>Keterangan</h3>
            
        </header>
        <div class="text-justify">
             {!! $data1->penjelasan !!}
        </div>

    </div>
</section>
<!-- About Us Section End -->

<!-- About Us Section Start-->
<section class="team">
    <div class="container" style="padding: 0 15% 0;">
        <header class="section-header">
            <h3>Program Kerja</h3>
            
        </header>
        <div class="text-justify">
            {!! $data1->proker !!}
        </div>
</div>
</div>
</section>
<!-- About Us Section End -->
@endsection