
@extends('layout.pengunjung')

@section('content')

        <!-- Slider Section Start-->
        <section class="slider">
            <div class="slider-container">
                <div id="carousel" class="carousel  slide carousel-fade" data-ride="carousel">

                    <ol class="carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <div class="carousel-background"><img src="{{ asset('slider2.jpg') }}" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Selamat Datang di <br/>Website BEM Fakultas Hukum <br/>Universitas Palangka Raya</h2>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-background"><img src="{{ asset('slider1.jpg') }}" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Selamat Datang di <br/>Website BEM Fakultas Hukum <br/>Universitas Palangka Raya</h2>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-background"><img src="{{ asset('slider3.jpg') }}" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Selamat Datang di <br/>Website BEM Fakultas Hukum <br/>Universitas Palangka Raya</h2>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon ion-md-arrow-back" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon ion-md-arrow-forward" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </section>
        <!-- Slider Section End-->

        <!-- About Us Section Start-->
<section class="about">
    <div class="container">
        <header class="section-header">
            <h3>Berita Terbaru</h3>
        </header>

        <div class="row about-cols">
            @foreach($berita as $item)
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
    </div>
</section>
<!-- About Us Section End -->

<!-- About Us Section Start-->
<section class="about">
    <div class="container">
        <header class="section-header">
            <h3>Kajian Terbaru</h3>
        </header>

        <div class="row about-cols">
            @foreach($kajian as $item)
            <div class="col-md-4" style="margin-bottom: 40px;">
                <div class="about-col">
                    <div class="img">
                        <img src="{{ asset('storage/' . $item -> gambar) }}" alt="gambar" class="img-fluid">
                    </div>
                    <h2 class="title"><a href="/tampilandetailkajian/{{ $item -> id }}">{{ $item ->  judul}}</a></h2>
                        {!! Str::limit($item -> isi, 100) !!}
                    <div class="read-more">
                        <a href="/tampilandetailkajian/{{ $item -> id }}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- About Us Section End -->

@endsection

        
