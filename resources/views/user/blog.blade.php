@extends('user.navbar')
@section('nav')
    <!-- Sidebar Area Here -->
    <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
        <div class="side_bar_overlay"></div>
        <div class="cart-title mb-50">
            <h4>Log in</h4>
        </div>
        <div class="login-sidebar">
            <form action="#" id="contact-form" method="POST">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="form-clt">
                            <span>Username or email address *</span>
                            <input type="text" name="name15" id="name15" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-clt">
                            <span>Password *</span>
                            <input id="password" type="password" placeholder="">
                            <div class="icon"><i class="fa-regular fa-eye"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="theme-btn" type="submit"><span>Log In</span></button>
                    </div>
                    <div class="col-lg-12">
                        <div class="from-cheak-items">
                            <div class="form-check d-flex gap-2 from-customradio">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Remember Me
                                </label>
                            </div>
                            <p>Forgot Password?</p>
                        </div>
                    </div>
                </div>
            </form>
            <p class="text">Or login with</p>
            <div class="social-item">
                <a href="#" class="facebook-text"><img src="{{asset('user/assets/img/facebook.png')}}" alt="img">FACEBOOK</a>
                <a href="#" class="facebook-text google-text"><img src="{{asset('user/assets/img/google.png')}}" alt="img">Google</a>
            </div>
            <div class="user-icon-box">
                <img src="{{asset('user/assets/img/user.png')}}" alt="img">
                <p>No account yet?</p>
                <a href="account.html">Create an Account</a>
            </div>
        </div>
        <button id="closeButton" class="x-mark-icon"><i class="fas fa-times"></i></button>
    </div>

    <!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover section-padding" style="background-image: url({{asset('user/assets/img/hero/breadcrumb-bg.jpg);')}}">
        <div class="container">
            <div class="page-heading">
                <h1>Blog List</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href='index.html'>
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Blog List
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- News Standard Section Start -->
    <section class="news-standard fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-9 col-lg-8">
                    <div class="news-standard-wrapper">
                        <div class="news-standard-items">
                            <div class="news-thumb">
                                <img src="{{asset('user/assets/img/news/post-1.jpg')}}" alt="img">
                                <div class="post">
                                    <span>Educations</span>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        Feb 10, 2024
                                    </li>
                                    <li>
                                        <i class="far fa-user"></i>
                                        By admin
                                    </li>
                                </ul>
                                <h3>
                                    <a href='news-details.html'>Top 10 Tarot Decks For The Tarot world Summit</a>
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur et ipsum
                                    ut volutpat. Morbi a mollis felis. Nam consectetur lectus vel lorem facilisis, quis
                                    viverra purus pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce dui lacus, tempor a metus vel, varius rhoncus nunc. Suspendisse luctus feugiat
                                    dictum. Curabitur ipsum velit, viverra in pretium eget, molestie maximus magna.
                                </p>
                                <a class='theme-btn style-2 mt-4' href='news-details.html'>
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="news-standard-items">
                            <div class="news-thumb">
                                <img src="{{asset('user/assets/img/news/post-2.jpg')}}" alt="img">
                                <div class="post">
                                    <span>Books Store</span>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        Feb 10, 2024
                                    </li>
                                    <li>
                                        <i class="far fa-user"></i>
                                        By admin
                                    </li>
                                </ul>
                                <h3>
                                    <a href='news-details.html'>Eu parturient dictumst fames quam tempor</a>
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur et ipsum
                                    ut volutpat. Morbi a mollis felis. Nam consectetur lectus vel lorem facilisis, quis
                                    viverra purus pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce dui lacus, tempor a metus vel, varius rhoncus nunc. Suspendisse luctus feugiat
                                    dictum. Curabitur ipsum velit, viverra in pretium eget, molestie maximus magna.
                                </p>
                                <a class='theme-btn style-2 mt-4' href='news-details.html'>
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="news-standard-items">
                            <div class="news-thumb">
                                <img src="{{asset('user/assets/img/news/post-3.jpg')}}" alt="img">
                                <div class="post">
                                    <span>Activities</span>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        Feb 10, 2024
                                    </li>
                                    <li>
                                        <i class="far fa-user"></i>
                                        By admin
                                    </li>
                                </ul>
                                <h3>
                                    <a href='news-details.html'>All Inclusive Ultimate Circle Island Day with Lunch </a>
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur et ipsum
                                    ut volutpat. Morbi a mollis felis. Nam consectetur lectus vel lorem facilisis, quis
                                    viverra purus pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce dui lacus, tempor a metus vel, varius rhoncus nunc. Suspendisse luctus feugiat
                                    dictum. Curabitur ipsum velit, viverra in pretium eget, molestie maximus magna.
                                </p>
                                <a class='theme-btn style-2 mt-4' href='news-details.html'>
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class='previous' href='news.html'>Previous</a></li>
                                <li><a class='page-numbers' href='news.html'>1</a></li>
                                <li><a class='page-numbers' href='news.html'>2</a></li>
                                <li><a class='page-numbers' href='news.html'>3</a></li>
                                <li><a class='page-numbers' href='news.html'>...</a></li>
                                <li><a class='next' href='news.html'>Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="main-sidebar">
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"><i class="fa-sharp fa-light fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    <li><a href='news-details.html'>Adventure</a> <span>(5)</span></li>
                                    <li><a href='news-details.html'>Education</a> <span>(3)</span></li>
                                    <li class="active"><a href='news-details.html'>Romance</a><span>(6)</span></li>
                                    <li><a href='news-details.html'>Modern Fiction</a> <span>(2)</span></li>
                                    <li><a href='news-details.html'>Contemporary</a> <span>(4)</span></li>
                                    <li><a href='news-details.html'>Art & Literature</a> <span>(7)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="recent-post-area">
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{asset('user/assets/img/news/pp3.jpg')}}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-calendar-days"></i>
                                                18 Dec, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href='news-details.html'>
                                                Top 10 Tarot Decks For The
                                                Tarot World Summit
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{asset('user/assets/img/news/pp4.jpg')}}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-calendar-days"></i>
                                                Mar 20, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href='news-details.html'>
                                                Eu Parturient Dictumst Fames Quam Tempor
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{asset('user/assets/img/news/pp5.jpg')}}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-calendar-days"></i>
                                                Mar 10, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href='news-details.html'>
                                                Students Intelligence in education in Building..
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Tags</h3>
                            </div>
                            <div class="news-widget-categories">
                                <div class="tagcloud">
                                    <a href="news-standard.html">Romance</a>
                                    <a href='news-details.html'>Books</a>
                                    <a href='news-details.html'>Tips & Tricks</a>
                                    <a href='news-details.html'>Adventure</a>
                                    <a href='news-details.html'>Education</a>
                                    <a href='news-details.html'>Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection