@extends('layout')
@section('title','Services')
@section('content')

<!-- BREADCRUMB STARTS HERE -->
<div class="rv-breadcrumb pt-120 pb-120">
    <div class="container">
        <h1 class="rv-breadcrumb__title">Our Services</h1>

        <ul class="rv-breadcrumb__nav d-flex justify-content-center">
            <li><a href="{{ route('home') }}"><i class="fa-solid fa-sharp fa-home"></i> Home</a></li>
            <li class="current-page"><span class="dvdr"> &#47;</span><span>Services</span></li>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ENDS HERE -->


<!-- SERVICE SECTION START -->
<div class="rv-34-service mt-120 ">
    <div class="container">
        <div class="row">
            <div class="rv-34-section-heading text-center mb-35">
                <span class="rv-34-tag wow fadeInUp">What We Do?</span>
                <h2 class="rv-34-section-title wow fadeInUp" data-wow-delay="0.3s">Exclusive Services</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 rv-32-service-item rv-34-service-item wow fadeInUp">
                <div class="">
                    <div class="rv-32-service-item__icon text-center">
                        <img src="{{ asset('assets/img/Software/service/network.gif') }}" width="80" alt="icon">
                    </div>
                    <h5 class="rv-32-service-item__title">IT Infrastructure Services</h5>
                    <p class="rv-32-service-item__text">
                        Optimize Your IT Infrastructure with our strategic guidance, leveraging in-house expertise to design and growth for seamless performance and scalability Infrastructure.
                    </p>
                    <div class="rv-34-service-item__overlay">
                        <a href="{{ route('service', 'it-infrastructure') }}">
                            <h5 class="rv-32-service-item__title">IT Infrastructure Services</h5>
                        </a>
                        <p class="rv-32-service-item__text">
                            Optimize Your IT Infrastructure with our strategic guidance, leveraging in-house expertise to design and growth for seamless performance and scalability Infrastructure.
                        </p>
                        <a href="{{ route('service', 'it-infrastructure') }}"
                            class="rv-31-blog-item__content-readMore rv-34-view-link">Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 rv-32-service-item rv-34-service-item wow fadeInUp">
                <div class="" data-wow-delay="0.25s">
                    <div class="rv-32-service-item__icon text-center">
                        <img src="{{ asset('assets/img/Software/service/cyber-security.gif') }}" width="80" alt="icon">
                    </div>
                    <h5 class="rv-32-service-item__title">Cyber Security Services</h5>
                    <p class="rv-32-service-item__text">
                        Customized Cybersecurity Solutions to meet unique challenges and objectives, ensuring seamless integration, robust protection, and effective incident management across your enterprise infrastructure.
                    </p>
                    <div class="rv-34-service-item__overlay">
                        <a href="{{ route('service', 'cyber-security') }}">
                            <h5 class="rv-32-service-item__title">Cyber Security Services</h5>
                        </a>
                        <p class="rv-32-service-item__text">
                            Customized Cybersecurity Solutions to meet unique challenges and objectives, ensuring seamless integration, robust protection, and effective incident management across your enterprise infrastructure.
                        </p>
                        <a href="{{ route('service', 'cyber-security') }}"
                            class="rv-31-blog-item__content-readMore rv-34-view-link">Read More <i
                                class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 rv-32-service-item rv-34-service-item wow fadeInUp">
                <div class="" data-wow-delay="0.35s">
                    <div class="rv-32-service-item__icon text-center">
                        <img src="{{ asset('assets/img/Software/service/laptop.gif') }}" width="80" alt="icon">
                    </div>
                    <h5 class="rv-32-service-item__title">Development Services</h5>
                    <p class="rv-32-service-item__text">
                        Our development services include creating dynamic mobile applications, responsive and scalable web applications. We ensure each solution is tailored to meet your unique business needs. Partner with us to drive innovation and growth.
                    </p>
                    <div class="rv-34-service-item__overlay">
                        <a href="{{ route('service', 'development') }}">
                            <h5 class="rv-32-service-item__title">Development Services</h5>
                        </a>
                        <p class="rv-32-service-item__text">
                            Our development services include creating dynamic mobile applications, responsive and scalable web applications. We ensure each solution is tailored to meet your unique business needs. Partner with us to drive innovation and growth.
                        </p>
                        <a href="{{ route('service', 'development') }}"
                            class="rv-31-blog-item__content-readMore rv-34-view-link">Read More <i
                                class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 rv-32-service-item rv-34-service-item wow fadeInUp">
                <div class="" data-wow-delay="0.45s">
                    <div class="rv-32-service-item__icon text-center">
                        <img src="{{ asset('assets/img/Software/service/ui-design.gif') }}" width="80" alt="icon">
                    </div>
                    <h5 class="rv-32-service-item__title">Designing Services</h5>
                    <p class="rv-32-service-item__text">
                        Our designing services include creating visually stunning, user-centric UI/UX designs and professional logos that enhance brand identity and user engagement.
                    </p>
                    <div class="rv-34-service-item__overlay">
                        <a href="{{ route('service', 'designing') }}">
                            <h5 class="rv-32-service-item__title">Designing Services</h5>
                        </a>
                        <p class="rv-32-service-item__text">
                            Our designing services include creating visually stunning, user-centric UI/UX designs and professional logos that enhance brand identity and user engagement.
                        </p>
                        <a href="{{ route('service', 'designing') }}"
                            class="rv-31-blog-item__content-readMore rv-34-view-link">Read More <i
                                class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 rv-32-service-item rv-34-service-item wow fadeInUp">
                <div class="" data-wow-delay="0.45s">
                    <div class="rv-32-service-item__icon text-center">
                        <img src="{{ asset('assets/img/Software/service/website-builder.gif') }}" width="80" alt="icon">
                    </div>
                    <h5 class="rv-32-service-item__title">WordPress & Shopify Services</h5>
                    <p class="rv-32-service-item__text">
                        We offers expert WordPress and Shopify development skills, delivering customized, responsive, and SEO-friendly websites to boost your online presence and eCommerce success.
                    </p>
                    <div class="rv-34-service-item__overlay">
                        <a href="{{ route('service', 'wordpress-and-shopify') }}">
                            <h5 class="rv-32-service-item__title">WordPress & Shopify Services</h5>
                        </a>
                        <p class="rv-32-service-item__text">
                            We offers expert WordPress and Shopify development skills, delivering customized, responsive, and SEO-friendly websites to boost your online presence and eCommerce success.
                        </p>
                        <a href="{{ route('service', 'wordpress-and-shopify') }}"
                            class="rv-31-blog-item__content-readMore rv-34-view-link">Read More <i
                                class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SERVICE SECTION END  -->
@endsection
