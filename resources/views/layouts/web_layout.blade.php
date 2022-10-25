<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MountAff </title>
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

        <h1 class="mt-4 me-auto"><a href="{{route('website_home')}}">
        <img src="{{asset('images/logo.png')}}" alt="logo" class="mainLogo" >
        </a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto extrasmall" href="{{route('website_home')}}">Home</a></li>
                <li><a class="nav-link scrollto extrasmall" href="{{route('website_home')}}#about">About</a></li>
            


                
                <li><a class="nav-link scrollto extrasmall" href="#">sign up</a></li>
                <li><a class="nav-link scrollto extrasmall" href="#">login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      

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
                                <p>Mountaff provides variety of special abilities to make your business more
                                    profitable.

                                    Increase your revenue with IMI Smart technologies:</p>
                            </div>

                            <div class="footer-newsletter">
                                <h4>Our Newsletter</h4>
                                <p>Direct offers or
                                    exclusive Smartlinks?
                                    Whatever you choose, Mountaff will give you multiple opportunities for the best
                                    performance.</p>
                           
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><a href="{{route('website_home')}}">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    
                                    <li><a href="{{route('terms')}}">Terms & Condition</a></li>
                                    <li><a href="{{route('event')}}">Event</a></li>

                                    <li><a href="{{route('privacypolicy')}}">Privacy policy</a></li>
                                </ul>
                            </div>

                            <div class="footer-links">
                                <h4>Contact Us</h4>
                                <p>
                                    Liubomyra Huzara Ave <br>
                                    3, Kyiv, 03065<br>
                                    Ukraine <br>
                                    <strong>Email:</strong> support@mountaff.com<br>
                                </p>
                            </div>

                            <div class="social-links">
                                <a href="https://twitter.com/AffMount" class="twitter"><i class="bi bi-twitter"></i></a>
                            
                                <a href="https://www.linkedin.com/company/mountaff" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form">

                        <h4>Send us a message</h4>
                        <p>We have custom plans to power your business. Tell us your needs, and we'll contact you
                            shortly.</p>

                        <form action="{{route('customer_querys.customer_querys.apistore')}}" action method="post"
                         role="form" class="php-email-form">
                            @CSRF   
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