<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BEM Fakultas Hukum UPR</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="{{ asset('logofhupr.png') }}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300|Nunito:400,700&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="{{ asset('templatep/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('templatep/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('templatep/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet') }}">
        <link href="{{ asset('templatep/vendor/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Main Stylesheet -->
        <link href="{{ asset('templatep/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Header Section Start -->
        <header class="header">
            <div class="container-fluid">
                <div class="logo pull-left">
                    <a href="#" style="font-size: 20px; font-style:bold;"><img src="{{ asset('logofhupr.png') }}" class="responsive" alt="" title="" />BEM FH UPR</a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu ">
                        <li class=""><a href="/">Beranda</a></li>
                        <li><a href="/tampilantentangkami">Tentang Kami</a></li>
                        <li class="menu-has-children"><a href="">Profil <i class="dicon ion-md-arrow-dropdown"></i></a>
                            <ul>
                                <li><a href="/tampilanupi">Unit Penerangan Internal</a></li>
                                <li><a href="/tampilankkslh">Kementerian Koordinator Sosial dan Lingkungan Hidup</a></li>
                                <li><a href="/tampilankkph">Kementerian Koordinator Politik dan Hukum</a></li>
                                <li><a href="/tampilankdn">Kementerian Dalam Negeri</a></li>
                                <li><a href="/tampilankln">Kementerian Luar Negeri</a></li>
                                <li><a href="/tampilankpsdm">Kementerian Pengembangan Sumber Daya Mahasiswa</a></li>
                                <li><a href="/tampilanka">Kementerian Agama</a></li>
                                <li><a href="/tampilankpo">Kementerian Pemuda dan Olahraga</a></li>
                                <li><a href="/tampilankkmi">Kementerian Komunikasi, Media, dan Informasi</a></li>
                                <li><a href="/tampilankksa">Kementerian Kajian Strategis dan Advokasi</a></li>
                                <li><a href="/tampilankk">Kementerian Kewirausahaan</a></li>
                                <li><a href="/tampilanks">Kementerian Sekretariat</a></li>
                                <li><a href="/tampilankpp">Kementerian Pemberdayaan Perempuan</a></li>
                            </ul>
                        </li>
                        <li><a href="/tampilanukm">UKM</a></li>
                        <li><a href="/tampilandonasi">Donasi</a></li>
                        <li><a href="/tampilangranddesign">Grand Design</a></li>
                        <li><a href="/tampilanwebinar">Webinar</a></li>
                        <li><a href="/tampilanregulasi">Regulasi</a></li>
                        <li class="menu-has-children"><a href="#">Publikasi <i class="dicon ion-md-arrow-dropdown"></i></a>
                            <ul>
                                <li><a href="/tampilankajian">Kajian</a></li>
                                <li><a href="/tampilanberita">Berita</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Header Section End -->

        @yield('content')

        <!-- Footer Start -->
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row d-flex justify-content-center">

                        <div class="col-md-4 footer-info ">
                            <h3>BEM FH UPR</h3>
                            <p>
                                Kampus Tunjung Nyaho,<br>
                                Universitas Palangka Raya,<br>
                                Kota Palangka Raya, Kalimantan Tengah.<br>
                            </p>
                        </div>

                        <div class="col-md-3 footer-info">
                        </div>

                        <div class="col-md-4 footer-contact">
                            <h4>Hubungi Kami</h4>
                            <div class="social-links">
                                <p>
                                    <strong>Email :</strong> {{ $data->email }}<br>
                                    <strong>Line :</strong> {{ $data->line }}<br>
                                </p>
                                <a href="{{ $data->twitter }}"><i class="ion-logo-twitter"></i></a>
                                <a href="{{ $data->fb }}"><i class="ion-logo-facebook"></i></a>
                                <a href="{{ $data->ig }}"><i class="ion-logo-instagram"></i></a>
                                <a href="{{ $data->youtube }}"><i class="ion-logo-youtube"></i></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright BEM FH UPR
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="ion-md-arrow-dropup"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('templatep/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('templatep/vendor/jquery/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('templatep/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('templatep/vendor/easing/easing.min.js') }}"></script>
        <script src="{{ asset('templatep/vendor/superfish/hoverIntent.js') }}"></script>
        <script src="{{ asset('templatep/vendor/superfish/superfish.min.js') }}"></script>
        <script src="{{ asset('templatep/vendor/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('templatep/vendor/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
        <script src="{{ asset('templatep/vendor/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('templatep/vendor/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('templatep/vendor/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('templatep/vendor/lightbox/js/lightbox.min.js') }}"></script>

        <!-- Main Javascript File -->
        <script src="{{ asset('templatep/js/main.js') }}"></script>

    </body>
</html>