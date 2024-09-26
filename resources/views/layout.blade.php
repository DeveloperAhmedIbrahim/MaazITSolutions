<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Maaz IT Solutions</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/sharp-regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/sharp-solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/nice-select/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/venobox/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="fix">
        <header>
            <div class="rv-34-header to-be-fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="rv-31-menu rv-34-menu">
                                <div class="rv-34-logo">
                                    <a href="index-2.html" style="color: white">
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" height="50">
                                            <div class="logo-text-container ps-1">
                                                <div class="logo-text-upper">MAAZ</div>
                                                <div class="logo-text-lower">IT Solutions</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="rv-1-header-nav__sidebar">
                                    <div class="sidebar-heading d-lg-none d-flex align-items-center justify-content-between">
                                        <a href="index-2.html" class="logo-container ">
                                            <img src="{{ asset('assets/img/Software/logo/rv-34-logo.png') }}" alt="logo">
                                        </a>
                                        <button class=" rv-1-header-mobile-menu-btn sidebar-close-btn rv-3-def-btn">
                                            <i class="fa-regular fa-xmark"></i>
                                        </button>
                                    </div>
                                    <nav class="rv-31-menu-list rv-1-header__nav">
                                        <ul class="rv-31-menu-list__ul">
                                            <li> <a href="{{ route('home') }}">Home</a> </li>
                                            <li> <a href="{{ route('service') }}">Services</a> </li>
                                            <li> <a href="{{ route('about') }}">About</a> </li>
                                            <li> <a href="{{ route('contact') }}">Contact</a> </li>
                                        </ul>
                                    </nav>
                                    <a href="login.html" class="rv-34-btn show-for-devices">Book Consultation</a>
                                </div>
                                <div class="rv-31-menu-right">
                                    <a href="javascript:void(0)" class="rv-34-btn hide-for-devices">Book Consultation</a>
                                    <button class=" rv-3-def-btn rv-1-header-mobile-menu-btn d-lg-none d-inline-block" id="rv-1-header-mobile-menu-btn">
                                        <i class="fa-bars fa-regular"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="search-field" id="search-field">
            <div class="search">
                <form action="#">
                    <input type="search" required placeholder="search here">
                    <button>Search</button>
                </form>
                <button class="close-btn"><i class="fa fa-close"></i></button>
            </div>
        </div>
        @yield('content')
        <section class="rv-34-footer mt-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="rv-31-footer-wized rv-31-footer-about wow fadeInUp">
                            <a href="index-2.html" style="color: black">
                                <div class="d-flex">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="logo" height="50">
                                    <div class="logo-text-container ps-1">
                                        <div class="logo-text-upper">MAAZ</div>
                                        <div class="logo-text-lower">IT Solutions</div>
                                    </div>
                                </div>
                            </a>
                            <p class="rv-31-footer-text">
                                Morbi pharetra, eros sed euismod <br> pellentesque, nulla risus lobortis<br> purus, quis
                                maximus.
                            </p>
                            <div class="rv-31-footer-socials wow fadeInUp" data-wow-delay="0.3s">
                                <a href="#"><span><i class="fa-brands fa-twitter"></i></span></a>
                                <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                                <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 ">
                        <div class="rv-31-footer-wized wow fadeInUp" data-wow-delay="0.3s">
                            <h4 class="rv-31-footer-wized__title">Useful Links</h4>
                            <ul class="footer-wized-ul">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="projects.html">Latest Work</a></li>
                                <li><a href="team.html">Team Members</a></li>
                                <li><a href="blog.html">Latest Blog</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="rv-31-footer-wized wow fadeInUp" data-wow-delay="0.45s">
                            <h4 class="rv-31-footer-wized__title">Our Services</h4>
                            <ul class="footer-wized-ul">
                                <li><a href="#">Managed Service</a></li>
                                <li><a href="#">Cloud Solution</a></li>
                                <li><a href="#">Network Services</a></li>
                                <li><a href="#">Cyber Security</a></li>
                                <li><a href="#">Backup & Recovery</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="rv-31-footer-wized wow fadeInUp" data-wow-delay="0.6s">
                            <h4 class="rv-31-footer-wized__title">Newsletter SignUp</h4>
                            <form action="#" class="rv-32-footer-nwsltr__form rv-34-footer-newsletter ">
                                <div class="nwsltr-top">
                                    <input type="email" required name="email" placeholder="Enter your Email...">
                                    <button class="rv-34-btn">Subscribe</button>
                                </div>
                                <div class="rv-32-footer-nwsltr__checkbox">
                                    <input type="checkbox" required id="footer-nwsltr-checkbox" name="checkbox"
                                        value="1">
                                    <label id="nwsltr-checkbox"> I agree to the <a href="contact.html">Privacy
                                            Policy</a>.</label>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="rv-34-footer-bottom mt-95 wow fadeInUp">
                        Copyright © 2024 All Rights Reserved by Maaz IT Solutions
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('assets/vendor/jquery/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/mixitup/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/gsap-scroll-trigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/split-type/split-type-0.3.3.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/syotimer/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/fslightbox/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/vendor/anime/anime.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/technotech.js') }}"></script>
</body>
</html>
