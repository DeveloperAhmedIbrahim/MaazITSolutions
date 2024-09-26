@extends('layout')
@section('title', 'Home')
@section('content')
<!-- banner section start -->
<section class="rv-34-banner">
    <img src="{{ asset('assets/img/Software/banner/rv-34-banner.jpg') }}" alt="it service">
    <div class="rv-34-banner-overlay">
        <div class="container">
            <div class="row">
                <div class="rv-34-banner-content">
                    <span class="rv-34-tag text-white wow fadeInUp">Automate Your Business With Our IT Expertise</span>
                    <h3 class="rv-34-banner-title"> Every IT Solution<br>
                        <span>You</span> Need!
                    </h3>
                    <p class="rv-34-banner-text">
                        To boost your business at <span>Enterprise</span> level.
                    </p>
                    <div class="rv-34-banner-btns mt-40">
                        <a href="about.html" class="rv-34-btn mr-15 wow fadeInUp">Learn More
                            <i class="fa-solid fa-arrow-right-long ms-1"></i>
                        </a>
                        <a href="contact.html" class="rv-34-btn wow fadeInUp" data-wow-delay="0.3s">Get in Touch
                            <i class="fa-solid fa-arrow-right-long ms-1 "></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Banner section end -->

<!-- Service section start -->
<div class="rv-34-service mt-120 ">
    <div class="container">
        <div class="row">
            <div class="rv-34-section-heading text-center mb-35">
                <span class="rv-34-tag wow fadeInUp">What We Do?</span>
                <h2 class="rv-34-section-title wow fadeInUp" data-wow-delay="0.3s">Some Exclusive Service</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="rv-32-service-item rv-34-service-item wow fadeInUp">
                    <div class="rv-32-service-item__icon">
                        <img src="{{ asset('assets/img/Software/service/rv-34-icon1.png') }}" alt="icon">
                    </div>
                    <h5 class="rv-32-service-item__title">IT Infrastructure Services</h5>
                    <p class="rv-32-service-item__text">
                        Optimize Your IT Infrastructure with our strategic guidance, leveraging in-house expertise to design and growth for seamless performance and scalability Infrastructure.
                    </p>
                    <div class="rv-34-service-item__overlay">
                        <a href="service-details.html">
                            <h5 class="rv-32-service-item__title">IT Infrastructure Services</h5>
                        </a>
                        <p class="rv-32-service-item__text">
                            Optimize Your IT Infrastructure with our strategic guidance, leveraging in-house expertise to design and growth for seamless performance and scalability Infrastructure.
                        </p>
                        <a href="service-details.html"
                            class="rv-31-blog-item__content-readMore rv-34-view-link">Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="rv-32-service-item rv-34-service-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="rv-32-service-item__icon">
                        <img src="{{ asset('assets/img/Software/service/rv-34-icon2.png') }}" alt="icon">
                    </div>
                    <h5 class="rv-32-service-item__title">Cyber Security Services</h5>
                    <p class="rv-32-service-item__text">
                        Customized Cybersecurity Solutions to meet unique challenges and objectives, ensuring seamless integration, robust protection, and effective incident management across your enterprise infrastructure.
                    </p>
                    <div class="rv-34-service-item__overlay">
                        <a href="service-details.html">
                            <h5 class="rv-32-service-item__title">Cyber Security Services</h5>
                        </a>
                        <p class="rv-32-service-item__text">
                            Customized Cybersecurity Solutions to meet unique challenges and objectives, ensuring seamless integration, robust protection, and effective incident management across your enterprise infrastructure.
                        </p>
                        <a href="service-details.html"
                            class="rv-31-blog-item__content-readMore rv-34-view-link">Read More <i
                                class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="rv-32-service-item rv-34-service-item wow fadeInUp" data-wow-delay="0.35s">
                    <div class="rv-32-service-item__icon">
                        <img src="{{ asset('assets/img/Software/service/rv-34-icon3.png') }}" alt="icon">
                    </div>
                    <h5 class="rv-32-service-item__title">Development Services</h5>
                    <p class="rv-32-service-item__text">
                        Our development services include creating dynamic mobile applications, responsive and scalable web applications. We ensure each solution is tailored to meet your unique business needs. Partner with us to drive innovation and growth.
                    </p>
                    <div class="rv-34-service-item__overlay">
                        <a href="service-details.html">
                            <h5 class="rv-32-service-item__title">Development Services</h5>
                        </a>
                        <p class="rv-32-service-item__text">
                            Our development services include creating dynamic mobile applications, responsive and scalable web applications. We ensure each solution is tailored to meet your unique business needs. Partner with us to drive innovation and growth.
                        </p>
                        <a href="service-details.html"
                            class="rv-31-blog-item__content-readMore rv-34-view-link">Read More <i
                                class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="rv-32-service-item rv-34-service-item wow fadeInUp" data-wow-delay="0.45s">
                    <div class="rv-32-service-item__icon">
                        <img src="{{ asset('assets/img/Software/service/rv-34-icon4.png') }}" alt="icon">
                    </div>
                    <h5 class="rv-32-service-item__title">Designing Services</h5>
                    <p class="rv-32-service-item__text">
                        Our designing services include creating visually stunning, user-centric UI/UX designs and professional logos that enhance brand identity and user engagement.
                    </p>
                    <div class="rv-34-service-item__overlay">
                        <a href="service-details.html">
                            <h5 class="rv-32-service-item__title">Designing Services</h5>
                        </a>
                        <p class="rv-32-service-item__text">
                            Our designing services include creating visually stunning, user-centric UI/UX designs and professional logos that enhance brand identity and user engagement.
                        </p>
                        <a href="service-details.html"
                            class="rv-31-blog-item__content-readMore rv-34-view-link">Read More <i
                                class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service section end  -->

<!-- About section start  -->
<section class="rv-34-abt">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="rv-34-abt-imgs wow slideInLeft">
                    <img src="{{ asset('assets/img/Software/about/rv-34-abt-1.jpg') }}" class="rv-34-big-img"
                        alt="speaker">
                    <img src="{{ asset('assets/img/Software/about/rv-34-abt-2.jpg') }}" class="rv-34-sm-img" alt="speaker">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rv-34-abt-content">
                    <div class="rv-34-section-heading mb-35">
                        <span class="rv-34-tag">Who Are We?</span>
                        <h2 class="rv-34-section-title">
                            Bespoke IT Services
                            <br>
                            Designed Just for You.
                        </h2>
                        <p class="rv-34-abt-content__text">
                            We specialize in IT Infrastructure, Web Development, Development, Cyber Security, and Designing, we transform technology for tomorrow. We will take your business to the Next Level.
                        </p>
                        <div class="rv-34-abt-content__btns mt-40 wow fadeInUp">

                            <a href="about.html" class="rv-34-btn mr-20">Read More
                                <i class="fa-solid fa-arrow-right-long ms-1"></i>
                            </a>
                            <a href="https://www.youtube.com/embed/PBDlbSAddAI?si=v8WM4F7YcsE4MMtS"
                                class="rv-34-vdo-btn my-video-links" data-autoplay="true" data-vbtype="video"
                                data-maxwidth="800px">
                                <i class="fa-solid fa-play"></i>
                            </a>
                            <span>How it Works</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About  section end  -->


<!-- Testimonial section start  -->
<section class="rv-34-testimonial-sec ">
    <div class="container">
        <div class="row">
            <div class="rv-34-section-heading text-center mb-35">
                <span class="rv-34-tag wow fadeInUp">Testimonials</span>
                <h2 class="rv-34-section-title">
                    Customer Feedback <br> <span>&</span> Comments.
                </h2>
            </div>

            <div class="rv-34-testimonial-swiper-container swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rv-28-client-review">
                            <div class="rv-28-testimonial-stars ">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                            </div>
                            <p>
                                “Maaz IT Solutions completely revamped our IT infrastructure, and the difference has been night and day. Our systems are now faster, more reliable, and perfectly tailored to our business needs. Their team was highly knowledgeable and provided seamless integration without any downtime. I highly recommend them to anyone looking to upgrade their IT infrastructure.”
                            </p>
                            <div class="rv-28-author">
                                <h6>Sophia</h6>
                                <span>COO at InnovateX Technologies</span>
                            </div>
                            <img src="{{ asset('assets/img/rv-colon.png') }}" class="rv-28-colon" alt="colon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rv-28-client-review">
                            <div class="rv-28-testimonial-stars">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                            </div>
                            <p>
                                “After a security scare last year, we reached out to Maaz IT Solutions for their cybersecurity services. Their team conducted a comprehensive audit, implemented robust security measures, and now monitors our systems 24/7. We feel more secure than ever, knowing that our data is protected by true experts. Maaz IT Solutions has been a lifesaver!”
                            </p>
                            <div class="rv-28-author">
                                <h6>Michael B</h6>
                                <span>CEO of Prime Finance Corp</span>
                            </div>
                            <img src="{{ asset('assets/img/rv-colon.png') }}" class="rv-28-colon" alt="colon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rv-28-client-review">
                            <div class="rv-28-testimonial-stars">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                                <img src="{{ asset('assets/img/rv-27-testimoial-star.png') }}" alt="star">
                            </div>
                            <p>
                                “Working with Maaz IT Solutions on our website redesign was a fantastic experience. They transformed our outdated site into a modern, user-friendly platform that has significantly improved our online presence. The team's creativity, technical skills, and attention to detail were top-notch. Our website traffic and engagement have seen a remarkable increase!”
                            </p>
                            <div class="rv-28-author">
                                <h6>Emma Wales</h6>
                                <span>Marketing Director at EcoTrend Solutions</span>
                            </div>
                            <img src="{{ asset('assets/img/rv-colon.png') }}" class="rv-28-colon" alt="colon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="rv-28-testimonial-controller">
                <button class="rv-28-cf-arrow-btn-left"><i class="fa-thin fa-arrow-left-long"></i></button>
                <span class="rv-28-testimonial-count"></span>
                <button class="rv-28-cf-arrow-btn-right"><i class="fa-thin fa-arrow-right-long"></i></button>
            </div>
        </div>

        <div class="rv-28-clients">
            <img src="{{ asset('assets/img/rv-28-client1.jpg') }}" class="rv-28-client__1" alt="client">
            <img src="{{ asset('assets/img/rv-28-client2.jpg') }}" class="rv-28-client__2" alt="client">
            <img src="{{ asset('assets/img/rv-28-client3.jpg') }}" class="rv-28-client__3" alt="client">
            <img src="{{ asset('assets/img/rv-28-client4.jpg') }}" class="rv-28-client__4" alt="client">
            <img src="{{ asset('assets/img/rv-28-client5.jpg') }}" class="rv-28-client__5" alt="client">
            <img src="{{ asset('assets/img/rv-28-client6.jpg') }}" class="rv-28-client__6" alt="client">

        </div>
    </div>
</section>
<!-- Testimonial section end  -->

<!-- Team section start  -->
<section class="rv-34-team mb-120">
    <div class="container">
        <div class="row">
            <div
                class="rv-34-section-heading d-md-flex justify-content-md-between justify-content-center  align-items-center mb-30">
                <div class="rv-34-section-heading-left">
                    <span class="rv-34-tag wow fadeInUp">Team Members</span>
                    <h2 class="rv-34-section-title wow fadeInUp" data-wow-delay="0.3s">Meet Our Leadership
                    </h2>
                </div>
                <a href="team.html" class="rv-31-blog-item__content-readMore rv-34-view-link wow fadeInUp"
                    data-wow-delay="0.3s">View All Members
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="rv-34-team-member">
                    <div class="rv-34-team-member__img ">
                        <img src="{{ asset('assets/img/Software/team/rv-34-team1.jpg') }}" class="w-100 " alt="team-member">
                    </div>
                    <div class="rv-34-team-member__overlay">
                        <div class="rv-34-team-member__info">
                            <a href="#" class="d-block ">
                                <h6 class="rv-34-team-member__info-name">Ravi O'Leigh</h6>
                            </a>
                            <span class="rv-34-team-member__info-title">CHEF TECHNOLOGY</span>
                        </div>
                        <div class="rv-34-team-member__socials">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="rv-34-team-member">
                    <div class="rv-34-team-member__img ">
                        <img src="{{ asset('assets/img/Software/team/rv-34-team2.jpg') }}" class="w-100 " alt="team-member">
                    </div>
                    <div class="rv-34-team-member__overlay">
                        <div class="rv-34-team-member__info">
                            <a href="#" class="d-block ">
                                <h6 class="rv-34-team-member__info-name">Ravi O'Leigh</h6>
                            </a>
                            <span class="rv-34-team-member__info-title">CHEF TECHNOLOGY</span>
                        </div>
                        <div class="rv-34-team-member__socials">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="rv-34-team-member">
                    <div class="rv-34-team-member__img ">
                        <img src="{{ asset('assets/img/Software/team/rv-34-team3.jpg') }}" class="w-100 " alt="team-member">
                    </div>
                    <div class="rv-34-team-member__overlay">
                        <div class="rv-34-team-member__info">
                            <a href="#" class="d-block ">
                                <h6 class="rv-34-team-member__info-name">Ravi O'Leigh</h6>
                            </a>
                            <span class="rv-34-team-member__info-title">CHEF TECHNOLOGY</span>
                        </div>
                        <div class="rv-34-team-member__socials">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team section end  -->
@endsection
