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
    <div class="breadcrumb-wrapper bg-cover section-padding"
        style="background-image: url({{asset('user/assets/img/hero/breadcrumb-bg.jpg);')}}">
        <div class="container">
            <div class="page-heading">
                <h1>Author</h1>
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
                            Author
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section Start -->
    <section class="team-section fix section-padding margin-bottom-30">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Featured Author</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus</p>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/01.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Esther Howard</a></h6>
                                <p>10 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/02.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Shikhon Islam</a></h6>
                                <p>07 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/03.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Kawser Ahmed</a></h6>
                                <p>04 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/04.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Brooklyn Simmons</a></h6>
                                <p>15 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/05.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Leslie Alexander</a></h6>
                                <p>05 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/06.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Guy Hawkins</a></h6>
                                <p>12 Published Books</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                    <h2>Top Selling Books</h2>
                </div>
                <a class='theme-btn style-2 wow fadeInUp' data-wow-delay='.5s' href='shop.html'>Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/01.png')}}" alt="img"></a>
                                <ul class="post-box">
                                    <li>
                                        Hot
                                    </li>
                                    <li>
                                        -30%
                                    </li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href='shop-cart.html'>

                                            <img class="icon" src="{{asset('user/assets/img/icon/shuffle.svg')}}" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href='shop-details.html'><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href='shop-details.html'>Simple Things You To <br> Save BOOK</a></h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{asset('user/assets/img/testimonial/client-1.png')}}" alt="img">
                                        </span>
                                        <span class="content">Wilson</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href='shop-cart.html'>

                                            <img class="icon" src="{{asset('user/assets/img/icon/shuffle.svg')}}" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href='shop-details.html'><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href='shop-details.html'>How Deal With Very <br> Bad BOOK</a></h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{asset('user/assets/img/testimonial/client-2.png')}}" alt="img">
                                        </span>
                                        <span class="content">Alexander</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href='shop-cart.html'>

                                            <img class="icon" src="{{asset('user/assets/img/icon/shuffle.svg')}}" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href='shop-details.html'><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href='shop-details.html'>Qple GPad With Retina <br> Sisplay</a></h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{asset('user/assets/img/testimonial/client-3.png')}}" alt="img">
                                        </span>
                                        <span class="content">Esther</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                <ul class="post-box">
                                    <li>
                                        Hot
                                    </li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href='shop-cart.html'>

                                            <img class="icon" src="{{asset('user/assets/img/icon/shuffle.svg')}}" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href='shop-details.html'><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href='shop-details.html'>Qple GPad With Retina <br> Sisplay</a></h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{asset('user/assets/img/testimonial/client-4.png')}}" alt="img">
                                        </span>
                                        <span class="content">Hawkins</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href='shop-cart.html'>

                                            <img class="icon" src="{{asset('user/assets/img/icon/shuffle.svg')}}" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href='shop-details.html'><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> Design Low Book </h5>
                                <h3><a href='shop-details.html'>Simple Things You To <br> Save BOOK</a></h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{asset('user/assets/img/testimonial/client-5.png')}}" alt="img">
                                        </span>
                                        <span class="content">(Author) Albert</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection