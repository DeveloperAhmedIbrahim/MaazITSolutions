@extends('layout')
@section('title','Development')
@section('content')

<!-- BREADCRUMB STARTS HERE -->
<div class="rv-breadcrumb pt-120 pb-120">
    <div class="container">
        <h1 class="rv-breadcrumb__title">Development</h1>

        <ul class="rv-breadcrumb__nav d-flex justify-content-center">
            <li><a href="{{ route('service') }}"><i class="fa-solid fa-sharp fa-home"></i> Service</a></li>
            <li class="current-page"><span class="dvdr"> &#47;</span><span>Development</span></li>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ENDS HERE -->

{{-- SERVICE SECTION STARTS --}}
<div class="rv-34-service mt-120 " >
    <div class="container">
        <div class="row">
            <div class="rv-34-section-heading text-center mb-35">
                <span class="rv-34-tag" ><h4 class="mb-0">SOFTWARE DEVELOPMENT</h4></span>
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
                            <img src="{{ asset('assets/img/dev1.svg') }}" class="wow slideInLeft"
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
                                    <h6>Custom Software Solutions</h6>
                                    <p>Develop tailored software applications that solve specific business challenges.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>System Integration</h6>
                                    <p>Seamlessly integrate new software with existing systems for smooth operations.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Software Maintenance & Support</h6>
                                    <p>Provide ongoing support and updates to keep your software running efficiently.</p>
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
                        <h2 class="rv-31-sec-title">End-to-End Software Development Services</h2>
                        <span class="rv-31-sec-subtitle" >We offers Software Development services designed to create customized solutions that streamline your business processes and drive growth.

                        </span>
                    </div>
                    <div class="rv-31-abt-info-1__item abt-info-2__item wow fadeInUp">
                        <div class="rv-31-abt-info-1__item-text abt-info-2__text">

                            <p >Our custom software solutions are built to address specific operational needs, improving efficiency and productivity.
                                Whether you require standalone applications or software that integrates with your existing systems, we ensure seamless system integration to prevent disruptions and enhance overall functionality.
                                With our software maintenance and support services, we provide continuous monitoring, updates, and troubleshooting to keep your software performing optimally.
                                From design and development to long-term support, we offer comprehensive solutions to meet your software needs.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-1__img w_img">
                    <img src="{{ asset('assets/img/dev2.svg') }}" class="wow slideInRight"
                        alt="about">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="rv-34-service mt-120 " >
    <div class="container">
        <div class="row">
            <div class="rv-34-section-heading text-center mb-35">
                <span class="rv-34-tag" ><h4 class="mb-0">MOBILE APP DEVELOPMENT</h4></span>
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
                            <img src="{{ asset('assets/img/mbl1.svg') }}" class="wow slideInLeft"
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
                                    <h6>Native & Cross-Platform Apps</h6>
                                    <p>Develop high-performance native and cross-platform mobile apps for Android and iOS.</div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>User-Friendly Interfaces</h6>
                                    <p>Create intuitive and engaging mobile app interfaces to enhance user experience.
                                    </p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>App Testing & Maintenance</h6>
                                    <p>Thoroughly test and provide ongoing support for optimal mobile app performance.</p>
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
                        <h2 class="rv-31-sec-title">Full-Cycle Mobile App Development</h2>
                        <span class="rv-31-sec-subtitle" >Our Mobile App Development services deliver feature-rich, user-friendly applications for both Android and iOS.
                        </span>
                    </div>
                    <div class="rv-31-abt-info-1__item abt-info-2__item wow fadeInUp">
                        <div class="rv-31-abt-info-1__item-text abt-info-2__text">
                            <p >We specialize in developing both native and cross-platform apps, ensuring high performance and seamless functionality across devices.
                                Our focus on user-friendly interfaces guarantees that your app provides an intuitive and engaging experience for end users, boosting satisfaction and retention.
                                We also offer app testing and maintenance services to ensure that your mobile applications are bug-free, secure, and always up to date.
                                From concept to deployment and ongoing support, we handle every stage of the mobile app development process to ensure your app’s success.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-1__img w_img">
                    <img src="{{ asset('assets/img/mbl2.svg') }}" class="wow slideInRight"
                        alt="about">
                </div>
            </div>
        </div>
    </div>
</section>



<div class="rv-34-service mt-120 " >
    <div class="container">
        <div class="row">
            <div class="rv-34-section-heading text-center mb-35">
                <span class="rv-34-tag" ><h4 class="mb-0">WEB DEVELOPMENT</h4></span>
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
                            <img src="{{ asset('assets/img/websrv1.svg') }}" class="wow slideInLeft"
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
                                    <h6>Custom Website Design</h6>
                                    <p>Build bespoke, responsive websites tailored to your brand and target audience.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>E-commerce Solutions</h6>
                                    <p>Develop secure, user-friendly e-commerce platforms that drive sales and growth.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Website Optimization & SEO</h6>
                                    <p>Enhance website performance with speed optimization and SEO best practices.</p>
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
                        <h2 class="rv-31-sec-title">Professional Web Development Services</h2>
                        <span class="rv-31-sec-subtitle" >Our Web Development services focus on creating high-quality, customized websites that are both functional and visually appealing.
                        </span>
                    </div>
                    <div class="rv-31-abt-info-1__item abt-info-2__item wow fadeInUp">
                        <div class="rv-31-abt-info-1__item-text abt-info-2__text">
                            <p >We specialize in custom website design, ensuring that every site reflects your brand and meets the needs of your target audience.
                                Whether you're looking to create a sleek corporate website or a full-featured e-commerce platform, we have the expertise to deliver secure and scalable solutions.
                                Our website optimization and SEO services ensure that your site performs efficiently, loads quickly, and ranks well in search engines, driving traffic and engagement.
                            From design to deployment, we provide comprehensive web development services that ensure your online presence stands out.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-1__img w_img">
                    <img src="{{ asset('assets/img/websrv2.svg') }}" class="wow slideInRight"
                        alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- SERVICE SECTION END --}}

@endsection
