
@extends('user.navbar')

@section('nav')

<!-- Sidebar Area Here -->
<div id="targetElement" class="side_bar slideInRight side_bar_hidden">
    <div class="side_bar_overlay"></div>

    <div class="cart-title mb-50">
        <h4>Log in</h4>
    </div>

    <div class="login-sidebar">
        <form action="#" method="POST">
            @csrf

            <div class="row g-4">

                <div class="col-lg-12">
                    <div class="form-clt">
                        <span>Username or email address *</span>
                        <input type="text" name="login_email" placeholder="">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-clt">
                        <span>Password *</span>
                        <input id="password" type="password" name="password" placeholder="">
                        <div class="icon">
                            <i class="fa-regular fa-eye"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <button class="theme-btn" type="submit">
                        <span>Log In</span>
                    </button>
                </div>

                <div class="col-lg-12">
                    <div class="from-cheak-items">

                        <div class="form-check d-flex gap-2 from-customradio">
                            <input class="form-check-input"
                                   type="radio"
                                   name="remember"
                                   id="remember">

                            <label class="form-check-label" for="remember">
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
            <a href="#" class="facebook-text">
                <img src="{{ asset('user/assets/img/facebook.png') }}" alt="img">
                FACEBOOK
            </a>

            <a href="#" class="facebook-text google-text">
                <img src="{{ asset('user/assets/img/google.png') }}" alt="img">
                Google
            </a>
        </div>

        <div class="user-icon-box">
            <img src="{{ asset('user/assets/img/user.png') }}" alt="img">

            <p>No account yet?</p>

            <a href="#">Create an Account</a>
        </div>
    </div>

    <button id="closeButton" class="x-mark-icon">
        <i class="fas fa-times"></i>
    </button>
</div>


<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover section-padding"
     style="background-image: url('{{ asset('user/assets/img/hero/breadcrumb-bg.jpg') }}');">

    <div class="container">

        <div class="page-heading">

            <h1>Contact Us</h1>

            <div class="page-header">

                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">

                    <li>
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>

                    <li>
                        Contact Us
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>
<!-- Breadcrumb Section End -->


<!-- Contact Section Start -->
<section class="contact-section fix section-padding">

    <div class="container">

        <div class="contact-wrapper">

            <div class="row g-4 align-items-center">

                <!-- Left Side -->
                <div class="col-lg-4">

                    <div class="contact-left-items">

                        <div class="contact-info-area-2">

                            <!-- Phone -->
                            <div class="contact-info-items mb-4">

                                <div class="icon">
                                    <i class="icon-icon-10"></i>
                                </div>

                                <div class="content">

                                    <p>Call Us 7/24</p>

                                    <h3>
                                        <a href="tel:+923001234567">
                                            +92 300 1234567
                                        </a>
                                    </h3>

                                </div>

                            </div>


                            <!-- Email -->
                            <div class="contact-info-items mb-4">

                                <div class="icon">
                                    <i class="icon-icon-11"></i>
                                </div>

                                <div class="content">

                                    <p>Make a Quote</p>

                                    <h3>
                                        <a href="mailto:info@ebooks.com">
                                            info@ebooks.com
                                        </a>
                                    </h3>

                                </div>

                            </div>


                            <!-- Location -->
                            <div class="contact-info-items border-none">

                                <div class="icon">
                                    <i class="icon-icon-12"></i>
                                </div>

                                <div class="content">

                                    <p>Location</p>

                                    <h3>
                                        Karachi, Pakistan
                                    </h3>

                                </div>

                            </div>

                        </div>


                        <!-- Contact Image -->
                        <div class="video-image">

                            <img src="{{ asset('user/assets/img/contact.jpg') }}"
                                 alt="Contact Us">

                            <div class="video-box">

                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                   class="video-btn ripple video-popup">

                                    <i class="fa-solid fa-play"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Right Side -->
                <div class="col-lg-8">

                    <div class="contact-content">

                        <h2>Ready to Get Started?</h2>

                        <p>
                            Have a question, suggestion, or need assistance?
                            Send us a message and our team will get back to you
                            as soon as possible.
                        </p>


                        <!-- Success Message -->
                        @if(session('success'))

                            <div class="alert alert-success mb-4">
                                {{ session('success') }}
                            </div>

                        @endif


                        <!-- Validation Errors -->
                        @if($errors->any())

                            <div class="alert alert-danger mb-4">

                                <ul class="mb-0">

                                    @foreach($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <!-- Contact Form -->
                        <form action="{{ route('contact.store') }}"
                              method="POST"
                              class="contact-form-items">

                            @csrf

                            <div class="row g-4">

                                <!-- Name -->
                                <div class="col-lg-6 wow fadeInUp"
                                     data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>Your name*</span>

                                        <input type="text"
                                               name="name"
                                               id="name"
                                               placeholder="Your Name"
                                               value="{{ old('name') }}"
                                               required>

                                    </div>

                                </div>


                                <!-- Email -->
                                <div class="col-lg-6 wow fadeInUp"
                                     data-wow-delay=".5s">

                                    <div class="form-clt">

                                        <span>Your Email*</span>

                                        <input type="email"
                                               name="email"
                                               id="email"
                                               placeholder="Your Email"
                                               value="{{ old('email') }}"
                                               required>

                                    </div>

                                </div>


                                <!-- Message -->
                                <div class="col-lg-12 wow fadeInUp"
                                     data-wow-delay=".7s">

                                    <div class="form-clt">

                                        <span>Write Message*</span>

                                        <textarea name="message"
                                                  id="message"
                                                  placeholder="Write Message"
                                                  required>{{ old('message') }}</textarea>

                                    </div>

                                </div>


                                <!-- Submit -->
                                <div class="col-lg-7 wow fadeInUp"
                                     data-wow-delay=".9s">

                                    <button type="submit"
                                            class="theme-btn style-2">

                                        Send Message

                                        <i class="fa-solid fa-arrow-right-long"></i>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Contact Section End -->


<!-- Map Section Start -->
<div class="map-section">

    <div class="map-items">

        <div class="googpemap">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

        </div>

    </div>

</div>
<!-- Map Section End -->

@endsection

