@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    
                    <a >Halaman </a>
                    <a >Kementerian Koordinator Politik dan Hukum</a>
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
            <h3 class="section-title">Kementerian Koordinator Politik dan Hukum</h3>
        </header>
        <br>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_menteri) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_menteri }}</span> <br> <span class="card-text">Menteri Koordinator</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br/>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_dhukum) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_dhukum }}</span> <br> <span class="card-text">Direktur Jenderal Hukum</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_dpolitik) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_dpolitik }}</span> <br> <span class="card-text">Direktur Jenderal Politik dan Hubungan Antar Partai Politik</span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    <br/>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_staff1) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1 -> nama_staff1 }}</span> <span class="card-text">Staff Kementerian</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_staff2) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_staff2 }}</span> <span class="card-text">Staff Kementerian</span> 
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_staff3) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_staff3 }}</span> <span class="card-text">Staff Kementerian</span>
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
            {!! $data1 ->fokus_utama !!}
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
            {!! $data1 ->proker !!}
        </div>
</div>
</div>
</section>
<!-- About Us Section End -->
@endsection