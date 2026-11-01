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
                <h1> BOOK BY CATEGORY</h1>
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
                           BOOK BY CATEGORY
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

       <section class="shop-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title mb- wow fadeInUp" data-wow-delay=".3s">
                    <h2>category</h2>
                </div>
                <a class='theme-btn style-2 wow fadeInUp' data-wow-delay='.5s' href='shop.html'>Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="book-shop-wrapper">
             @foreach ($category as $book1)

    <div class="shop-box-items style-2">

        <!-- Book Image -->
        <div class="book-thumb center">

            <a href="shop-details.html">

                <img
                    src="{{ asset('storage/books_pics/' . $book1->image) }}"
                    alt="{{ $book1->title }}"
                    class="img-fluid"
                >

            </a>

            <ul class="shop-icon d-grid justify-content-center align-items-center">

                <li>
                    <a href="shop-cart.html">
                        <i class="far fa-heart"></i>
                    </a>
                </li>

                <li>
                    <a href="shop-cart.html">
                        <img
                            class="icon"
                            src="{{ asset('user/assets/img/icon/shuffle.svg') }}"
                            alt="shuffle"
                        >
                    </a>
                </li>

                <li>
                    <a href="shop-details.html">
                        <i class="far fa-eye"></i>
                    </a>
                </li>

            </ul>

        </div>


        <!-- Book Content -->
        <div class="shop-content">

            <h3>
                <a href="shop-details.html">
                    {{ $book1->title }}
                </a>
            </h3>

            <ul class="price-list">

                <li>
                    Rs. {{ $book1->price }}
                </li>

            </ul>


            <ul class="author-post">

                <li class="authot-list">

                    <span class="thumb">

                        <img
                            src="{{ asset('user/assets/img/testimonial/client-1.png') }}"
                            alt="author"
                        >

                    </span>

                    <span class="content">

                        (Author)
                        {{ $book1->book_author->name ?? 'Unknown Author' }}

                    </span>

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


        <!-- Add To Cart -->
        <div class="shop-button">

            <a class="theme-btn" href="{{route('booksdetail',$book1->id)}}">
                Add To Cart
            </a>

        </div>

    </div>

@endforeach
                
          

                <div class="cta-shop-box">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                        Find Your Nest
                        Books!
                    </h2>
                    <h6 class="wow fadeInUp" data-wow-delay=".4s">And get your 25% discount now!</h6>
                    <a class='theme-btn wow fadeInUp' data-wow-delay='.6s' href='shop.html'>Shop Now <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                    <div class="girl-shape">
                        <img src="{{asset('user/assets/img/girl-shape.png')}}" alt="shape-img">
                    </div>
                    <div class="circle-shape">
                        <img src="{{asset('user/assets/img/circle-shape.png')}}" alt="shape-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

    