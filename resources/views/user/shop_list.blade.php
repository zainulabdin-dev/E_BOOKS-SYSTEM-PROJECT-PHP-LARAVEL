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
                <h1>My Cart</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{route('bookshows')}}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                        Shopping Cart
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Section Start -->
    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row g-4">
                    <div class="col-xl-12">
                    
                        <div class="row">
                        
<div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">

    @foreach ($allcart as $allcart)

    <div class="card border-0 shadow-sm mb-3 cart-item">

        <div class="card-body p-3">

            <div class="row align-items-center g-3">

                <!-- BOOK IMAGE -->
                <div class="col-4 col-sm-3 col-md-2">

                    <div class="cart-book-img">
                        <img src="{{ asset('storage/books_pics/' . $allcart->image) }}"
                             alt="{{ $allcart->title }}">
                    </div>

                </div>


                <!-- BOOK DETAILS -->
                <div class="col-8 col-sm-9 col-md-6">

                    <h5 class="cart-book-title mb-1">
                        <a href="{{ route('detail', $allcart->book_id) }}">
                            {{ $allcart->title }}
                        </a>
                    </h5>


                    <!-- STARS -->
                    <div class="cart-stars mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>


                    <p class="cart-description mb-2">
                        {{ Str::limit($allcart->description, 100) }}
                    </p>


                    <div class="cart-meta">

                        <span>
                            <strong>Qty:</strong>
                            {{ $allcart->product_qty }}
                        </span>

                        <span>
                            <strong>Type:</strong>
                            {{ ucfirst(str_replace('_', ' ', $allcart->product_type)) }}
                        </span>

                    </div>


                    <!-- REMOVE -->
                    <a href="{{ route('deletcart', $allcart->id) }}"
                       class="remove-cart">

                        <i class="fa-solid fa-trash-can"></i>
                        Remove

                    </a>

                </div>


                <!-- PRICE + CHECKOUT -->
                <div class="col-md-4">

                    <div class="cart-price-box">

                        <h5 class="cart-price">
                            Rs. {{ number_format($allcart->price) }}
                        </h5>

                        <div class="cart-total">
                            Total:
                            <strong>
                                Rs. {{ number_format($allcart->product_qty * $allcart->price) }}
                            </strong>
                        </div>


                        <a class="btn btn-success cart-checkout"
                           href="{{ route('checkout_book', [$allcart->book_id, $allcart->id, $allcart->id]) }}">

                            Checkout

                        </a>


                        <!-- DELETE -->
                        <a href="{{ route('deletcart', $allcart->id) }}"
                           class="cart-delete"
                           title="Remove item">

                            <i class="fa-solid fa-xmark"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    @endforeach

</div>


<style>

/* =========================================
   CART ITEM
========================================= */

.cart-item {
    border: 1px solid #e0e0e0 !important;
    border-radius: 6px;
    background: #fff;
}

.cart-item:hover {
    box-shadow: 0 3px 12px rgba(0,0,0,.08) !important;
}


/* =========================================
   BOOK IMAGE
========================================= */

.cart-book-img {
    width: 105px;
    height: 135px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.cart-book-img img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}


/* =========================================
   TITLE
========================================= */

.cart-book-title {
    font-size: 17px;
    font-weight: 600;
    line-height: 1.3;
}

.cart-book-title a {
    color: #222;
    text-decoration: none;
}

.cart-book-title a:hover {
    color: #198754;
}


/* =========================================
   STARS
========================================= */

.cart-stars i {
    font-size: 12px;
    color: #f5a623;
}


/* =========================================
   DESCRIPTION
========================================= */

.cart-description {
    font-size: 12px;
    color: #777;
    line-height: 1.5;
    max-width: 500px;
}


/* =========================================
   META
========================================= */

.cart-meta {
    display: flex;
    gap: 20px;
    font-size: 12px;
    margin-bottom: 8px;
}

.cart-meta strong {
    color: #333;
}


/* =========================================
   REMOVE
========================================= */

.remove-cart {
    font-size: 12px;
    color: #198754;
    text-decoration: none;
}

.remove-cart:hover {
    color: #dc3545;
}


/* =========================================
   PRICE
========================================= */

.cart-price-box {
    position: relative;
    border-left: 1px solid #eee;
    padding-left: 20px;
}

.cart-price {
    font-size: 19px;
    font-weight: 700;
    margin-bottom: 3px;
}

.cart-total {
    font-size: 12px;
    color: #777;
    margin-bottom: 12px;
}

.cart-total strong {
    color: #222;
}


/* =========================================
   CHECKOUT
========================================= */

.cart-checkout {
    width: 150px;
    font-size: 12px;
    padding: 8px 12px;
    border-radius: 4px;
}


/* =========================================
   DELETE ICON
========================================= */

.cart-delete {
    position: absolute;
    right: 0;
    top: -5px;
    color: #555;
    font-size: 18px;
    text-decoration: none;
}

.cart-delete:hover {
    color: #dc3545;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 991px) {

    .cart-price-box {
        border-left: 0;
        border-top: 1px solid #eee;
        padding: 12px 0 0;
        margin-top: 5px;
    }

    .cart-checkout {
        width: 180px;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 575px) {

    .cart-item .card-body {
        padding: 10px !important;
    }

    .cart-book-img {
        width: 75px;
        height: 105px;
    }

    .cart-book-title {
        font-size: 14px;
    }

    .cart-stars i {
        font-size: 10px;
    }

    .cart-description {
        font-size: 11px;
        margin-bottom: 5px !important;
    }

    .cart-meta {
        font-size: 11px;
        gap: 10px;
    }

    .cart-price {
        font-size: 17px;
    }

}

</style>

                        </div>
                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class='previous' href='shop-list.html'>Previous</a></li>
                                <li><a class='page-numbers' href='shop-list.html'>1</a></li>
                                <li><a class='page-numbers' href='shop-list.html'>2</a></li>
                                <li><a class='page-numbers' href='shop-list.html'>3</a></li>
                                <li><a class='page-numbers' href='shop-list.html'>...</a></li>
                                <li><a class='next' href='shop-list.html'>Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection