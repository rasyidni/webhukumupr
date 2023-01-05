@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Detail Pendaftaran Webinar</a>
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
                    <h3>{{ $data1 -> judul }}</h3>
                </header>
                </br>
                @if(preg_match("/https:\/\//i", $data1 -> link_gform) && !empty($data1 -> link_gform))
                <div class="d-flex justify-content-center">
                    <iframe src="{{ $data1 -> link_gform }}" width="1500" height="800"  frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                </div>
                @else
                <div class="d-flex justify-content-center">
                    <div class="text-justify"> Terdapat kesalahan pada link formulir</div>
                </div>
                @endif
        
            </div>
        </section>
        <!-- Contact Section End -->

@endsection