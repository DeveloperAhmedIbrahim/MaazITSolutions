@extends('layout')
@section('title','IT Infrastructure')
@section('content')

<!-- BREADCRUMB STARTS HERE -->
<div class="rv-breadcrumb pt-120 pb-120">
    <div class="container">
        <h1 class="rv-breadcrumb__title">IT Infrastructure</h1>

        <ul class="rv-breadcrumb__nav d-flex justify-content-center">
            <li><a href="{{ route('service') }}"><i class="fa-solid fa-sharp fa-home"></i> Service</a></li>
            <li class="current-page"><span class="dvdr"> &#47;</span><span>IT Infrastructure</span></li>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ENDS HERE -->

{{-- SERVICE SECTION STARTS --}}
<section class="rv-31-about mt-120">
    <div class="container">
        <div class="row">
            <div class="rv-31-abt-info-1">
                <div class="row">
                    <div class="col-lg-6 m-0 p-0 ">
                        <div class="rv-31-abt-info-1__img w_img">
                            <img src="{{ asset('assets/img/server-animate.svg') }}" class="wow slideInLeft" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6 m-0 p-0 ">
                        <div class="rv-31-abt-info-1-content">
                            <div class="rv-31-abt-info-1__item wow fadeInUp">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-1.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Network Design & Deployment
                                    </h6>
                                    <p>Expertly build and deploy scalable networks tailored to your business needs for optimal connectivity and performance.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Server Administration & Management</h6>
                                    <p>Ensure seamless server administration and deployment, optimizing server environments for reliability and efficiency.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>IT Infrastructure Monitoring & Maintenance</h6>
                                    <p>Proactively monitor and maintain your IT infrastructure to prevent downtime and enhance security.</p>
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
                        <h2 class="rv-31-sec-title">Comprehensive IT Infrastructure & Networking Solutions
                       </h2>
                        <span class="rv-31-sec-subtitle" >Our IT Infrastructure & Networking services are designed to ensure your business operates seamlessly.

                        </span>
                    </div>
                    <div class="rv-31-abt-info-1__item abt-info-2__item wow fadeInUp">
                        <div class="rv-31-abt-info-1__item-text abt-info-2__text">

                            <p >We provide comprehensive network design and deployment, creating robust, scalable, and secure networks that enhance your business operations.
                                Our server administration services include efficient deployment, management, and troubleshooting of server environments, ensuring high performance and uptime.
                                We also offer 24/7 IT infrastructure monitoring, identifying potential issues before they affect your operations.
                                With continuous maintenance and proactive solutions, we guarantee that your infrastructure is always secure, efficient, and ready to meet your business goals.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-1__img w_img">
                    <img src="{{ asset('assets/img/cloud-hosting-animate.svg') }}" class="wow slideInRight"
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
                <span class="rv-34-tag">
                    <h4 class="mb-0"><b>IT CONSULTATION</b></h4>
                </span>
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
                            <img src="{{ asset('assets/img/online-consulting-animate.svg') }}" class="wow slideInLeft"
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
                                    <h6>Proactive solution to IT problems</h6>
                                    <p>Effective approach to increasing IT efficiency, enhancing security, and improving user experience.</div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Securing access to the latest technologies</h6>
                                    <p>Empowering our clients with innovative solutions that meet their evolving needs.
                                    </p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Improving the IT performance
                                    </h6>
                                    <p>Optimizing the performance of systems, and networks through strategic updates.</p>
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
                        <h2 class="rv-31-sec-title">Build with Cutting-Edge Technology</h2>
                        <span class="rv-31-sec-subtitle" >We provide an extensive range of services designed to meet the varied demands of customers across a wide range of industries.
                        </span>
                    </div>
                    <div class="rv-31-abt-info-1__item abt-info-2__item wow fadeInUp">
                        <div class="rv-31-abt-info-1__item-text abt-info-2__text">
                            <p >Unlock the potential of your business with our comprehensive suite of IT services, meticulously designed to meet the unique needs of clients across diverse industries.
                                Our innovative solutions drive efficiency, foster growth, and propel businesses of all sizes towards success. Partner with us to experience unparalleled support and cutting-edge technology that sets you apart from the competition.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-1__img w_img">
                    <img src="{{ asset('assets/img/discussion-animate.svg') }}" class="wow slideInRight"
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
                <span class="rv-34-tag">
                    <h2 class="mb-0"><b>IT SUPPORT</b></h2>
                </span>
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
                            <img src="{{ asset('assets/img/service-247-animate.svg') }}" class="wow slideInLeft"
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
                                    <h6>Reliable IT Help Desk Support</h6>
                                    <p>Quick resolutions for all your technical issues.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-2.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>IT Inventory and Device Management</h6>
                                    <p>Keep track of your assets with ease.</p>
                                </div>
                            </div>
                            <div class="rv-31-abt-info-1__item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="rv-31-abt-info-1__item-icon ">
                                    <img src="{{ asset('assets/img/Software/about/rv-31-abt-3.png') }}" alt="icon">
                                </div>
                                <div class="rv-31-abt-info-1__item-text">
                                    <h6>Seamless Onboarding and Offboarding</h6>
                                    <p>Efficient management of employee transitions</p>
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
                        <h2 class="rv-31-sec-title">Comprehensive IT Support Services</h2>
                        <span class="rv-31-sec-subtitle" >Comprehensive IT Support Services for Small and Medium Businesses we are your trusted partner for all your IT support needs. We specialize in delivering tailored IT solutions for small and medium-sized businesses. Our expert IT Helpdesk team understands the unique challenges modern businesses face, ensuring you receive prompt and effective support.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-0 p-0 ">
                <div class="rv-31-abt-info-1__img w_img">
                    <img src="{{ asset('assets/img/247-animate.svg') }}" class="wow slideInRight"
                        alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- SERVICE SECTION END --}}

@endsection
