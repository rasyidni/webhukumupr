@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Kementerian Kajian Strategis dan Advokasi</a>
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
            <h3 class="section-title">Kementerian Kajian Strategis dan Advokasi</h3>
        </header>

        </br>

        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_dks) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_dks }}</span> <span class="card-text">Direktur Jenderal Kajian Strategis</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_menteri) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1 -> nama_menteri }}</span> <span class="card-text">Menteri</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_da) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_da }}</span> <span class="card-text">Direktur Jenderal Advokasi</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        </br>

        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_kkajian) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_kkajian }}</span> <span class="card-text">Kepala Pusat Kajian Kebijakan Regional & Nasional</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_kaksi) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data1->nama_kaksi }}</span> <span class="card-text">Kepala Badan Aksi & Propaganda</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('storage/'. $data1 -> gambar_staff) }}">
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