
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
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-background"><img src="{{ asset('slider1.jpg') }}" alt=""></div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-background"><img src="{{ asset('slider3.jpg') }}" alt=""></div>
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
                    <h3>About Us</h3>
                    <p>
                        Maecenas vel turpis quis lorem aliquam tempus quis non mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                </header>

                <div class="row about-cols">
                    <div class="col-md-4">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-disc"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Mission</a></h2>
                            <p>
                                Aenean volutpat, dolor eu finibus rhoncus, elit felis vehicula nunc, ut pulvinar ex diam nec lacus. Phasellus sit amet rhoncus turpis. Aenean tincidunt auctor purus, ac sodales sapien sagittis
                            </p>
                            <div class="read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Vision</a></h2>
                            <p>
                                Aenean volutpat, dolor eu finibus rhoncus, elit felis vehicula nunc, ut pulvinar ex diam nec lacus. Phasellus sit amet rhoncus turpis. Aenean tincidunt auctor purus, ac sodales sapien sagittis
                            </p>
                            <div class="read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-objective.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-options"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Objective</a></h2>
                            <p>
                                Aenean volutpat, dolor eu finibus rhoncus, elit felis vehicula nunc, ut pulvinar ex diam nec lacus. Phasellus sit amet rhoncus turpis. Aenean tincidunt auctor purus, ac sodales sapien sagittis
                            </p>
                            <div class="read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section End -->
@endsection

        
