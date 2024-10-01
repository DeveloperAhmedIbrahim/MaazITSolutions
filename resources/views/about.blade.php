@extends('layout')
@section('title','About')
@section('content')

<!-- BREADCRUMB STARTS HERE -->
<div class="rv-breadcrumb pt-120 pb-120">
    <div class="container">
        <h1 class="rv-breadcrumb__title">About</h1>

        <ul class="rv-breadcrumb__nav d-flex justify-content-center">
            <li><a href="{{ route('about') }}"><i class="fa-solid fa-sharp fa-home"></i> Home</a></li>
            <li class="current-page"><span class="dvdr"> &#47;</span><span>About us</span></li>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ENDS HERE -->


<!-- ABOUT SECTION START -->
<section class="rv-1-about rv-section-spacing" data-aos="fade-up">
    <div class="container position-relative">
        <div class="row rv-1-about-row g-0 justify-content-between align-items-end">
            <div class="col-xl-5 col-lg-6">
                <div class="rv-1-about__img reveal">
                    <img src="{{ asset('assets/img/about-img-1.jpg') }}" alt="Image">
                </div>
            </div>

            <div class="col-xxl-6 col-xl-7 col-lg-6">
                <div class="rv-1-about__txt">
                    <div class="rv-1-section__heading" data-aos="fade-up">
                        <h6 class="rv-1-section__sub-title rv-text-anime">
                            <b>WELCOME TO MAAZ IT SOLUTIONS</b>
                        </h6>
                        <p>
                            We are a leading provider of comprehensive IT services, specializing in IT Infrastructure Services, Cyber Security Services, Development Services, and Designing Services. Our mission is to deliver high-quality, innovative solutions that help businesses thrive.
                        </p>
                        <p>
                            At Maaz IT Solutions, we understand that every business is unique. Our team of experienced professionals is dedicated to providing reliable and tailored IT solutions to meet the specific needs of each client. We focus on excellence and customer satisfaction, ensuring that our services simplify and accelerate your business processes, making them more cost-efficient.
                        </p>
                        <p>
                            With a commitment to innovation and quality, we strive to be your go-to IT partner, helping you achieve your business goals and succeed in the competitive digital landscape.
                        </p>
                    </div>

                    <a href="javascript:void(0)" class="rv-1-def-btn rv-inner-about-btn" data-aos="fade-up" data-aos-delay="200">
                        <span class="txt hover-black-clr">Get Consultancy</span>
                        <span class="icon"><img src="{{ asset('assets/img/rv-1-icon-1.png') }}" alt="icon"></span>
                    </a>

                    <div class="rv-1-about__right-img">
                        <img src="{{ asset('assets/img/about-img-2.jpg') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="rv-1-about__vectors">
            <img src="{{ asset('assets/img/rv-1-vector-6.png') }}" alt="vector" class="rv-1-about__vector rv-1-about__vector-1">
            <img src="{{ asset('assets/img/rv-1-vector-7.png') }}" alt="vector" class="rv-1-about__vector rv-1-about__vector-2">
            <img src="{{ asset('assets/img/rv-1-vector-8.png') }}" alt="vector" class="rv-1-about__vector rv-1-about__vector-3">
        </div>
    </div>
</section>
<!-- ABOUT SECTION END -->

<!-- CTA SECTION START -->
<section class="rv-14-cta rv-section-spacing">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="rv-14-cta__txt">
                    <h6 class="rv-1-section__sub-title rv-text-anime">Our Newsletter</h6>
                    <h2 class="rv-1-section__title rv-text-anime mb-0">Become a Member For Unique Updates!</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="#" class="rv-6-footer-nwsltr__form rv-14-nwsltr__form">
                    <div class="nwsltr-left">
                        <input type="email" name="email" placeholder="Enter your Email...">
                        <div class="rv-6-footer-nwsltr__checkbox rv-14-nwsltr__checkbox">
                            <input type="checkbox" id="nwsltr-checkbox" name="checkbox" value="1">
                            <label for="nwsltr-checkbox"> I agree to the <a href="#">Privacy Policy</a>.</label>
                        </div>
                    </div>
                    <button><i class="fa-light fa-paper-plane"></i> <span class="txt">Subscribe</span></button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- CTA SECTION END -->
@endsection
