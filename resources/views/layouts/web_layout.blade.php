<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MountAff Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('web/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('web/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('web/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('web/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('web/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('web/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{route('home')}}">MountAff</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{route('home')}}#about">About</a></li>
                <li><a class="nav-link scrollto" href="{{route('blog')}}">Blog</a></li>

{{--                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Drop Down 1</a></li>--}}
{{--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="#">Drop Down 2</a></li>--}}
{{--                        <li><a href="#">Drop Down 3</a></li>--}}
{{--                        <li><a href="#">Drop Down 4</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li><a class="nav-link scrollto" href="{{route('home')}}#footer">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>

    </div>
</header><!-- End Header -->



@yield('content')
<!-- ======= Footer ======= -->
<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">

                        <div class="col-sm-6">

                            <div class="footer-info">
                                <h3>MountAff</h3>
                                <p>IMonetizeIt provides variety of special abilities to make your business more
                                    profitable.

                                    Increase your revenue with IMI Smart technologies:</p>
                            </div>

                            <div class="footer-newsletter">
                                <h4>Our Newsletter</h4>
                                <p>Direct offers or
                                    exclusive Smartlinks?
                                    Whatever you choose, iMonetizeIt will give you multiple opportunities for the best
                                    performance.</p>
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit" value="Subscribe">
                                </form>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Terms of service</a></li>
                                    <li><a href="{{route('privacypolicy')}}">Privacy policy</a></li>
                                </ul>
                            </div>

                            <div class="footer-links">
                                <h4>Contact Us</h4>
                                <p>
                                    A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                            </div>

                            <div class="social-links">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form">

                        <h4>Send us a message</h4>
                        <p>We have custom plans to power your business. Tell us your needs, and we'll contact you
                            shortly.</p>

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                          required></textarea>
                            </div>

                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>

                            <div class="text-center">
                                <button type="submit" title="Send Message">Send Message</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>MountAff</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MountAff
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('web/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('web/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('web/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('web/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('web/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('web/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('web/assets/js/main.js')}}"></script>

</body>

</html>