@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Tentang Kami</a>
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
            <h3 class="section-title">Tentang Kami</h3>
        </header>
        <br>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/' .$data->gambar_ketua) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data->nama_ketua }}</span> <span class="card-text">Presma</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data->gambar_wakil) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data->nama_wakil }}</span> <span class="card-text">Wakil Presma</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br/>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data->gambar_sekretaris) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data->nama_sekretaris }}</span> <span class="card-text">Sekretaris</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'. $data->gambar_bendahara) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data->nama_bendahara }}</span> <span class="card-text">Bendahara</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br/>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/'.$data->gambar_staffs) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data->nama_staffs }}</span> <span class="card-text">Staff Sekretaris</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;">
                <div class="card card-block">
                    <a><img alt="" class="team-img" src="{{ asset('storage/' . $data->gambar_staffb) }}">
                        <div class="card-title-wrap">
                            <span class="card-title">{{ $data->nama_staffb }}</span> <span class="card-text">Staff Bendahara</span>
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
    <div class="container" style="padding: 0 15% 0;">
        <header class="section-header">
            <h3>Visi</h3>
            
        </header>
        <div class="text-justify">
             {!! $data->visi !!}
        </div>

    </div>
</section>
<!-- About Us Section End -->

<!-- About Us Section Start-->
<section class="team">
    <div class="container" style="padding: 0 15% 0;">
        <header class="section-header">
            <h3>Misi</h3>
        </header>
        <div class="text-justify">
            {!! $data->misi !!}
        </div>
</div>
</div>
</section>
<!-- About Us Section End -->
@endsection