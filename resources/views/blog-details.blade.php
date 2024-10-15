@extends('layout')
@section('title','Blog Details')
@section('content')

<!-- BREADCRUMB STARTS HERE -->
<div class="rv-breadcrumb pt-120 pb-120">
    <div class="container">
        <h1 class="rv-breadcrumb__title">Blog Details</h1>

        <ul class="rv-breadcrumb__nav d-flex justify-content-center">
            <li><a href="{{ route('home') }}"><i class="fa-solid fa-sharp fa-home"></i> Home</a></li>
            <li class="current-page"><span class="dvdr"> &#47;</span><span>Blog Details</span></li>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ENDS HERE -->

<!-- BLOG DETAILS START -->
<div class="rv-blog-details pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center rv-blog-details__row">
            <div class="col-lg-8">
                <div class="rv-blog-details-left">
                    <div class="rv-blog-details__img">
                        <img src="{{ asset('assets/img/rv-14-banner-bg.jpg') }}" alt="blog banner">
                    </div>

                    <div class="rv-blog-details__infos">
                        <h6 class="rv-blog-details__info"><i class="fa-light fa-calendar-alt"></i>March 24, 2023
                        </h6>
                        <h6 class="rv-blog-details__info"><i class="fa-regular fa-user"></i> By <a href="#">Abu
                                Amer</a></h6>
                        <h6 class="rv-blog-details__info"><i class="fa-regular fa-comment-alt-dots"></i>3 Comments
                        </h6>
                    </div>

                    <h2 class="rv-blog-details__title">Recent Updates The & Digital Landscape</h2>

                    <div class="rv-blog-details-descr">
                        <p class="rv-blog-details-descr__txt">Morbi molestie eu nisl a feugiat. Maecenas sed mauris
                            eu metus vestibulum varius. Phasellus in nisl mauris. Suspendisse tristique, neque at
                            blandit egestas, risus orci lacinia ante, sit amet pretium enim lacus non ex. Cras vitae
                            augue nec arcu luctus luctus.</p>

                        <p class="rv-blog-details-descr__txt">Cras vel tempus urna. Integer eu venenatis dolor.
                            Vivamus rutrum, mauris eget semper semper, diam sem suscipit mauris, a lacinia ipsum
                            elit quis diam. In sapien ante, fermentum a nisi.</p>

                        <blockquote class="rv-blog-details-descr__txt blockquote">
                            <p>
                                Lorem ipsum dolor sit abet connecters dehiscing alit sed aliquot ex
                                supine maximus sit ramet mi laurate untraces.
                            </p>

                            <h6 class="blockquote__author-name">Norman Gordon</h6>
                        </blockquote>

                        <div class="rv-blog-details__inner-img">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <img src="{{ asset('assets/img/rv-4-blog-10.jpg') }}" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('assets/img/rv-4-blog-3.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <h3 class="rv-blog-details__title">How Developers are Removing The Speculation.</h3>
                        <p class="rv-blog-details-descr__txt">Morbi molestie eu nisl a feugiat. Maecenas sed mauris
                            eu metus vestibulum varius. Phasellus in nisl mauris. Suspendisse tristique, neque at
                            blandit egestas, risus orci lacinia ante, sit amet pretium enim lacus non ex. Cras vitae
                            augue nec arcu luctus luctus.</p>
                    </div>

                    <div class="rv-blog-details-bottom-actions">
                        <div class="rv-blog-details-tags">
                            <h6 class="rv-blog-details-bottom-actions__title">Post Tags:</h6>
                            <a href="#" class="rv-blog-details-tag">Education</a>
                            <a href="#" class="rv-blog-details-tag">Study</a>
                            <a href="#" class="rv-blog-details-tag">LMS</a>
                        </div>

                        <div class="rv-blog-details-shares">
                            <h6 class="rv-blog-details-bottom-actions__title">Share:</h6>
                            <div class="rv-1-socials rv-inner-socials">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="rv-blog-details-bottom__navs">
                        <div class="row gy-0 gx-0">
                            <div class="col-6 col-xxs-12">
                                <a href="#" class="rv-blog-details-bottom-nav"><i
                                        class="fa-sharp fa-regular fa-arrow-left"></i>Prev Post</a>
                            </div>
                            <div class="col-6 col-xxs-12 ms-auto">
                                <a href="#" class="rv-blog-details-bottom-nav justify-content-end">Next Post<i
                                        class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="rv-comments-area">
                        <h3 class="rv-comments-area__title">3 Comments:</h3>

                        <div class="rv-single-comment-area">
                            <div class="rv-comment">
                                <div class="rv-comment-commenter__img">
                                    <img src="{{ asset('assets/img/rv-3-member-2.jpg') }}" alt="commenter image">
                                </div>

                                <div class="rv-comment__txt">
                                    <div class="rv-comment-commenter__txt">
                                        <h5 class="rv-comment-commenter__name">Manha Islam</h5>
                                        <h6 class="rv-comment-commenter__date">March 24,2023 at 10:47 pm</h6>
                                    </div>

                                    <p class="rv-comment__descr">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Officia officiis repellat temporibus quibusdam quisquam! Illum
                                        consequatur, ea earum quo explicabo voluptas! Obcaecati ea nobis tenetur
                                        voluptatum, pariatur eligendi adipisci nam?</p>

                                    <div class="rv-comment-bottom-actions">
                                        <button class="rv-comment-reply-btn">Reply</button>
                                    </div>
                                </div>
                            </div>

                            <div class="rv-comment-reply">
                                <div class="rv-comment-commenter__img">
                                    <img src="{{ asset('assets/img/rv-5-member-1.jpg') }}" alt="commenter image">
                                </div>

                                <div class="rv-comment__txt">
                                    <div class="rv-comment-commenter__txt">
                                        <h5 class="rv-comment-commenter__name">Bristy Anam <span
                                                class="rv-comment-commenter-state">Replied to Manha Islam</span>
                                        </h5>
                                        <h6 class="rv-comment-commenter__date">March 25,2023 at 11:47 am</h6>
                                    </div>

                                    <p class="rv-comment__descr">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Officia officiis repellat temporibus quibusdam quisquam! Illum
                                        consequatur, ea earum quo explicabo voluptas! Obcaecati ea nobis tenetur
                                        voluptatum, pariatur eligendi adipisci nam?</p>

                                    <div class="rv-comment-bottom-actions">
                                        <button class="rv-comment-reply-btn">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rv-comment-form-area">
                        <h3 class="rv-comments-area__title">Leave a comment</h3>
                        <form action="#" class="rv-comment-form">
                            <div class="row g-30">
                                <div class="col-sm-6">
                                    <input type="text" required name="commenter-name" id="rv-commenter-name-field"
                                        placeholder="Name">
                                </div>

                                <div class="col-sm-6">
                                    <input type="email" required name="commenter-email"
                                        id="rv-commenter-email-field" placeholder="E-mail">
                                </div>

                                <div class="col-12">
                                    <input type="url" name="commenter-website" id="rv-commenter-website"
                                        placeholder="Website">
                                </div>

                                <div class="col-12">
                                    <textarea name="commenter-comment" required id="rv-commenter-txt-field"
                                        rows="10" placeholder="Type your comment here"></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="rv-comment-form__checkbox">
                                        <input type="checkbox" required name="rv-commenter-save-info"
                                            id="rv-commenter-save-info">
                                        <label for="rv-commenter-save-info">Save my name, email, and website in this
                                            browser for the next time I comment.</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="rv-3-def-btn rv-inner-btn">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-8 col-10 col-xxs-12">
                <div class="rv-blog-details-right rv-blog-details-search">
                    <h3 class="rv-blog-details-right__title">Search</h3>
                    <form>
                        <input type="text" name="rv-search" id="rv-blog-details-search-input"
                            placeholder="Search Here...">
                        <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                    </form>
                </div>

                <div class="rv-blog-details-right rv-blog-details-categories">
                    <h3 class="rv-blog-details-right__title">Categories</h3>
                    <ul>
                        <li>
                            <a href="#" class="rv-blog-details-category">
                                <span class="rv-blog-details-category-name">BUSINESS</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="rv-blog-details-category">
                                <span class="rv-blog-details-category-name">INSIGHTS</span>

                            </a>
                        </li>

                        <li>
                            <a href="#" class="rv-blog-details-category">
                                <span class="rv-blog-details-category-name">LATEST</span>

                            </a>
                        </li>

                        <li>
                            <a href="#" class="rv-blog-details-category">
                                <span class="rv-blog-details-category-name">PODCASTS</span>

                            </a>
                        </li>

                        <li>
                            <a href="#" class="rv-blog-details-category">
                                <span class="rv-blog-details-category-name">PRESS RELEASES</span>

                            </a>
                        </li>

                        <li>
                            <a href="#" class="rv-blog-details-category">
                                <span class="rv-blog-details-category-name">TRENDING</span>

                            </a>
                        </li>
                    </ul>
                </div>

                <div class="rv-blog-details-right rv-blog-details-recents">
                    <h3 class="rv-blog-details-right__title">Recent Posts</h3>
                    <div class="rv-recent-blog">
                        <img class="rv-recent-blog__img" src="{{ asset('assets/img/rv-4-blog-10.jpg') }}" alt="blog image">
                        <div class="rv-recent-blog__txt">
                            <span class="rv-recent-blog__date"><i class="fa-light fa-calendar-alt"></i> Jan 21,
                                2023</span>
                            <h4 class="rv-recent-blog__title"><a href="blog-details.html">Steps To Enter The Web
                                    Design Field in 2023.</a></h4>
                        </div>
                    </div>

                    <div class="rv-recent-blog">
                        <img class="rv-recent-blog__img" src="{{ asset('assets/img/rv-4-blog-12.jpg') }}" alt="blog image">
                        <div class="rv-recent-blog__txt">
                            <span class="rv-recent-blog__date"><i class="fa-light fa-calendar-alt"></i> March 02,
                                2023</span>
                            <h4 class="rv-recent-blog__title"><a href="blog-details.html">Recent Updates on The
                                    Economic & Digital.</a></h4>
                        </div>
                    </div>

                    <div class="rv-recent-blog">
                        <img class="rv-recent-blog__img" src="{{ asset('assets/img/rv-4-blog-1.jpg') }}" alt="blog image">
                        <div class="rv-recent-blog__txt">
                            <span class="rv-recent-blog__date"><i class="fa-light fa-calendar-alt"></i> July 30,
                                2023</span>
                            <h4 class="rv-recent-blog__title"><a href="blog-details.html">How Developers Removing
                                    Speculation.</a></h4>
                        </div>
                    </div>
                </div>

                <div class="rv-blog-details-right">
                    <h3 class="rv-blog-details-right__title">Related Tags</h3>
                    <div class="rv-blog-details-tags flex-wrap">
                        <a href="#" class="rv-blog-details-tag">Education</a>
                        <a href="#" class="rv-blog-details-tag">Study</a>
                        <a href="#" class="rv-blog-details-tag">Mind Training</a>
                        <a href="#" class="rv-blog-details-tag">Focus</a>
                        <a href="#" class="rv-blog-details-tag">Manifestation</a>
                        <a href="#" class="rv-blog-details-tag">LMS</a>
                        <a href="#" class="rv-blog-details-tag">Art</a>
                        <a href="#" class="rv-blog-details-tag">Time Management</a>
                        <a href="#" class="rv-blog-details-tag">Hard Work</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BLOG DETAILS END -->


@endsection
