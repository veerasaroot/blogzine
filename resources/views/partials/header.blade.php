<header class="navbar-light navbar-sticky header-static">
    <div class="navbar-top d-none d-lg-block small">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center my-2">
                <!-- Top bar left -->
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link ps-0" href="about-us.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://themes.getbootstrap.com/store/webestica/">Buy now!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.html">Login / Join</a>
                    </li>
                </ul>
                <!-- Top bar right -->
                <div class="d-flex align-items-center">
                    <!-- Font size accessibility START -->
                    <div class="btn-group me-3" role="group" aria-label="font size changer">
                        <input type="radio" class="btn-check" name="fntradio" id="font-sm">
                        <label class="btn btn-xs btn-outline-primary mb-0" for="font-sm">A-</label>

                        <input type="radio" class="btn-check" name="fntradio" id="font-default" checked>
                        <label class="btn btn-xs btn-outline-primary mb-0" for="font-default">A</label>

                        <input type="radio" class="btn-check" name="fntradio" id="font-lg">
                        <label class="btn btn-xs btn-outline-primary mb-0" for="font-lg">A+</label>
                    </div>

                    <!-- Dark mode options START -->
                    <div class="nav-item dropdown mx-2">
                        <!-- Switch button -->
                        <button class="modeswitch" id="bd-theme" type="button" aria-expanded="false"
                                data-bs-toggle="dropdown" data-bs-display="static">
                            <svg class="theme-icon-active">
                                <use href="#"></use>
                            </svg>
                        </button>
                        <!-- Dropdown items -->
                        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="light">
                                    <svg width="16" height="16" fill="currentColor"
                                         class="bi bi-brightness-high-fill fa-fw mode-switch me-1"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                        <use href="#"></use>
                                    </svg>
                                    Light
                                </button>
                            </li>
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor"
                                         class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                                        <path
                                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                                        <use href="#"></use>
                                    </svg>
                                    Dark
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor"
                                         class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                                        <use href="#"></use>
                                    </svg>
                                    Auto
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- Dark mode options END -->

                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-youtube-square"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 pe-0 fs-5" href="#"><i class="fab fa-vimeo"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Divider -->
            <div class="border-bottom border-2 border-primary opacity-1"></div>
        </div>
    </div>

    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="index-2.html">
                <img class="navbar-brand-item light-mode-item" src="{{ asset('assets/images/logo.svg') }}"
                     alt="logo">
                <img class="navbar-brand-item dark-mode-item" src="{{ asset('assets/images/logo-light.svg') }}"
                     alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Main navbar START -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll mx-auto">

                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="homeMenu" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="dropdown-menu" aria-labelledby="homeMenu">
                            <li><a class="dropdown-item active" href="index-2.html">Home default</a></li>
                            <li><a class="dropdown-item" href="index-lazy.html">Home lazy load</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Magazine classic</a></li>
                            <li><a class="dropdown-item" href="index-4.html">Magazine</a></li>
                            <li><a class="dropdown-item" href="index-5.html">Home cards</a></li>
                            <li><a class="dropdown-item" href="index-6.html">Blog classic</a></li>
                            <li><a class="dropdown-item" href="index-7.html">Blog Personal </a></li>
                            <li><a class="dropdown-item" href="index-8.html">Blog Vintage</a></li>
                            <li><a class="dropdown-item" href="index-9.html">Blog Tech</a></li>
                            <li><a class="dropdown-item" href="index-10.html">Blog Fashion</a></li>
                            <li><a class="dropdown-item" href="index-11.html">Blog Podcast</a></li>
                            <li><a class="dropdown-item" href="index-12.html">Home Shop </a></li>
                        </ul>
                    </li>

                    <!-- Nav item 2 Pages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                            <li><a class="dropdown-item" href="about-us.html">About</a></li>
                            <li><a class="dropdown-item" href="contact-us.html">Contact</a></li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Shop</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li><a class="dropdown-item" href="shop-grid.html">Shop grid</a></li>
                                    <li><a class="dropdown-item" href="shop-detail.html">Shop detail</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="my-cart.html">Cart</a></li>
                                    <li><a class="dropdown-item" href="empty-cart.html">Empty Cart</a></li>
                                </ul>
                            </li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Other Archives</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li><a class="dropdown-item" href="author.html">Author Page</a></li>
                                    <li><a class="dropdown-item" href="categories.html">Category page 1</a></li>
                                    <li><a class="dropdown-item" href="categories-2.html">Category page 2</a></li>
                                    <li><a class="dropdown-item" href="tag.html"># tag</a></li>
                                    <li><a class="dropdown-item" href="search-result.html">Search result</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="404.html">Error 404</a></li>
                            <li><a class="dropdown-item" href="signin.html">signin</a></li>
                            <li><a class="dropdown-item" href="signup.html">signup</a></li>
                            <li><a class="dropdown-item" href="offline.html">offline</a></li>
                            <!-- Dropdown submenu levels -->
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                    <!-- dropdown submenu open left -->
                                    <li class="dropdown-submenu dropstart">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
                                        <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
                                    <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="docs/index.html" target="_blank">
                                    <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="rtl/index.html" target="_blank">
                                    <i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/"
                                   target="_blank">
                                    <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy blogzine!
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Nav item 3 Post -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Post</a>
                        <ul class="dropdown-menu" aria-labelledby="postMenu">
                            <!-- dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Post grid</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li><a class="dropdown-item" href="post-grid.html">Post grid</a></li>
                                    <li><a class="dropdown-item" href="post-grid-4-col.html">Post grid 4 col</a>
                                    </li>
                                    <li><a class="dropdown-item" href="post-grid-masonry.html">Post grid masonry</a>
                                    </li>
                                    <li><a class="dropdown-item" href="post-grid-masonry-filter.html">Post grid
                                            masonry
                                            filter</a></li>
                                    <li><a class="dropdown-item" href="post-large-and-grid.html">Post mixed large
                                            than
                                            grid</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="post-list.html">Post list</a></li>
                            <li><a class="dropdown-item" href="post-list-2.html">Post list 2</a></li>
                            <li><a class="dropdown-item" href="post-cards.html">Post card</a></li>
                            <li><a class="dropdown-item" href="post-overlay.html">Post Overlay</a></li>
                            <li><a class="dropdown-item" href="post-types.html">Post types</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="post-single.html">Post single magazine</a></li>
                            <li><a class="dropdown-item" href="post-single-2.html">Post single classic</a></li>
                            <li><a class="dropdown-item" href="post-single-3.html">Post single minimal</a></li>
                            <li><a class="dropdown-item" href="post-single-4.html">Post single card</a></li>
                            <li><a class="dropdown-item" href="post-single-5.html">Post single review</a></li>
                            <li><a class="dropdown-item" href="post-single-6.html">Post single video</a></li>
                            <li><a class="dropdown-item" href="podcast-single.html">Podcast single</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="pagination-styles.html">Pagination styles</a></li>
                        </ul>
                    </li>

                    <!-- Nav item 4 Mega menu -->
                    <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"> Lifestyle</a>
                        <div class="dropdown-menu" aria-labelledby="megaMenu">
                            <div class="container">
                                <div class="row g-4 p-3 flex-fill">
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card bg-transparent">
                                            <!-- Card img -->
                                            <img class="card-img rounded"
                                                 src="{{ asset('assets/images/blog/16by9/small/01.jpg') }}"
                                                 alt="Card image">
                                            <div class="card-body px-0 pt-3">
                                                <h6 class="card-title mb-0"><a href="#"
                                                                               class="btn-link text-reset fw-bold">7
                                                        common mistakes everyone makes while traveling</a></h6>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                    <li class="nav-item">
                                                        <a href="#" class="text-reset btn-link">Joan Wallace</a>
                                                    </li>
                                                    <li class="nav-item">Feb 18, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card bg-transparent">
                                            <!-- Card img -->
                                            <img class="card-img rounded"
                                                 src="{{ asset('assets/images/blog/16by9/small/02.jpg') }}"
                                                 alt="Card image">
                                            <div class="card-body px-0 pt-3">
                                                <h6 class="card-title mb-0"><a href="#"
                                                                               class="btn-link text-reset fw-bold">12
                                                        worst types of business accounts you follow on Twitter</a>
                                                </h6>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                    <li class="nav-item">
                                                        <a href="#" class="text-reset btn-link">Lori Stevens</a>
                                                    </li>
                                                    <li class="nav-item">Jun 03, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card bg-transparent">
                                            <!-- Card img -->
                                            <img class="card-img rounded"
                                                 src="{{ asset('assets/images/blog/16by9/small/03.jpg') }}"
                                                 alt="Card image">
                                            <div class="card-body px-0 pt-3">
                                                <h6 class="card-title mb-0"><a href="#"
                                                                               class="btn-link text-reset fw-bold">Skills
                                                        that you can learn from business</a></h6>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                    <li class="nav-item">
                                                        <a href="#" class="text-reset btn-link">Judy Nguyen</a>
                                                    </li>
                                                    <li class="nav-item">Sep 07, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="bg-primary bg-opacity-10 p-4 text-center h-100 w-100 rounded">
                                            <span>The Blogzine</span>
                                            <h3>Premium Membership</h3>
                                            <p>Become a Member Today!</p>
                                            <a href="#" class="btn btn-warning">View pricing plans</a>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                </div> <!-- Row END -->
                                <!-- Trending tags -->
                                <div class="row px-3">
                                    <div class="col-12">
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">Trending tags:</li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-primary-soft">Travel</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-warning-soft">Business</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-success-soft">Tech</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-danger-soft">Gadgets</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-info-soft">Lifestyle</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-primary-soft">Vaccine</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-success-soft">Sports</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-danger-soft">Covid-19</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"
                                                                            class="btn btn-sm btn-info-soft">Politics</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                        </div>
                    </li>

                    <!-- Nav item 5 link-->
                    <li class="nav-item"><a class="nav-link" href="dashboard.html">Dashboard</a></li>
                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Nav right START -->
            <div class="nav flex-nowrap align-items-center">
                <!-- Nav Button -->
                <div class="nav-item d-none d-md-block">
                    <a href="#" class="btn btn-sm btn-danger mb-0 mx-2">Subscribe!</a>
                </div>
                <!-- Nav Search -->
                <div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
                    <a class="nav-link dropdown-toggle" role="button" href="#" id="navSearch"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <i class="bi bi-search fs-4"> </i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
                        <form class="input-group">
                            <input class="form-control border-success" type="search" placeholder="Search"
                                   aria-label="Search">
                            <button class="btn btn-success m-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <!-- Offcanvas menu toggler -->
                <div class="nav-item">
                    <a class="nav-link p-0" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button"
                       aria-controls="offcanvasMenu">
                        <i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>
                    </a>
                </div>
            </div>
            <!-- Nav right END -->
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
