<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/peru/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 10:27:30 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/imagelightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <link rel="icon" type="image/png" href="{{asset('frontend/assets/img/favicon.png')}}">

    <title>Universal - Student Consulting</title>
</head>
<body>

<!-- Preloader Start-->
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloader End-->

<!-- nav Start-->
<div class="peru-nav">
    <div class="navbar-area fixed-top">
        <!-- Mobile menu Start-->
        <div class="mobile-nav">
            <a href="{{URL::to('/')}}" class="logo">
                <img src="{{asset('frontend/assets/img/peru-logo.png')}}" alt="Peru Logo">
            </a>
        </div>
        <!-- Mobile menu End-->

        <!-- main menu Start-->
        <div class="main-nav peru-nav-style">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{URL::to('/')}}">
                        <img src="{{asset('frontend/assets/img/peru-logo.png')}}" alt="peru Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-link">About us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('services')}}" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Study Destinations</a>
                                <ul class="dropdown-menu dropdown-style">
                                    <li class="nav-item">
                                        <a href="{{route('projects')}}" class="nav-link">USA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('projects')}}" class="nav-link">UK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('projects')}}" class="nav-link">CANADA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('projects')}}" class="nav-link">DENMARK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('projects')}}" class="nav-link">SWEDEN</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Our Success</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact')}}" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <div class="others-option">
                            <a href="tel:+800-987-65-43" class="contact-number">
                                <i class="fa fa-phone"></i>
                                +880 01734233944
                            </a>
                            <a class="default-btn" href="#">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- main menu End-->
    </div>
</div>
<!-- nav End-->

@yield('content')


<section class="footer-top-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-widget">
                    <a href="{{URL::to('/')}}">
                        <img src="{{asset('frontend/assets/img/white-logo.png')}}" alt="White-Logo">
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <ul class="address">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            32 st Kilda Road, Melbourne VIC, 3004 Australia
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+123(456)123">+123(456)123</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#c3aba6afafac83b3a6b1b6eda0acae"><span class="__cf_email__" data-cfemail="deb6bbb2b2b19eaebbacabf0bdb1b3">[email&#160;protected]</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="single-widget">
                    <h3>Links</h3>
                    <ul class="links">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="service.html">Service</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="testimonial.html">Testimonial</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="single-widget">
                    <h3>Support</h3>
                    <ul class="links">
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Submit To Ticket</a>
                        </li>
                        <li>
                            <a href="#">Visit Knowledge Base</a>
                        </li>
                        <li>
                            <a href="#">Refund Policy</a>
                        </li>
                        <li>
                            <a href="#">Professional Service</a>
                        </li>
                        <li>
                            <a href="#">Refund Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-widget">
                    <h3>Instagram</h3>
                    <ul class="instragram">
                        <li>
                            <a href="#">
                                <img src="{{asset('frontend/assets/img/inst/1.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('frontend/assets/img/inst/2.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('frontend/assets/img/inst/3.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('frontend/assets/img/inst/4.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('frontend/assets/img/inst/5.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('frontend/assets/img/inst/6.jpg')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div>
                    <p>
                        Copyright <i class="fa fa-copyright"></i>2021 Universal Education Sylhet.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul class="social-icon">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- to top -->
        <div class="cd-top"></div>
        <div class="cursor"></div>
        <div class="cursor2"></div>

    </div>
</footer>


<div class="go-top">
    <i class="fa fa-angle-double-up"></i>
    <i class="fa fa-angle-double-up"></i>
</div>


<script data-cfasync="false" src="{{asset('frontend/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/meanmenu.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/imagelightbox.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/mixitup.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/nice-select.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/form-validator.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/contact-form-script.js')}}"></script>

<script src="{{asset('frontend/assets/js/ajaxchimp.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/custom.js')}}"></script>

<script src="{{asset('frontend/assets/js/cursor.js')}}"></script>
</body>

<!-- Mirrored from templates.envytheme.com/peru/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 10:27:58 GMT -->
</html>

