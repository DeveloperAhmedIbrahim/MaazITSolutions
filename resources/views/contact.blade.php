@extends('layout')
@section('title','Contact')
@section('content')

<!-- BREADCRUMB STARTS HERE -->
<div class="rv-breadcrumb pt-120 pb-120">
    <div class="container">
        <h1 class="rv-breadcrumb__title">Contact Us</h1>

        <ul class="rv-breadcrumb__nav d-flex justify-content-center">
            <li><a href="{{ route('home') }}"><i class="fa-solid fa-sharp fa-home"></i> Home</a></li>
            <li class="current-page"><span class="dvdr"> &#47;</span><span>Contact</span></li>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ENDS HERE -->


<!-- CONTACT SECTION START -->
<section class="rv-2-contact rv-inner-contact rv-section-spacing" data-aos="fade-up">
    <div class="container">
        <div class="rv-inner-contact-info-cards">
            <div class="rv-inner-contact-info">
                <div class="rv-inner-contact-info__heading">
                    <div class="rv-inner-contact-info__icon">
                        <i class="fa-regular fa-phone"></i>
                    </div>
                    <h5 class="rv-inner-contact-info__title text-light">Contact Numbers</h5>
                </div>
                <div class="rv-inner-contact-info__bottom">
                    <ul class="rv-5-footer-timings">
                        <li><a href="tel:+12107426167">+1 210 742 6167</a></li>
                    </ul>
                </div>
            </div>

            <div class="rv-inner-contact-info">
                <div class="rv-inner-contact-info__heading">
                    <div class="rv-inner-contact-info__icon">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <h5 class="rv-inner-contact-info__title text-light">Email Address</h5>
                </div>

                <div class="rv-inner-contact-info__bottom">
                    <ul class="rv-5-footer-timings">
                        <li><a href="mailto:info@maazitsols.com">info@maazitsols.com</a></li>
                    </ul>
                </div>
            </div>

            <div class="rv-inner-contact-info">
                <div class="rv-inner-contact-info__heading">
                    <div class="rv-inner-contact-info__icon">
                        <i class="fa-regular fa-location-dot"></i>
                    </div>
                    <h5 class="rv-inner-contact-info__title text-light">Address</h5>
                </div>

                <div class="rv-inner-contact-info__bottom">
                    <ul class="rv-5-footer-timings">
                        <li>
                            <span>5900 Balcones Dr, STE 100, Austin, TX</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row gy-3 gy-sm-4">
            <!-- contact form -->
            <div class="col-xxl-8 col-lg-7">
                <div class="rv-2-contact__txt rv-inner-contact__txt">
                    <h3 class="rv-2-contact-form-title">Let's Connect.</h3>
                    <form action="#" class="rv-2-contact__form rv-inner-contact__form">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" name="name" id="rv-2-contact-name" placeholder="Enter Your Full Name" required>
                            </div>

                            <div class="col-sm-12">
                                <input type="email" name="email" id="rv-2-contact-email" placeholder="Enter Your Email Address" required>
                            </div>
                            <div class="col-12">
                                <select name="subjects" required id="rv-2-contact-subject">
                                    <option value="Selects Subject" hidden>Select Subject</option>
                                    <option value="Project Buy">Project Buy</option>
                                    <option value="Custom Project">Custom Project</option>
                                    <option value="Partnership Offer">Partnership Offer</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="rv-2-contact-message" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- map -->
            <div class="col-xxl-4 col-lg-5">
                <img src="{{ asset('assets/img/Software/contact/contact-us-animate.svg') }}" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</section>
<!-- CONTACT SECTION END -->@endsection
