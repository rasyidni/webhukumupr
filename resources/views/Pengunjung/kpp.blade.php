@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a>Halaman </a>
                    <a>Kementerian Pemberdayaan Perempuan</a>
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
            <h3 class="section-title">Kementerian Pemberdayaan Perempuan</h3>
        </header>
        <br>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_menteri) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_menteri }}</span> <span class="card-text">Menteri</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_dkip) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_dkip }}</span> <span class="card-text">Direktur Jenderal Kajian Isu Perempuan</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_dpp) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_dpp }}</span> <span class="card-text">Direktur Jenderal Perlindungan Perempuan</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_staff) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_staff }}</span> <span class="card-text">Staff Kementerian</span>
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
            <h3>Fokus Utama</h3>
            
        </header>
        <div class="text-justify">
            {!! $data1->fokus_utama !!}
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