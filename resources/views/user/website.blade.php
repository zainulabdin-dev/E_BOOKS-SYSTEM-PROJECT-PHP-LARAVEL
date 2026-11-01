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

    <!-- Hero Section start  -->
    <div class="hero-section hero-1 fix bg-cover" style="background-image: url({{asset('user/assets/img/hero/hero-bg-1.jpg);')}}">

        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-xl-8 col-lg-6">
                    <div class="hero-main-wrapper">
                        <div class="hero-content">
                            <h4 class="wow fadeInUp" data-wow-delay=".2s">editor choice best books <span>Up to 50%
                                    Off</span></h4>
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">Your Next Favorite Book <br>  Is Just a
                               <span
                                    class="line-shape">Click Away <img src="{{asset('user/assets/img/hero/line-shape.png')}}"
                                        alt="shape"></span>
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Sed ac arcu sed felis vulputate molestie. Nullam at
                                urna in velit finibus vestibulum euismod
                                A <br>
                                Urna. Sed quis aliquam leo. Duis iaculis lorem mauris, et convallis du</p>
                        </div>
                        <div class="hero-btn">
                            <a class='theme-btn wow fadeInUp' data-wow-delay='.8s' href='shop.html'>
                                Shop Now <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                            <a class='theme-btn style-2 wow fadeInUp' data-wow-delay='1s' href='shop.html'>
                                view all books <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="girl-img">
                        <img src="{{asset('user/assets/img/hero/hero-girl-1.png')}}" alt="img">
                        <div class="bg-shape">
                            <img src="{{asset('user/assets/img/hero/bg-shape.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section start  -->
    <section class="feature-section fix section-padding">
        <div class="container">
            <div class="feature-wrapper">
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <i class="icon-icon-1"></i>
                    </div>
                    <div class="content">
                        <h3>Return & refund</h3>
                        <p>Money back guarantee</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <i class="icon-icon-2"></i>
                    </div>
                    <div class="content">
                        <h3>Secure Payment</h3>
                        <p>30% off by subscribing</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".6s">
                    <div class="icon">
                        <i class="icon-icon-3"></i>
                    </div>
                    <div class="content">
                        <h3>Quality Support</h3>
                        <p>Always online 24/7</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="icon-icon-4"></i>
                    </div>
                    <div class="content">
                        <h3>Daily Offers</h3>
                        <p>20% off by subscribing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Featured Books</h2>
                </div>
                <a class='theme-btn style-2 fadeInUp' data-wow-delay='.5s' href='shop.html'>Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                   
                    @foreach ($book as $book )
                         <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details.html"><img src="{{asset('storage/books_pics/'. $book->image)}}" style="width: 350px;height:300PX; " ></a>
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
                            
                                <h3><a href='shop-details.html'>{{$book->title}}</a></h3>
                                <ul class="price-list">
                                    <li>RS-{{$book->price}}</li>
                                    <li>
                                        
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                        
                                        </span>
                                        <span class="content">{{$book->book_author->name}}</span>
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
                                <a class='theme-btn' href="{{route('booksdetail',$book->id)}}">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 
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
                          
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Catagories Section start  -->
    <section class="book-catagories-section fix section-padding bg-cover"
        style="background-image: url({{asset('user/assets/img/top-categories-bg.jpg);')}}">
        <div class="container">
            <div class="book-catagories-wrapper">
                <div class="section-title text-center">
                    <span class="icon"><img src="{{asset('user/assets/img/icon/icon-24.svg')}}" alt="icon"></span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Categories Book</h2>
                </div>
                
                      
<section class="py-5" style="background:#f7faf8;">
    <div class="container">
        <div class="row g-4 justify-content-center">

            @foreach ($cat as $cat1)

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 d-flex justify-content-center">

                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 w-100">

                    <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center"
                         style="width:70px;height:70px;background:#eaf6ef;color:#198754;">
                        <i class="fas fa-book fa-2x"></i>
                    </div>

                    <div class="mb-3">
                        <span class="badge rounded-pill px-3 py-2"
                              style="background:#198754;">
                            25 Books
                        </span>
                    </div>

                    <h5 class="fw-bold mb-2">
                        <a href="{{ route('book_by_cat', $cat1->id) }}"
                           class="text-decoration-none text-dark">
                            {{ $cat1->name }}
                        </a>
                    </h5>

                    <p class="text-muted small mb-0 lh-lg">
                        {{ $cat1->description }}
                    </p>

                </div>

            </div>

            @endforeach

        </div>
    </div>
</section>


<style>
    .card {
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-7px);
        box-shadow: 0 12px 30px rgba(25, 135, 84, 0.15) !important;
    }

    .card:hover h5 a {
        color: #198754 !important;
    }
</style>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title mb- wow fadeInUp" data-wow-delay=".3s">
                    <h2>Bookim Top Books</h2>
                </div>
                <a class='theme-btn style-2 wow fadeInUp' data-wow-delay='.5s' href='shop.html'>Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="book-shop-wrapper">
             @foreach ($book1 as $book1)

    <div class="shop-box-items style-2">

        <!-- Book Image -->
        <div class="book-thumb center">

            <a href="shop-details.html">

                <img
                    src="{{ asset('storage/books_pics/' . $book1->image) }}"
                    alt="{{ $book1->title }}"  style="height:300px;"
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

    <!-- Cta Banner Section start  -->
    <section class="cta-banner-section fix section-padding pt-0">
        <div class="container">
            <div class="cta-banner-wrapper section-padding bg-cover"
                style="background-image: url({{asset('user/assets/img/cta-banner.jpg);')}}">
                <div class="book-shape">
                    <img src="{{asset('user/assets/img/cta-book-2.png')}}" alt="shape-img">
                </div>
                <div class="book-shape-2">
                    <img src="{{asset('user/assets/img/cta-book.png')}}" alt="shape-img">
                </div>
                <div class="cta-content text-center">
                    <span class="wow fadeInUp" data-wow-delay=".2s">Get 25% <img src="{{asset('user/assets/img/line-shape.png')}}" alt=""></span>
                    <h2 class="mb-40 wow fadeInUp" data-wow-delay=".4s">discount
                        in all <br> kind of
                        super Selling</h2>
                    <a class='theme-btn wow fadeInUp' data-wow-delay='.6s' href='shop.html'>Shop Now<i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Ratting Book Section start  -->

<section class="top-ratting-book-section fix section-padding bg-cover"
    style="background-image: url({{asset('user/assets/img/ratting-bg.jpg')}})">

    <div class="container">

        <div class="top-ratting-book-wrapper">

            <div class="section-title-area">

                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Top Rating Books
                    </h2>
                </div>

                <a class='theme-btn wow fadeInUp'
                   data-wow-delay='.5s'
                   href='shop.html'>
                    view more books
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>

            </div>


            <div class="row">

                @foreach ($book3 as $book)

                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">

                    <div class="top-ratting-box-items">

                        <div class="book-thumb">

                            <a href="{{ route('detail', $book->id) }}">

                                <img src="{{ asset('storage/books_pics/' . $book->image) }}"
                                     alt="{{ $book->title }}">

                            </a>

                        </div>


                        <div class="book-content">

                            <div class="title-header">

                                <div>

                                    <h5>
                                        Design Low Book
                                    </h5>

                                    <h3>
                                        <a href="{{route('booksdetail',$book->id)}}">
                                            {{ $book->title }}
                                        </a>
                                    </h3>

                                </div>


                                <ul class="shop-icon d-flex justify-content-center align-items-center">

                                    <li>
                                        <a href='shop-cart.html'>
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href='shop-cart.html'>

                                            <img class="icon"
                                                 src="{{asset('user/assets/img/icon/shuffle.svg')}}"
                                                 alt="svg-icon">

                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('booksdetail',$book->id)}}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>

                                </ul>

                            </div>


                            <span class="mt-10">
                                Rs. {{ $book->price }}
                            </span>


                            <ul class="author-post">

                                <li class="authot-list">

                                    <span class="thumb">

                                        <img src="{{asset('user/assets/img/testimonial/client-2.png')}}"
                                             alt="img">

                                    </span>

                                    <span class="content mt-10">
                                        Wilson
                                    </span>

                                </li>

                            </ul>


                            <div class="shop-btn">

                                <div class="star">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>

                                </div>


                                <a class='theme-btn'
                                   href="{{route('booksdetail',$book->id)}}">
                                    Add To Cart
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</section>
```


    <!-- Shop Section start  -->

<section class="shop-section section-padding fix">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="section-title-area">

            <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                <h2>Top Selling Books</h2>
            </div>

            <a class="theme-btn style-2 wow fadeInUp"
               data-wow-delay=".5s"
               href="shop.html">
                Explore More
                <i class="fa-solid fa-arrow-right-long"></i>
            </a>

        </div>


        <!-- BOOK SLIDER -->
        <div class="swiper book-slider">

            <div class="swiper-wrapper">

                @foreach ($book2 as $book)

                <div class="swiper-slide">

                    <div class="shop-box-items style-2">

                        <!-- BOOK IMAGE -->
                        <div class="book-thumb center">

                            <a href="{{ route('detail', $book->id) }}">

                                <img src="{{ asset('storage/books_pics/' . $book->image) }}"
                                     alt="{{ $book->title }}"
                                     style="width: 180px; height: 250px; object-fit: contain;">

                            </a>


                            <!-- HOT LABEL -->
                            <ul class="post-box">
                                <li>Hot</li>
                            </ul>


                            <!-- SHOP ICONS -->
                            <ul class="shop-icon d-grid justify-content-center align-items-center">

                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">

                                        <img class="icon"
                                             src="{{ asset('user/assets/img/icon/shuffle.svg') }}"
                                             alt="svg-icon">

                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('booksdetail',$book->id)}}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </li>

                            </ul>

                        </div>


                        <!-- BOOK CONTENT -->
                        <div class="shop-content">

                            <h5>Design Low Book</h5>

                            <h3>
                                <a href="{{ route('detail', $book->id) }}">
                                    {{ $book->title }}
                                </a>
                            </h3>


                            <!-- PRICE -->
                            <ul class="price-list">

                                <li>
                                    Rs. {{ $book->price }}
                                </li>

                            </ul>


                            <!-- AUTHOR + RATING -->
                            <ul class="author-post">

                                <li class="authot-list">

                                    <span class="thumb">

                                        <img src="{{ asset('user/assets/img/testimonial/client-1.png') }}"
                                             alt="author">

                                    </span>

                                    <span class="content">
                                        Author
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


                        <!-- ADD TO CART -->
                        <div class="shop-button">

                            <a class="theme-btn"
                               href="{{ route('detail', $book->id) }}">

                                Add To Cart

                            </a>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>
</section>



    <!-- Testimonial Section start  -->
    <section class="testimonial-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-left">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">What our client say</h2>
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

    <!-- Team Section start  -->
  <section class="team-section fix section-padding pt-0 margin-bottom-30">
    <div class="container">

        <div class="section-title text-center">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                Featured Author
            </h2>

            <p class="wow fadeInUp" data-wow-delay=".5s">
                Interdum et malesuada fames ac ante ipsum primis in
                faucibus. <br>
                Donec at nulla nulla. Duis posuere ex lacus
            </p>
        </div>

        <div class="array-button">
            <button class="array-prev">
                <i class="fal fa-arrow-left"></i>
            </button>

            <button class="array-next">
                <i class="fal fa-arrow-right"></i>
            </button>
        </div>

        <div class="swiper team-slider">
            <div class="swiper-wrapper">

                @foreach ($author as $author1)

                <div class="swiper-slide">

                    <div class="team-box-items">

                        <div class="team-image">

                            <!-- PROFESSIONAL AUTHOR ICON -->
                            <div class="thumb d-flex align-items-center justify-content-center"
                                 style="height: 250px;">

                                <i class="fas fa-user-edit ms-2"
                                   style="font-size: 45px; color:black;">
                                </i>

                            </div>

                            <div class="shape-img">
                                <img src="{{ asset('user/assets/img/team/shape-img.png') }}"
                                     alt="img">
                            </div>

                        </div>

                        <div class="team-content text-center">

                            <h6>
                                <a href="#">
                                    {{ $author1->name }}
                                </a>
                            </h6>

                            <p>
                                {{$author1->detail}}
                            </p>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>
        </div>

    </div>
</section>

    <!-- News Section start  -->
    <section class="news-section fix section-padding bg-cover" style="background-image: url({{asset('user/assets/img/news/bg.jpg);')}}">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Our Latest News</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus</p>
            </div>
            <div class="row">
                @foreach ($news as $news1)
                @if ($news1->status == '1')
                      <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
        <div class="news-card-items">

            <div class="news-image">

                <img src="{{ asset('storage/books_pics/' . $news1->image) }}" style="height:300px;" alt="{{ $news1->title }}">

                <img src="{{ asset('storage/books_pics/' . $news1->image) }}" style="height:300px;" alt="{{ $news1->title }}">

                <div class="post-box">
                    News
                </div>

            </div>

            <div class="news-content">

                <ul>
                    <li>
                        <i class="fa-light fa-calendar-days"></i>
                        {{ $news1->published_date
                            ? \Carbon\Carbon::parse($news1->published_date)->format('M d, Y')
                            : $news1->created_at->format('M d, Y') }}
                    </li>

                    <li>
                        <i class="fa-regular fa-user"></i>
                        By Admin
                    </li>
                </ul>

                <h3>
                    <a href="{{route('competition',$news1->id)}}">
                        {{ $news1->title }}
                    </a>
                </h3>

                <a class="theme-btn-2" href="{{route('competition',$news1->id)}}">
                    Read More
                    <i class="fa-regular fa-arrow-right-long"></i>
                </a>

            </div>

        </div>
    </div>
                @else
                    
                @endif

  

@endforeach
              
            </div>
        </div>
    </section>
@endsection