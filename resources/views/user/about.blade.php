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
                <h1>About Us</h1>
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
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section Start -->
    <section class="about-section fix section-padding">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image">
                            <img src="{{asset('user/assets/img/about.jpg')}}" alt="img">
                            <div class="video-box">
                                <a href=""
                                    class="video-btn ripple video-popup">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">About the Bookim <br> Books Store</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Nullam convallis ullamcorper nulla. Nam accumsan ac leo quis posuere. Nunc rutrum lorem
                                justo, at blandit mauris ullamcorper tristique. Suspendisse vel ante venenatis,
                                porttitor ligula sed, iaculis metus. Nullam non erat gravida, viverra leo ut, maximus
                                tortor. Pellentesque vitae nunc rhoncus, lacinia nulla sed, commodo lectus. Curabitur at
                                consectetur velit.
                            </p>
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".7s">
                                Morbi cursus enim in consequat suscipit. Quisque id dui ante. Praesent auctor sed velit
                                ac aliquet. Morbi consectetur sem nec ipsum malesuada, ut gravida nisl molestie. Proin
                                hendrerit ullamcorper dui, quis convallis mauris cursus nec. Interdum et malesuada fames
                                ac ante ipsum primis in faucibus. Vivamus ac laoreet orci.
                            </p>
                            <a class='link-btn wow fadeInUp' data-wow-delay='.8s' href='about.html'>Overview <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Banner Section Start -->
    <section class="cta-banner-section fix section-padding pt-0">
        <div class="container">
            <div class="cta-banner-wrapper section-padding bg-cover"
                      style="background-image: url({{asset('assets/img/cta-banner.jpg);')}}">
               
                <div class="book-shape">
                    <img src="{{asset('user/assets/img/cta-book-2.png')}}" alt="shape-img">
                </div>
                <div class="book-shape-2">
                    <img src="{{asset('user/assets/img/cta-book.png')}}" alt="shape-img">
                </div>
                <div class="cta-content text-center">
                    <span>Get 25% <img src="{{asset('user/assets/img/line-shape.png')}}" alt=""></span>
                    <h2 class="mb-40 wow fadeInUp" data-wow-delay=".3s">discount
                        in all <br> kind of
                        super Selling</h2>
                    <a class='theme-btn wow fadeInUp' data-wow-delay='.5s' href='shop.html'>Shop Now
                        <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Customer Feedback</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus</p>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                One of the most powerful takeaways from this book is the emphasis on adopting a mindset
                                of abundance and possibility. The idea that we can choose to see opportunities rather
                                than limitations is a game-changer.
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('{{asset('user/assets/img/testimonial/01.jpg);')}}">
                                        <div class="icon">
                                            <img class="shape" src="{{asset('user/assets/img/testimonial/shape.svg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                        <span>Marketing Coordinator</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="logo">
                                    <img src="{{asset('user/assets/img/testimonial/logo1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                The idea that we can choose to see opportunities rather than limitations is a
                                game-changer. The book encourages readers to step out of their comfort zones and embrace
                                a more positive outlook on life.
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('{{asset('user/assets/img/testimonial/02.jpg);')}}">
                                        <div class="icon">
                                            <img class="shape" src="{{asset('user/assets/img/testimonial/shape.svg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Dianne Russell</h3>
                                        <span>Project Manager</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="logo">
                                    <img src="{{asset('user/assets/img/testimonial/logo2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                "The Art of Possibility" by Rosamund Stone Zander and Benjamin Zander is a
                                transformative read that challenges conventional thinking and opens up new
                                possibilities. As a reader, I found myself profoundly .
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('{{asset('user/assets/img/testimonial/03.jpg);')}}">
                                        <div class="icon">
                                            <img class="shape" src="{{asset('user/assets/img/testimonial/shape.svg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                        <span>Marketing Coordinator</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="logo">
                                    <img src="{{asset('user/assets/img/testimonial/logo1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                From the very first chapter, the authors engage readers with inspiring stories and
                                practical insights. Benjamin Zander's experiences as a conductor bring a unique
                                perspective to leadership .
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('{{asset('user/assets/img/testimonial/04.jpg);')}}">
                                        <div class="icon">
                                            <img class="shape" src="{{asset('user/assets/img/testimonial/shape.svg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                        <span>Marketing Coordinator</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="logo">
                                    <img src="{{asset('user/assets/img/testimonial/logo2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Start -->
    <section class="team-section fix margin-bottom-30 section-padding pt-0">
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

@endsection