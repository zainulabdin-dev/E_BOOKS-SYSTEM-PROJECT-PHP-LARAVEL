
@extends('user.navbar')

@section('nav')

<style>

/* =========================================================
   MY ORDERS - CARD DESIGN
========================================================= */

.my-orders-page {
    background: #f7faf8;
}


/* =========================================================
   HEADING
========================================================= */

.orders-heading-box {
    margin-bottom: 30px;
}

.orders-heading-box h3 {
    color: #24332b;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 7px;
}

.orders-heading-box p {
    color: #89958e;
    font-size: 14px;
    margin: 0;
}


/* =========================================================
   ORDER CARD
========================================================= */

.order-card {
    background: #ffffff;
    border: 1px solid #dce9e1;
    border-radius: 16px;
    padding: 24px;
    margin-bottom: 20px;
    box-shadow: 0 8px 25px rgba(36, 115, 72, 0.07);
    transition: all .25s ease;
}

.order-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(36, 115, 72, 0.12);
    border-color: #c8dfd0;
}


/* =========================================================
   TOP
========================================================= */

.order-card-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    padding-bottom: 18px;
    border-bottom: 1px solid #edf2ee;
    margin-bottom: 20px;
}

.order-number {
    color: #89958e;
    font-size: 13px;
}

.order-number strong {
    color: #247348;
}


/* =========================================================
   STATUS
========================================================= */

.order-status {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 14px;
    background: #e8f6ed;
    color: #247348;
    border: 1px solid #cfe8d8;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 700;
    text-transform: capitalize;
}


/* =========================================================
   BOOK AREA
========================================================= */

.order-book-area {
    display: flex;
    align-items: center;
    gap: 18px;
}

.book-icon-box {
    width: 62px;
    height: 62px;
    min-width: 62px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e8f6ed;
    border-radius: 12px;
}

.book-icon-box i {
    font-size: 26px;
    color: #2f8f5b;
}

.order-book-info {
    flex: 1;
}

.order-book-info h4 {
    color: #24332b;
    font-size: 18px;
    font-weight: 700;
    margin: 0 0 5px;
}

.order-book-info p {
    color: #89958e;
    font-size: 13px;
    margin: 0;
    text-transform: capitalize;
}


/* =========================================================
   ORDER DETAILS
========================================================= */

.order-details {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    margin-top: 22px;
    padding: 18px;
    background: #f7faf8;
    border-radius: 10px;
}

.detail-item {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.detail-label {
    color: #89958e;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .4px;
}

.detail-value {
    color: #24332b;
    font-size: 14px;
    font-weight: 700;
}

.detail-price {
    color: #2f8f5b;
}


/* =========================================================
   CARD BOTTOM
========================================================= */

.order-card-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-top: 20px;
}


/* =========================================================
   DATE
========================================================= */

.order-date {
    color: #89958e;
    font-size: 13px;
}

.order-date i {
    color: #2f8f5b;
    margin-right: 5px;
}


/* =========================================================
   ACTIONS
========================================================= */

.order-actions {
    display: flex;
    align-items: center;
    gap: 8px;
}


/* PDF */

.pdf-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 9px 15px;
    background: #2f8f5b;
    color: #ffffff !important;
    border-radius: 7px;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: .2s ease;
}

.pdf-btn:hover {
    background: #247348;
    color: #ffffff !important;
    transform: translateY(-1px);
}


/* Delivered */

.delivered-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 9px 15px;
    background: #e8f6ed;
    color: #247348 !important;
    border: 1px solid #cfe8d8;
    border-radius: 7px;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
}


/* =========================================================
   ORDER MORE
========================================================= */

.order-more-btn {
    margin-top: 35px;
}

.order-more-btn .theme-btn {
    background: #2f8f5b;
    color: #ffffff;
    border: none;
}

.order-more-btn .theme-btn:hover {
    background: #247348;
}


/* =========================================================
   EMPTY
========================================================= */

.empty-orders {
    background: #ffffff;
    border: 1px solid #dce9e1;
    border-radius: 16px;
    padding: 70px 20px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(36, 115, 72, 0.07);
}

.empty-orders i {
    font-size: 50px;
    color: #2f8f5b;
    margin-bottom: 18px;
}

.empty-orders h5 {
    color: #24332b;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 7px;
}

.empty-orders p {
    color: #89958e;
    font-size: 14px;
    margin: 0;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width: 991px) {

    .order-details {
        grid-template-columns: repeat(2, 1fr);
    }

}


@media(max-width: 767px) {

    .order-card {
        padding: 18px;
    }

    .order-card-top {
        align-items: flex-start;
    }

    .order-book-area {
        gap: 13px;
    }

    .book-icon-box {
        width: 52px;
        height: 52px;
        min-width: 52px;
    }

    .book-icon-box i {
        font-size: 22px;
    }

    .order-book-info h4 {
        font-size: 16px;
    }

    .order-card-bottom {
        flex-direction: column;
        align-items: flex-start;
    }

    .order-actions {
        width: 100%;
    }

}


@media(max-width: 575px) {

    .orders-heading-box h3 {
        font-size: 23px;
    }

    .order-card-top {
        flex-direction: column;
        align-items: flex-start;
    }

    .order-details {
        grid-template-columns: 1fr 1fr;
        gap: 18px 10px;
        padding: 15px;
    }

    .order-card-bottom {
        gap: 15px;
    }

    .order-actions {
        flex-wrap: wrap;
    }

}


/* =========================================================
   SIDEBAR LOGIN
========================================================= */

</style>


<!-- Sidebar Area Here -->

<div id="targetElement"
     class="side_bar slideInRight side_bar_hidden">

    <div class="side_bar_overlay"></div>

    <div class="cart-title mb-50">
        <h4>Log in</h4>
    </div>

    <div class="login-sidebar">

        <form action="#"
              id="contact-form"
              method="POST">

            <div class="row g-4">

                <div class="col-lg-12">

                    <div class="form-clt">

                        <span>Username or email address *</span>

                        <input type="text"
                               name="name15"
                               id="name15"
                               placeholder="">

                    </div>

                </div>


                <div class="col-lg-12">

                    <div class="form-clt">

                        <span>Password *</span>

                        <input id="password"
                               type="password"
                               placeholder="">

                        <div class="icon">
                            <i class="fa-regular fa-eye"></i>
                        </div>

                    </div>

                </div>


                <div class="col-lg-12">

                    <button class="theme-btn"
                            type="submit">

                        <span>Log In</span>

                    </button>

                </div>


                <div class="col-lg-12">

                    <div class="from-cheak-items">

                        <div class="form-check d-flex gap-2 from-customradio">

                            <input class="form-check-input"
                                   type="radio"
                                   name="flexRadioDefault"
                                   id="flexRadioDefault1">

                            <label class="form-check-label"
                                   for="flexRadioDefault1">

                                Remember Me

                            </label>

                        </div>

                        <p>Forgot Password?</p>

                    </div>

                </div>

            </div>

        </form>


        <p class="text">
            Or login with
        </p>


        <div class="social-item">

            <a href="#" class="facebook-text">

                <img src="{{asset('user/assets/img/facebook.png')}}"
                     alt="img">

                FACEBOOK

            </a>


            <a href="#"
               class="facebook-text google-text">

                <img src="{{asset('user/assets/img/google.png')}}"
                     alt="img">

                Google

            </a>

        </div>


        <div class="user-icon-box">

            <img src="{{asset('user/assets/img/user.png')}}"
                 alt="img">

            <p>No account yet?</p>

            <a href="account.html">
                Create an Account
            </a>

        </div>

    </div>


    <button id="closeButton"
            class="x-mark-icon">

        <i class="fas fa-times"></i>

    </button>

</div>


<!-- =========================================================
     BREADCRUMB
========================================================= -->

<div class="breadcrumb-wrapper bg-cover section-padding"
     style="background-image: url({{asset('user/assets/img/hero/breadcrumb-bg.jpg')}});">

    <div class="container">

        <div class="page-heading">

            <h1>MY ORDERS</h1>

            <div class="page-header">

                <ul class="breadcrumb-items wow fadeInUp"
                    data-wow-delay=".3s">

                    <li>

                        <a href="index.html">
                            Home
                        </a>

                    </li>

                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>

                    <li>
                        My Orders
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     MY ORDERS
========================================================= -->

<div class="cart-section section-padding my-orders-page">

    <div class="container">

        <div class="main-cart-wrapper">

            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-11 col-md-12">


                    <!-- Heading -->

                    <div class="orders-heading-box">

                        <h3>
                            My Orders
                        </h3>

                        <p>
                            View your books, order status and purchase details.
                        </p>

                    </div>


                    <!-- =================================================
                         ORDERS
                    ================================================== -->

                    @forelse ($orders as $order)


                        <div class="order-card">


                            <!-- TOP -->

                            <div class="order-card-top">

                                <div class="order-number">

                                    Order
                                    <strong>
                                        #{{ $order->id }}
                                    </strong>

                                </div>


                                <span class="order-status">

                                    <i class="fa-solid fa-circle"
                                       style="font-size:6px;"></i>

                                    {{ $order->status }}

                                </span>

                            </div>


                            <!-- BOOK -->

                            <div class="order-book-area">

                                <div class="book-icon-box">

                                    <i class="fa-solid fa-book"></i>

                                </div>


                                <div class="order-book-info">

                                    <h4>
                                        {{ $order->product_name }}
                                    </h4>

                                    <p>
                                        {{ $order->order_type }}
                                    </p>

                                </div>

                            </div>


                            <!-- DETAILS -->

                            <div class="order-details">


                                <!-- Price -->

                                <div class="detail-item">

                                    <span class="detail-label">
                                        Price
                                    </span>

                                    <span class="detail-value detail-price">

                                        Rs. {{ $order->price }}

                                    </span>

                                </div>


                                <!-- Quantity -->

                                <div class="detail-item">

                                    <span class="detail-label">
                                        Quantity
                                    </span>

                                    <span class="detail-value">

                                        {{ $order->quantity }}

                                    </span>

                                </div>


                                <!-- Total -->

                                <div class="detail-item">

                                    <span class="detail-label">
                                        Total
                                    </span>

                                    <span class="detail-value">

                                        @if ($order->order_type == 'hardcopy')

                                            Rs.
                                            {{($order->price * $order->quantity) + $order->shipping}}

                                        @else

                                            Rs. {{ $order->price }}

                                        @endif

                                    </span>

                                </div>


                                <!-- Type -->

                                <div class="detail-item">

                                    <span class="detail-label">
                                        Order Type
                                    </span>

                                    <span class="detail-value"
                                          style="text-transform: capitalize;">

                                        {{ $order->order_type }}

                                    </span>

                                </div>


                            </div>


                            <!-- BOTTOM -->

                            <div class="order-card-bottom">


                                <!-- DATE -->

                                <div class="order-date">

                                    <i class="fa-regular fa-calendar"></i>

                                    {{ $order->created_at }}

                                </div>


                                <!-- ACTIONS -->

                                <div class="order-actions">


                                    @if ($order->status == 'paid' && $order->order_type == 'pdf')

                                        <a href="{{route('pdf_access',$order->id)}}"
                                           class="pdf-btn">

                                            <i class="fa-regular fa-file-pdf"></i>

                                            View PDF

                                        </a>

                                    @endif


                                    @if ($order->order_type == 'hardcopy' && $order->status == 'paid')

                                        <a href=""
                                           class="pdf-btn">

                                            <i class="fa-solid fa-check"></i>

                                            Delivered

                                        </a>

                                    @endif


                                </div>

                            </div>


                        </div>


                    @empty


                        <!-- EMPTY -->

                        <div class="empty-orders">

                            <i class="fa-solid fa-box-open d-block"></i>

                            <h5>
                                No Orders Found
                            </h5>

                            <p>
                                You haven't placed any orders yet.
                            </p>

                        </div>


                    @endforelse


                    <!-- ORDER MORE -->

                    <div class="text-center order-more-btn">

                        <a class="theme-btn"
                           href="{{route('allorder')}}">

                            ORDER MORE

                        </a>

                    </div>


                </div>

            </div>

        </div>

    </div>

</div>

@endsection
