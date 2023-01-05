@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Donasi</a>
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
            <h3>Donasi</h3>
        </header>

        <div class="row about-cols">
            @foreach ($data1 as $item)
            <div class="col-md-4" style="padding-bottom: 20px;">
                <div class="about-col">
                    <h2 class="title"><a href="/tampilandetaildonasi/{{ $item -> id }}">{{ $item -> nama_donasi }}</a></h2>
                    <div class="read-more">
                        <a href="/tampilandetaildonasi/{{ $item -> id }}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        </br>
        <div class="pagination">
            {{ $data1->links() }}
        </div>
    </div>

</section>
<!-- About Us Section End -->

@endsection

        
