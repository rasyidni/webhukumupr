@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Berita</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End-->

<!-- About Us Section Start-->
<section class="about">
    <div class="container">
        <header class="section-header">
            <h3>Berita</h3>
        </header>

        <div class="row about-cols">
            @foreach($data1 as $item)
            <div class="col-md-4" style="margin-bottom: 40px;">
                <div class="about-col">
                    <div class="img">
                        <img src="{{ asset('storage/' . $item -> gambar) }}" alt="gambar" class="img-fluid">
                    </div>
                    <h2 class="title"><a href="/tampilandetailberita/{{ $item->id }}">{{ $item ->  judul}}</a></h2>
                        {!! Str::limit($item -> isi, 100) !!}
                    <div class="read-more">
                        <a href="/tampilandetailberita/{{ $item->id }}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </br>
        <div style="padding: 0 15px 0;">
        {{ $data1->links() }}
        </div>
    </div>
</section>
<!-- About Us Section End -->

@endsection