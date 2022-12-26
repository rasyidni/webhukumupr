@extends('layout.pengunjung')

@section('content')

<!-- Banner Section Start-->
<section class="banner">
    <div class="container">
        <div class="col-lg-12">
            <div class="banner-nav">
                <div class="banner-box">
                    <a href="#">Halaman </a>
                    <a href="#">Detail UKM</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End-->

        <!-- Contact Section Start -->
        <section class="contact">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Contact Us</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper pharetra ligula nec hendrerit. Ut eu libero nec magna placerat fringilla.
                    </p>
                </div>

                <div class="row contact-info">
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-md-pin"></i>
                            <h3>Address</h3>
                            <address>Your Location, City, Country</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-md-call"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+123-456-789">+123-456-789</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-md-mail"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26361250.667320687!2d-113.75533773453304!3d36.24128894212527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1574923227698!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <form class="contactForm">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

@endsection