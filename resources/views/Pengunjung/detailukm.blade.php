@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Detail UKM</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End-->

        <!-- Contact Section Start -->
        <section class="service">
            <div class="container" style="padding: 3.5% 12% 3.5%;">
                <header class="section-header">
                    <h3>{{ $data1 -> nama }}</h3>
                </header>
                <div class="text-justify">
                     {!! $data1->keterangan !!}
                </div>
        
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Sosial Media</h3>
                </div>

                <br>
                <br>

                <div class="row contact-info">
                    <div class="col-md-3">
                        <div class="contact-phone">
                            <i class="ion-logo-facebook"></i>
                            <h3>Facebook</h3>
                            <p><a href="{{ $data1 -> fb }}">{{ $data1 -> fb }}</a></p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="contact-phone">
                            <i class="ion-logo-instagram"></i>
                            <h3>Instagram</h3>
                            <p><a href="{{ $data1 -> ig }}">{{ $data1 -> ig }}</a></p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="contact-email">
                            <i class="ion-logo-whatsapp"></i>
                            <h3>WhatsApp</h3>
                            <address>{{ $data1 -> wa }}</address>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="contact-email">
                            <i class="ion-logo-youtube"></i>
                            <h3>Youtube</h3>
                            <p><a href="{{ $data1 -> youtube }}">{{ $data1 -> youtube }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

@endsection