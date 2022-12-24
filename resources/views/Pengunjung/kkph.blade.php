@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    
                    <a href="#">Halaman </a>
                    <a href="#">Kementerian Koordinator Politik dan Hukum</a>
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
                    <a href="#"><img alt="" class="team-img" src="{{ asset('foto.jpeg') }}">
                        <div class="card-title-wrap">
                            <span class="card-title">David R. Bernard</span> <br> <span class="card-text">Direktur Jenderal Hukum</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('foto.jpeg') }}">
                        <div class="card-title-wrap">
                            <span class="card-title">David R. Bernard</span> <br> <span class="card-text">Menteri Koordinator</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('foto.jpeg') }}">
                        <div class="card-title-wrap">
                            <span class="card-title">David R. Bernard</span> <span class="card-text">Direktur Jenderal Politik dan Hubungan Antar Partai Politik</span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </br>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('foto.jpeg') }}">
                        <div class="card-title-wrap">
                            <span class="card-title">John P. Haight</span> <span class="card-text">Staff Kementerian Koordinator Politik dan Hukum</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('foto.jpeg') }}">
                        <div class="card-title-wrap">
                            <span class="card-title">David R. Bernard</span> <span class="card-text">Staff Kementerian Koordinator Politik dan Hukum</span> 
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <a href="#"><img alt="" class="team-img" src="{{ asset('foto.jpeg') }}">
                        <div class="card-title-wrap">
                            <span class="card-title">Dana A. Thomas</span> <span class="card-text">Staff Kementerian Koordinator Politik dan Hukum</span>
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
    <div class="container text-justify" style="padding: 0 15% 0;">
        <header class="section-header">
            <h3>Fokus Utama</h3>
        </header>
        <p>
             Maecenas vel turpis quis lorem aliquam tempus quis non mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        </p>

    </div>
</section>
<!-- About Us Section End -->

<!-- About Us Section Start-->
<section class="team">
    <div class="container text-justify" style="padding: 0 15% 0;">
        <header class="section-header">
            <h3>Program Kerja</h3>
            
        </header>
        <p  >
            list.count(x)
            Kembalikan berapa kali x muncul dalam daftar.
            list.sort(*, key=None, reverse=False)
        </p>
        <p>
            list.count(x)
            Kembalikan berapa kali x muncul dalam daftar.
            list.sort(*, key=None, reverse=False)
        </p>
        <p>
            list.count(x)
            list.sort(*, key=None, reverse=False)
        </p>
</div>
</div>
</section>
<!-- About Us Section End -->
@endsection