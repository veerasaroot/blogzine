@extends('layouts.app')
@section('title', 'Blogzine - Blog and Magazine Bootstrap 5 Theme')
@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
        Trending START -->
        <section class="py-2">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 bg-primary bg-opacity-10 p-2 rounded">
                        <div class="d-sm-flex align-items-center text-center text-sm-start">
                            <!-- Title -->
                            <div class="me-3">
                                <span class="badge bg-primary p-2 px-3">Trending:</span>
                            </div>
                            <!-- Slider -->
                            <div class="tiny-slider arrow-end arrow-xs arrow-white arrow-round arrow-md-none">
                                <div class="tiny-slider-inner"
                                     data-autoplay="true"
                                     data-hoverpause="true"
                                     data-gutter="0"
                                     data-arrow="true"
                                     data-dots="false"
                                     data-items="1">
                                    <!-- Slider items -->
                                    <div><a href="#" class="text-reset btn-link">The most common business debate isn't
                                            as
                                            black and white as you might think</a></div>
                                    <div><a href="#" class="text-reset btn-link">How the 10 worst business fails of all
                                            time
                                            could have been prevented </a></div>
                                    <div><a href="#" class="text-reset btn-link">The most common business debate isn't
                                            as
                                            black and white as you might think </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Trending END -->

        <!-- =======================
        Main hero START -->
        <section class="pt-4 pb-0 card-grid">
            <div class="container">
                <div class="row g-4">
                    <!-- Left big card -->
                    <div class="col-lg-6">
                        <div class="card card-overlay-bottom card-grid-lg card-bg-scale"
                             style="background-image:url({{ asset('assets/images/blog/1by1/01.jpg') }}); background-position: center left; background-size: cover;">
                            <!-- Card featured -->
                            <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                                <div class="w-100 mt-auto">
                                    <!-- Card category -->
                                    <a href="#" class="badge text-bg-danger mb-2"><i
                                            class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                                    <!-- Card title -->
                                    <h2 class="text-white h1"><a href="post-single-4.html"
                                                                 class="btn-link stretched-link text-reset">Ten
                                            tell-tale
                                            signs you need to get a new startup.</a></h2>
                                    <p class="text-white">No visited raising gravity outward subject my cottage Mr be.
                                        Hold
                                        do at tore in park feet near my case. </p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center text-white position-relative">
                                                    <div class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle"
                                                             src="{{ asset('assets/images/avatar/11.jpg') }}"
                                                             alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#"
                                                                             class="stretched-link text-reset btn-link">Louis</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Nov 15, 2022</li>
                                        <li class="nav-item">5 min read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right small cards -->
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <!-- Card item START -->
                            <div class="col-12">
                                <div class="card card-overlay-bottom card-grid-sm card-bg-scale"
                                     style="background-image:url({{ asset('assets/images/blog/1by1/02.jpg') }}); background-position: center left; background-size: cover;">
                                    <!-- Card Image -->
                                    <!-- Card Image overlay -->
                                    <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-warning mb-2"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                                            <!-- Card title -->
                                            <h4 class="text-white"><a href="post-single-4.html"
                                                                      class="btn-link stretched-link text-reset">Best
                                                    Pinterest boards for learning about business</a></h4>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item position-relative">
                                                    <div class="nav-link">by <a href="#"
                                                                                class="stretched-link text-reset btn-link">Bryan</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Aug 18, 2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-md-6">
                                <div class="card card-overlay-bottom card-grid-sm card-bg-scale"
                                     style="background-image:url({{ asset('assets/images/blog/1by1/03.jpg') }}); background-position: center left; background-size: cover;">
                                    <!-- Card Image overlay -->
                                    <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-success mb-2"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                                            <!-- Card title -->
                                            <h4 class="text-white"><a href="post-single-4.html"
                                                                      class="btn-link stretched-link text-reset">Five
                                                    intermediate guide to business</a></h4>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item position-relative">
                                                    <div class="nav-link">by <a href="#"
                                                                                class="stretched-link text-reset btn-link">Joan</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Jun 03, 2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-md-6">
                                <div class="card card-overlay-bottom card-grid-sm card-bg-scale"
                                     style="background-image:url({{ asset('assets/images/blog/1by1/04.jpg') }}); background-position: center left; background-size: cover;">
                                    <!-- Card Image overlay -->
                                    <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-info mb-2"><i
                                                    class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                                            <!-- Card title -->
                                            <h4 class="text-white"><a href="post-single-4.html"
                                                                      class="btn-link stretched-link text-reset">15
                                                    reasons
                                                    to choose startup</a></h4>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item position-relative">
                                                    <div class="nav-link">by <a href="#"
                                                                                class="stretched-link text-reset btn-link">Amanda</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Jan 28, 2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Main hero END -->

        <!-- =======================
        Main content START -->
        <section class="position-relative">
            <div class="container" data-sticky-container>
                <div class="row">
                    <!-- Main Post START -->
                    <div class="col-lg-9">
                        <!-- Title -->
                        <div class="mb-4">
                            <h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
                            <p>Latest breaking news, pictures, videos, and special reports</p>
                        </div>
                        <div class="row gy-4">
                            <!-- Card item START -->
                            <div class="col-sm-6">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/images/blog/4by3/01.jpg') }}"
                                             alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-warning mb-2"><i
                                                        class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <!-- Sponsored Post -->
                                        <a href="#!" class="mb-0 text-body small" tabindex="0" role="button"
                                           data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus"
                                           data-bs-placement="top"
                                           data-bs-content="You're seeing this ad because your activity meets the intended audience of our site.">
                                            <i class="bi bi-info-circle ps-1"></i> Sponsored
                                        </a>
                                        <h4 class="card-title mt-2"><a href="post-single.html"
                                                                       class="btn-link text-reset fw-bold">12 worst
                                                types of
                                                business accounts you follow on Twitter</a></h4>
                                        <p class="card-text">He moonlights difficult engrossed it, sportsmen. Interested
                                            has
                                            all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment
                                            alteration to</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                 src="{{ asset('assets/images/avatar/01.jpg') }}"
                                                                 alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Samuel</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Jan 22, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/images/blog/4by3/06.jpg') }}"
                                             alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <div class="text-end ms-auto">
                                                    <!-- Card format icon -->
                                                    <div
                                                        class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle"
                                                        title="This post has video"><i class="fas fa-video"></i></div>
                                                </div>
                                            </div>
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-danger mb-2"><i
                                                        class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single.html"
                                                                  class="btn-link text-reset fw-bold">Dirty little
                                                secrets
                                                about the business industry</a></h4>
                                        <p class="card-text">Place voice no arises along to. Parlors waiting so against
                                            me
                                            no. Wishing calling is warrant settled was lucky. Express besides it present
                                            if
                                            at an opinion visitor.</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                 src="{{ asset('assets/images/avatar/02.jpg') }}"
                                                                 alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Dennis</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Mar 07, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/images/blog/4by3/03.jpg') }}"
                                             alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-success mb-2"><i
                                                        class="fas fa-circle me-2 small fw-bold"></i>Gadgets</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single.html"
                                                                  class="btn-link text-reset fw-bold">Bad habits that
                                                people
                                                in the industry need to quit</a></h4>
                                        <p class="card-text">For who thoroughly her boy estimating conviction. Removed
                                            demands expense account in outward tedious do. Particular way thoroughly
                                            unaffected</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                 src="{{ asset('assets/images/avatar/03.jpg') }}"
                                                                 alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Bryan</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Jun 17, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/images/blog/4by3/04.jpg') }}"
                                             alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge bg-primary mb-2"><i
                                                        class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single.html"
                                                                  class="btn-link text-reset fw-bold">Around the web: 20
                                                fabulous infographics about business</a></h4>
                                        <p class="card-text">Projection favorable Mrs can be projecting own. Thirty it
                                            matter enable become admire in giving. See resolved goodness felicity shy
                                            civility domestic had but.</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <div class="avatar-img rounded-circle bg-success">
                                                            <span
                                                                class="text-white position-absolute top-50 start-50 translate-middle fw-bold small">SL</span>
                                                            </div>
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Billy</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Dec 29, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <!-- <img class="card-img" src="{{ asset('assets/images/blog/4by3/05.jpg') }}" alt="Card image"> -->
                                        <div class="card-image position-relative">
                                            <img class="card-img" src="{{ asset('assets/images/blog/4by3/05.jpg') }}"
                                                 alt="Card image">
                                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                <!-- Card overlay -->
                                                <div class="w-100 my-auto">
                                                    <!-- Audio START -->
                                                    <div class="player-wrapper bg-light rounded">
                                                        <audio class="player-audio" crossorigin>
                                                            <source src="{{ asset('assets/images/videos/audio.mp3') }}"
                                                                    type="audio/mp3">
                                                        </audio>
                                                    </div>
                                                    <!-- Audio END -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single.html"
                                                                  class="btn-link text-reset fw-bold">7 common mistakes
                                                everyone makes while traveling</a></h4>
                                        <p class="card-text">Drawings offended yet answered Jennings perceive laughing
                                            six
                                            did far. Rooms oh fully taken by worse do. Points afraid but may end law
                                            lasted. </p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                 src="{{ asset('assets/images/avatar/05.jpg') }}"
                                                                 alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Jacqueline</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Nov 11, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/images/blog/4by3/12.jpg') }}"
                                             alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-danger mb-2"><i
                                                        class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single.html"
                                                                  class="btn-link text-reset fw-bold">5 investment
                                                doubts
                                                you should clarify</a></h4>
                                        <p class="card-text">Was out laughter raptures returned outweigh. Luckily
                                            cheered
                                            colonel I do we attack highest enabled. Tried law yet style child. The bore
                                            of
                                            true of no be deal.</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                 src="{{ asset('assets/images/avatar/06.jpg') }}"
                                                                 alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Carolyn</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Sep 01, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Load more START -->
                            <div class="col-12 text-center mt-5">
                                <button type="button" class="btn btn-primary-soft">Load more post <i
                                        class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
                            </div>
                            <!-- Load more END -->
                        </div>
                    </div>
                    <!-- Main Post END -->
                    <!-- Sidebar START -->
                    <div class="col-lg-3 mt-5 mt-lg-0">
                        <div data-sticky data-margin-top="80" data-sticky-for="767">

                            <!-- Social widget START -->
                            <div class="row g-2">
                                <div class="col-4">
                                    <a href="#" class="bg-facebook rounded text-center text-white-force p-3 d-block">
                                        <i class="fab fa-facebook-square fs-5 mb-2"></i>
                                        <h6 class="m-0">1.5K</h6>
                                        <span class="small">Fans</span>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#"
                                       class="bg-instagram-gradient rounded text-center text-white-force p-3 d-block">
                                        <i class="fab fa-instagram fs-5 mb-2"></i>
                                        <h6 class="m-0">1.8M</h6>
                                        <span class="small">Followers</span>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="bg-youtube rounded text-center text-white-force p-3 d-block">
                                        <i class="fab fa-youtube-square fs-5 mb-2"></i>
                                        <h6 class="m-0">22K</h6>
                                        <span class="small">Subs</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Social widget END -->

                            <!-- Trending topics widget START -->
                            <div>
                                <h4 class="mt-4 mb-3">Trending topics</h4>
                                <!-- Category item -->
                                <div
                                    class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 "
                                    style="background-image:url({{ asset('assets/images/blog/4by3/01.jpg') }}); background-position: center left; background-size: cover;">
                                    <div class="p-3">
                                        <a href="#" class="stretched-link btn-link fw-bold text-white h5">Travel</a>
                                    </div>
                                </div>
                                <!-- Category item -->
                                <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
                                     style="background-image:url({{ asset('assets/images/blog/4by3/02.jpg') }}); background-position: center left; background-size: cover;">
                                    <div class="bg-dark-overlay-4 p-3">
                                        <a href="#" class="stretched-link btn-link fw-bold text-white h5">Business</a>
                                    </div>
                                </div>
                                <!-- Category item -->
                                <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
                                     style="background-image:url({{ asset('assets/images/blog/4by3/03.jpg') }}); background-position: center left; background-size: cover;">
                                    <div class="bg-dark-overlay-4 p-3">
                                        <a href="#" class="stretched-link btn-link fw-bold text-white h5">Marketing</a>
                                    </div>
                                </div>
                                <!-- Category item -->
                                <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
                                     style="background-image:url({{ asset('assets/images/blog/4by3/04.jpg') }}); background-position: center left; background-size: cover;">
                                    <div class="bg-dark-overlay-4 p-3">
                                        <a href="#"
                                           class="stretched-link btn-link fw-bold text-white h5">Photography</a>
                                    </div>
                                </div>
                                <!-- Category item -->
                                <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded"
                                     style="background-image:url({{ asset('assets/images/blog/4by3/05.jpg') }}); background-position: center left; background-size: cover;">
                                    <div class="bg-dark-overlay-4 p-3">
                                        <a href="#" class="stretched-link btn-link fw-bold text-white h5">Sports</a>
                                    </div>
                                </div>
                                <!-- View All Category button -->
                                <div class="text-center mt-3">
                                    <a href="#" class="fw-bold text-body text-primary-hover"><u>View all categories</u></a>
                                </div>
                            </div>
                            <!-- Trending topics widget END -->

                            <div class="row">
                                <!-- Recent post widget START -->
                                <div class="col-12 col-sm-6 col-lg-12">
                                    <h4 class="mt-4 mb-3">Recent post</h4>
                                    <!-- Recent post item -->
                                    <div class="card mb-3">
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <img class="rounded"
                                                     src="{{ asset('assets/images/blog/4by3/thumb/01.jpg') }}" alt="">
                                            </div>
                                            <div class="col-8">
                                                <h6><a href="post-single-2.html"
                                                       class="btn-link stretched-link text-reset fw-bold">The pros and
                                                        cons
                                                        of business agency</a></h6>
                                                <div class="small mt-1">May 17, 2022</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Recent post item -->
                                    <div class="card mb-3">
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <img class="rounded"
                                                     src="{{ asset('assets/images/blog/4by3/thumb/02.jpg') }}" alt="">
                                            </div>
                                            <div class="col-8">
                                                <h6><a href="post-single-2.html"
                                                       class="btn-link stretched-link text-reset fw-bold">5 reasons why
                                                        you
                                                        shouldn't startup</a></h6>
                                                <div class="small mt-1">Apr 04, 2022</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Recent post item -->
                                    <div class="card mb-3">
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <img class="rounded"
                                                     src="{{ asset('assets/images/blog/4by3/thumb/03.jpg') }}" alt="">
                                            </div>
                                            <div class="col-8">
                                                <h6><a href="post-single-2.html"
                                                       class="btn-link stretched-link text-reset fw-bold">Ten questions
                                                        you
                                                        should answer truthfully.</a></h6>
                                                <div class="small mt-1">Jun 30, 2022</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Recent post item -->
                                    <div class="card mb-3">
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <img class="rounded"
                                                     src="{{ asset('assets/images/blog/4by3/thumb/04.jpg') }}" alt="">
                                            </div>
                                            <div class="col-8">
                                                <h6><a href="post-single-2.html"
                                                       class="btn-link stretched-link text-reset fw-bold">Five
                                                        unbelievable
                                                        facts about money.</a></h6>
                                                <div class="small mt-1">Nov 29, 2022</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Recent post widget END -->

                                <!-- ADV widget START -->
                                <div class="col-12 col-sm-6 col-lg-12 my-4">
                                    <a href="#" class="d-block card-img-flash">
                                        <img src="{{ asset('assets/images/adv.png') }}" alt="">
                                    </a>
                                    <div class="smaller text-end mt-2">ads via <a href="#"
                                                                                  class="text-body"><u>Bootstrap</u></a>
                                    </div>
                                </div>
                                <!-- ADV widget END -->
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar END -->
                </div> <!-- Row end -->
            </div>
        </section>
        <!-- =======================
        Main content END -->

        <!-- Divider -->
        <div class="container">
            <div class="border-bottom border-primary border-2 opacity-1"></div>
        </div>

        <!-- =======================
        Section START -->
        <section class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Title -->
                        <div class="mb-4 d-md-flex justify-content-between align-items-center">
                            <h2 class="m-0"><i class="bi bi-megaphone"></i> Sponsored news</h2>
                            <a href="#" class="text-body small"><u>Content by: Bootstrap</u></a>
                        </div>
                        <div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round">
                            <div class="tiny-slider-inner"
                                 data-autoplay="true"
                                 data-hoverpause="true"
                                 data-gutter="24"
                                 data-arrow="true"
                                 data-dots="false"
                                 data-items-xl="4"
                                 data-items-md="3"
                                 data-items-sm="2"
                                 data-items-xs="1">

                                <!-- Card item START -->
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/images/blog/4by3/07.jpg') }}"
                                             alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <div class="text-end ms-auto">
                                                    <!-- Card format icon -->
                                                    <div
                                                        class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle"
                                                        title="8.5 rating">8.5
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <a href="#" class="badge text-bg-info mb-2"><i
                                                        class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html"
                                                                  class="btn-link text-reset fw-bold">7 common mistakes
                                                everyone makes while traveling</a></h5>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                 src="{{ asset('assets/images/avatar/07.jpg') }}"
                                                                 alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Lori</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Mar 07, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/images/blog/4by3/08.jpg') }}"
                                             alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <a href="#" class="badge text-bg-danger mb-2"><i
                                                        class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html"
                                                                  class="btn-link text-reset fw-bold">Skills that you
                                                can
                                                learn from business</a></h5>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <div class="avatar-img rounded-circle bg-warning">
                                                            <span
                                                                class="text-dark position-absolute top-50 start-50 translate-middle fw-bold small">MK</span>
                                                            </div>
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Joan</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Aug 15, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/images/blog/4by3/09.jpg') }}"
                                             alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <a href="#" class="badge text-bg-success mb-2"><i
                                                        class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html"
                                                                  class="btn-link text-reset fw-bold">10 tell-tale signs
                                                you
                                                need to get a new business</a></h5>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                 src="{{ asset('assets/images/avatar/09.jpg') }}"
                                                                 alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Bryan</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Jun 01, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/images/blog/4by3/10.jpg') }}"
                                             alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <div class="text-end ms-auto">
                                                    <!-- Card format icon -->
                                                    <div class="icon-md bg-white-soft bg-blur text-white rounded-circle"
                                                         title="This post has images"><i class="fas fa-image"></i></div>
                                                </div>
                                            </div>
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <a href="#" class="badge bg-primary mb-2"><i
                                                        class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html"
                                                                  class="btn-link text-reset fw-bold">This is why this
                                                year
                                                will be the year of startups</a></h5>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                 src="{{ asset('assets/images/avatar/10.jpg') }}"
                                                                 alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Samuel</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Dec 07, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ asset('assets/images/blog/4by3/11.jpg') }}"
                                             alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <a href="#" class="badge text-bg-warning mb-2"><i
                                                        class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html"
                                                                  class="btn-link text-reset fw-bold">Best Pinterest
                                                Boards
                                                for learning about business</a></h5>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle"
                                                                 src="{{ asset('assets/images/avatar/12.jpg') }}"
                                                                 alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by <a href="#"
                                                                                 class="stretched-link text-reset btn-link">Dennis</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">Sep 07, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Section END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
