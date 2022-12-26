@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Unit Kegiatan Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End-->

<!-- Services Section Start -->
        <section id="services" class="services">
            <div class="container">
                <header class="section-header">
                    <h3>Unit Kegiatan Mahasiswa</h3>
                </header>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <img src="{{ asset('logofhupr.png') }}" width="45%">
                            <h4><a href="">Web Design</a></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <img src="{{ asset('logofhupr.png') }}" width="45%">
                            <h4><a href="">Web Development</a></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <img src="{{ asset('logofhupr.png') }}" width="45%">
                            <h4><a href="">App Design</a></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <img src="{{ asset('logofhupr.png') }}" width="45%">
                            <h4><a href="">App Development</a></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <img src="{{ asset('logofhupr.png') }}" width="45%">
                            <h4><a href="">Web Design</a></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <img src="{{ asset('logofhupr.png') }}" width="45%">
                            <h4><a href="">Web Development</a></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <img src="{{ asset('logofhupr.png') }}" width="45%">
                            <h4><a href="">App Design</a></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <img src="{{ asset('logofhupr.png') }}" width="45%">
                            <h4><a href="">App Development</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->

@endsection