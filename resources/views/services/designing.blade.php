@extends('layout')
@section('title','Designing')
@section('content')

<!-- BREADCRUMB STARTS HERE -->
<div class="rv-breadcrumb pt-120 pb-120">
    <div class="container">
        <h1 class="rv-breadcrumb__title">Designing</h1>

        <ul class="rv-breadcrumb__nav d-flex justify-content-center">
            <li><a href="{{ route('service') }}"><i class="fa-solid fa-sharp fa-home"></i> Service</a></li>
            <li class="current-page"><span class="dvdr"> &#47;</span><span>Designing</span></li>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ENDS HERE -->

{{-- SERVICE SECTION STARTS --}}
<div class="rv-34-service mt-120 " >
    <div class="container">
        <div class="row">
            <div class="rv-34-section-heading text-center mb-35">
                <span class="rv-34-tag" ><h4 class="mb-0">UI/UX DESIGNING</h4></span>
             </div>
        </div>
    </div>
</div>

<section class="rv-31-about mt-120">
<div class="container">
    <div class="row">
        <div class="rv-31-abt-info-1">
            <div class="row">
                <div class="col-lg-6 m-0 p-0 ">
                    <div class="rv-31-abt-info-1__img w_img">
                        <img src="{{ asset('assets/img/ui-ux-differences-animate.svg') }}" class="wow slideInLeft"
                            alt="about">
                    </div>
                </div>
                <div class="col-lg-6 m-0 p-0 ">
                    <div class="rv-31-abt-info-1-content">
                        <div class="rv-31-abt-info-1__item wow fadeInUp">
                            <div class="rv-31-abt-info-1__item-icon ">
                                <img src="{{ asset('assets/img/Software/about/rv-31-abt-1.png') }}" alt="icon">
                            </div>
                            <div class="rv-31-abt-info-1__item-text">
                                <h6>User-Centered Design
                                </h6>
                                <p>Craft intuitive and engaging designs that prioritize the user experience and drive satisfaction.</p>
                            </div>
                        </div>
                        <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="rv-31-abt-info-1__item-icon ">
                                <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                            </div>
                            <div class="rv-31-abt-info-1__item-text">
                                <h6>Responsive Web Design</h6>
                                <p>Deliver seamless user experiences across all devices with responsive and adaptive designs.</p>
                            </div>
                        </div>
                        <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="rv-31-abt-info-1__item-icon ">
                                <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                            </div>
                            <div class="rv-31-abt-info-1__item-text">
                                <h6>UI/UX Research & Prototyping</h6>
                                <p>Leverage in-depth research and prototyping to create designs that align with user behavior and business goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-120 mb-120 rv-31-abt-2">
        <div class="col-lg-6 m-0 p-0 ">
            <div class="rv-31-abt-info-2">
                <div class="rv-section-heading mb-40">
                    <h2 class="rv-31-sec-title">Exceptional UI/UX Solutions</h2>
                    <span class="rv-31-sec-subtitle" >Our UI/UX Design services focus on creating visually appealing, user-friendly interfaces that enhance both functionality and user engagement.
                    </span>
                </div>
                <div class="rv-31-abt-info-1__item abt-info-2__item wow fadeInUp">
                    <div class="rv-31-abt-info-1__item-text abt-info-2__text">

                        <p >We prioritize user-centered design, ensuring every element is intuitive and meets user needs. Our responsive web design guarantees a seamless experience across devices, from desktop to mobile.
                            With thorough UI/UX research and prototyping, we analyze user behavior to craft designs that align with your brand and business objectives.
                            Whether it's for websites, mobile apps, or software platforms, our goal is to deliver interfaces that are not only visually stunning but also highly functional, ensuring users enjoy a smooth, enjoyable experience that drives engagement and success.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 m-0 p-0 ">
            <div class="rv-31-abt-info-1__img w_img">
                <img src="{{ asset('assets/img/ui-ux-design-animate.svg') }}" class="wow slideInRight"
                alt="about">    </div>
        </div>
    </div>
</div>
</section>

<div class="rv-34-service mt-120 " >
<div class="container">
    <div class="row">
        <div class="rv-34-section-heading text-center mb-35">
            <span class="rv-34-tag" ><h4 class="mb-0">LOGO DESIGNING</h4></span>
         </div>
    </div>
</div>
</div>

<section class="rv-31-about mt-120">
<div class="container">
    <div class="row">
        <div class="rv-31-abt-info-1">
            <div class="row">
                <div class="col-lg-6 m-0 p-0 ">
                    <div class="rv-31-abt-info-1__img w_img">
                        <img src="{{ asset('assets/img/Design.svg') }}" class="wow slideInLeft"
                            alt="about">
                    </div>
                </div>
                <div class="col-lg-6 m-0 p-0 ">
                    <div class="rv-31-abt-info-1-content">
                        <div class="rv-31-abt-info-1__item wow fadeInUp">
                            <div class="rv-31-abt-info-1__item-icon ">
                                <img src="{{ asset('assets/img/Software/about/rv-31-abt-1.png') }}" alt="icon">
                            </div>
                            <div class="rv-31-abt-info-1__item-text">
                                <h6>Brand Identity Creation</h6>
                                <p>Design logos that reflect your brand's identity, values, and mission.</div>
                        </div>
                        <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="rv-31-abt-info-1__item-icon ">
                                <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                            </div>
                            <div class="rv-31-abt-info-1__item-text">
                                <h6>Custom & Unique Logos</h6>
                                <p>Develop custom, visually striking logos tailored to your business’s personality.
                                </p>
                            </div>
                        </div>
                        <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="rv-31-abt-info-1__item-icon ">
                                <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                            </div>
                            <div class="rv-31-abt-info-1__item-text">
                                <h6>Scalable & Versatile Designs</h6>
                                <p>Create logos that maintain clarity and impact across all platforms and sizes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-120 mb-120 rv-31-abt-2">
        <div class="col-lg-6 m-0 p-0 ">
            <div class="rv-31-abt-info-2">
                <div class="rv-section-heading mb-40">
                    <h2 class="rv-31-sec-title">Professional Logo Design Services</h2>
                    <span class="rv-31-sec-subtitle" >Our Logo Design services are focused on building a strong visual identity for your brand.
                    </span>
                </div>
                <div class="rv-31-abt-info-1__item abt-info-2__item wow fadeInUp">
                    <div class="rv-31-abt-info-1__item-text abt-info-2__text">
                        <p >We create custom logos that capture the essence of your business, ensuring they are unique, memorable, and aligned with your brand values.
                            Our designs are not only visually appealing but also scalable and versatile, making sure they look great across all mediums—whether it’s on a website, social media, business cards, or large-scale advertising.
                            By combining creativity with strategy, we craft logos that leave a lasting impression and help establish your business in the marketplace.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 m-0 p-0 ">
            <div class="rv-31-abt-info-1__img w_img">
                <img src="{{ asset('assets/img/design-process-animate.svg') }}" class="wow slideInRight"
                    alt="about">
            </div>
        </div>
    </div>
</div>
</section>
{{-- SERVICE SECTION END --}}

@endsection
