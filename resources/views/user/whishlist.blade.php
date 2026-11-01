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
                <h1>Wishlist</h1>
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
                            Wishlist
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Cart Section Start -->
    <div class="cart-section section-padding">
        <div class="container">
            <div class="main-cart-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center">
                                                <a class='remove-icon' href='wishlist.html'>
                                                    <img src="{{asset('user/assets/img/icon/icon-9.svg')}}" alt="img">
                                                </a>
                                                <span class="cart">
                                                    <img src="{{asset('user/assets/img/shop-cart/01.png')}}" alt="img">
                                                </span>
                                                <span class="cart-title">
                                                    simple Things You To Save Book
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="cart-price">$30.00</span>
                                        </td>
                                        <td>
                                            <span class="stock-title">
                                                In Stock
                                            </span>
                                        </td>
                                        <td>
                                            <span class="subtotal-price">$120.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center">
                                                <a class='remove-icon' href='wishlist.html'>
                                                    <img src="{{asset('user/assets/img/icon/icon-9.svg')}}" alt="img">
                                                </a>
                                                <span class="cart">
                                                    <img src="{{asset('user/assets/img/shop-cart/02.png')}}" alt="img">
                                                </span>
                                                <span class="cart-title">
                                                    Qple GPad With Retina Sisplay
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="cart-price">$39.00</span>
                                        </td>
                                        <td>
                                            <span class="stock-title">
                                                In Stock
                                            </span>
                                        </td>
                                        <td>
                                            <span class="subtotal-price">$120.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center">
                                                <a class='remove-icon' href='wishlist.html'>
                                                    <img src="{{asset('user/assets/img/icon/icon-9.svg')}}" alt="img">
                                                </a>
                                                <span class="cart">
                                                    <img src="{{asset('user/assets/img/shop-cart/03.png')}}" alt="img">
                                                </span>
                                                <span class="cart-title">
                                                    Flovely and Unicom Erna
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="cart-price">$19.00</span>
                                        </td>
                                        <td>
                                            <span class="stock-title-two">
                                                Out Of Stock
                                            </span>
                                        </td>
                                        <td>
                                            <span class="subtotal-price">$120.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection