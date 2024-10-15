@extends('layout')
@section('title','Blog')
@section('content')

<!-- BREADCRUMB STARTS HERE -->
<div class="rv-breadcrumb pt-120 pb-120">
    <div class="container">
        <h1 class="rv-breadcrumb__title">Blog</h1>

        <ul class="rv-breadcrumb__nav d-flex justify-content-center">
            <li><a href="{{ route('home') }}"><i class="fa-solid fa-sharp fa-home"></i> Home</a></li>
            <li class="current-page"><span class="dvdr"> &#47;</span><span>Blog</span></li>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ENDS HERE -->

  <!-- BLOG SECTION STARTS HERE ↓ -->
  <section class="rv-inner-blogs rv-section-spacing">
    <div class="container">
        <div class="rv-inner-blogs__row">
            <div class="rv-1-blog rv-inner-blog">
                <div class="rv-1-blog__img">
                    <img src="{{ asset('assets/img/rv-1-blog-1.jpg') }}" alt="Blog Image">
                </div>

                <div class="rv-1-blog__txt">
                    <ul class="rv-1-blog__infos">
                        <li><img src="{{ asset('assets/img/rv-1-icon-4.png') }}" alt="icon"> June 15, 2023</li>
                        <li><img src="{{ asset('assets/img/rv-1-icon-5.png') }}" alt="icon"> 5 Comments</li>
                    </ul>
                    <h4 class="rv-1-blog__title"><a href="{{ route('blog-details') }}">3 Incentives For Emphasizing Community
                            Building.</a></h4>
                    <a href="{{ route('blog-details') }}" class="rv-1-schedule-conf__btn rv-1-blog__btn">Read More <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="rv-1-blog rv-inner-blog rv-inner-blog--big">
                <div class="rv-1-blog__img">
                    <img src="{{ asset('assets/img/rv-1-blog-2.jpg') }}" alt="Blog Image">
                </div>

                <div class="rv-1-blog__txt">
                    <ul class="rv-1-blog__infos">
                        <li><img src="{{ asset('assets/img/rv-1-icon-4.png') }}" alt="icon"> June 15, 2023</li>
                        <li><img src="{{ asset('assets/img/rv-1-icon-5.png') }}" alt="icon"> 5 Comments</li>
                    </ul>
                    <h4 class="rv-1-blog__title"><a href="{{ route('blog-details') }}">The 5th Global Disability &
                            Rehabilitation Conference 2023</a></h4>
                    <a href="{{ route('blog-details') }}" class="rv-1-schedule-conf__btn rv-1-blog__btn">Read More <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="rv-1-blog rv-inner-blog rv-inner-blog--small">
                <div class="rv-1-blog__img">
                    <img src="{{ asset('assets/img/rv-1-blog-3.jpg') }}" alt="Blog Image">
                </div>

                <div class="rv-1-blog__txt">
                    <ul class="rv-1-blog__infos">
                        <li><img src="{{ asset('assets/img/rv-1-icon-4.png') }}" alt="icon"> June 15, 2023</li>
                        <li><img src="{{ asset('assets/img/rv-1-icon-5.png') }}" alt="icon"> 5 Comments</li>
                    </ul>
                    <h4 class="rv-1-blog__title"><a href="{{ route('blog-details') }}">How Developers are Removing The
                            Speculation.</a></h4>
                    <a href="{{ route('blog-details') }}" class="rv-1-schedule-conf__btn rv-1-blog__btn">Read More <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="rv-1-blog rv-inner-blog rv-inner-blog--big">
                <div class="rv-1-blog__img">
                    <img src="{{ asset('assets/img/rv-3-blog-1.jpg') }}" alt="Blog Image">
                </div>

                <div class="rv-1-blog__txt">
                    <ul class="rv-1-blog__infos">
                        <li><img src="{{ asset('assets/img/rv-1-icon-4.png') }}" alt="icon"> June 15, 2023</li>
                        <li><img src="{{ asset('assets/img/rv-1-icon-5.png') }}" alt="icon"> 5 Comments</li>
                    </ul>
                    <h4 class="rv-1-blog__title"><a href="{{ route('blog-details') }}">Pinpoint an Upgraded Method Setting
                            Business.</a></h4>
                    <a href="{{ route('blog-details') }}" class="rv-1-schedule-conf__btn rv-1-blog__btn">Read More <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="rv-1-blog rv-inner-blog rv-inner-blog--small">
                <div class="rv-1-blog__img">
                    <img src="{{ asset('assets/img/rv-3-blog-2.jpg') }}" alt="Blog Image">
                </div>

                <div class="rv-1-blog__txt">
                    <ul class="rv-1-blog__infos">
                        <li><img src="{{ asset('assets/img/rv-1-icon-4.png') }}" alt="icon"> June 15, 2023</li>
                        <li><img src="{{ asset('assets/img/rv-1-icon-5.png') }}" alt="icon"> 5 Comments</li>
                    </ul>
                    <h4 class="rv-1-blog__title"><a href="{{ route('blog-details') }}">Strategies For Exceptional Future
                            Outcomes.</a></h4>
                    <a href="{{ route('blog-details') }}" class="rv-1-schedule-conf__btn rv-1-blog__btn">Read More <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="rv-1-blog rv-inner-blog">
                <div class="rv-1-blog__img">
                    <img src="{{ asset('assets/img/rv-3-blog-3.jpg') }}" alt="Blog Image">
                </div>

                <div class="rv-1-blog__txt">
                    <ul class="rv-1-blog__infos">
                        <li><img src="{{ asset('assets/img/rv-1-icon-4.png') }}" alt="icon"> June 15, 2023</li>
                        <li><img src="{{ asset('assets/img/rv-1-icon-5.png') }}" alt="icon"> 5 Comments</li>
                    </ul>
                    <h4 class="rv-1-blog__title"><a href="{{ route('blog-details') }}">Recent Updates on The Economic &
                            Digital Landscape</a></h4>
                    <a href="{{ route('blog-details') }}" class="rv-1-schedule-conf__btn rv-1-blog__btn">Read More <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="rv-1-blog rv-inner-blog rv-inner-blog--small">
                <div class="rv-1-blog__img">
                    <img src="{{ asset('assets/img/rv-4-blog-1.jpg') }}" alt="Blog Image">
                </div>

                <div class="rv-1-blog__txt">
                    <ul class="rv-1-blog__infos">
                        <li><img src="{{ asset('assets/img/rv-1-icon-4.png') }}" alt="icon"> June 15, 2023</li>
                        <li><img src="{{ asset('assets/img/rv-1-icon-5.png') }}" alt="icon"> 5 Comments</li>
                    </ul>
                    <h4 class="rv-1-blog__title"><a href="{{ route('blog-details') }}">3 Incentives For Emphasizing Community
                            Building.</a></h4>
                    <a href="{{ route('blog-details') }}" class="rv-1-schedule-conf__btn rv-1-blog__btn">Read More <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="rv-1-blog rv-inner-blog">
                <div class="rv-1-blog__img">
                    <img src="{{ asset('assets/img/rv-4-blog-3.jpg') }}" alt="Blog Image">
                </div>

                <div class="rv-1-blog__txt">
                    <ul class="rv-1-blog__infos">
                        <li><img src="{{ asset('assets/img/rv-1-icon-4.png') }}" alt="icon"> June 15, 2023</li>
                        <li><img src="{{ asset('assets/img/rv-1-icon-5.png') }}" alt="icon"> 5 Comments</li>
                    </ul>
                    <h4 class="rv-1-blog__title"><a href="{{ route('blog-details') }}">3 Incentives For Emphasizing Community
                            Building.</a></h4>
                    <a href="{{ route('blog-details') }}" class="rv-1-schedule-conf__btn rv-1-blog__btn">Read More <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="rv-1-blog rv-inner-blog rv-inner-blog--big">
                <div class="rv-1-blog__img">
                    <img src="{{ asset('assets/img/rv-4-blog-13.jpg') }}" alt="Blog Image">
                </div>

                <div class="rv-1-blog__txt">
                    <ul class="rv-1-blog__infos">
                        <li><img src="{{ asset('assets/img/rv-1-icon-4.png') }}" alt="icon"> June 15, 2023</li>
                        <li><img src="{{ asset('assets/img/rv-1-icon-5.png') }}" alt="icon"> 5 Comments</li>
                    </ul>
                    <h4 class="rv-1-blog__title"><a href="{{ route('blog-details') }}">3 Incentives For Emphasizing Community
                            Building.</a></h4>
                    <a href="{{ route('blog-details') }}" class="rv-1-schedule-conf__btn rv-1-blog__btn">Read More <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BLOG SECTION ENDS HERE ↑ -->

@endsection
