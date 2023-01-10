@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Detail Berita</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End-->

        <!-- Contact Section Start -->
        <section class="service">
            <div class="container" style="padding: 3.5% 3% 3.5%;">
                <header class="text-start">
                    <h4 style="font-weight: bold;">{{ $data1 -> judul. "wow itu sangat banyak sekali yang protes" }}</h4>
                </header>
                <p class="text-muted" style="font-size: 14px;">Diperbarui pada {{ $data1 -> updated_at ->isoFormat('dddd, D MMMM Y HH:mm') }} WIB</p>

                <br/>

                <div class="row justify-content-center">
                    <div class="col">
                        <div class="text-center">
                        <img src="{{ asset('storage/'.$data1->gambar) }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                <br/>
                <br/>

                <div class="text-justify">
                    {!! $data1->isi !!}
                </div>
        
            </div>
        </section>
        <!-- Contact Section End -->

@endsection