@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Grand Design</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End-->

<!-- Portfolio Section Start -->
<section class="portfolio">
    <div class="container">

        <header class="section-header">
            <h3 class="section-title">Grand Design</h3>
            <p>
            </p>
        </header>

        <div class="row portfolio-container">
            @foreach ($data1 as $item)
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('storage/'. $item -> gambar) }}" class="img-fluid" alt="Portfolio">
                        <a href="{{ asset('storage/'. $item -> gambar) }}" data-lightbox="portfolio" class="link-preview" title="Preview"><i class="ion-md-eye"></i></a>
                        <a href="{{ $item -> link_gdrive }}" class="link-details" title="More Details"><i class="ion-md-open"></i></a>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
        </br>
        </br>
        <div class="pagination">
        {{ $data1->links() }}
        </div>
    </div>
</section>
<!-- Portfolio Section End -->

@endsection