@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Detail Kajian</a>
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
                    <h4 style="font-weight: bold;">{{ $data1 -> judul }}</h4>
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
                <br/>
                
                @if(!empty($data1 -> file))
                <div class="d-flex justify-content-center">
                    {{-- <iframe src="{{ 'storage' . $data1 -> file }}" width="1500" height="800"  frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe> --}}
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class="embed-responsive-item" src="{{ asset('storage/'.$data1 -> file) }}" allowfullscreen></iframe>
                    </div>
                </div>
                @else
                <div class="d-flex justify-content-center">
                    <div class="text-justify"> Terdapat kesalahan pada saat memuat file</div>
                </div>
                @endif
        
            </div>
        </section>
        <!-- Contact Section End -->

@endsection