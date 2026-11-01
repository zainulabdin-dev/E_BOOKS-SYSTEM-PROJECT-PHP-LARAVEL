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
                <h1>Shop Details</h1>
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
                            Shop Details
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Details Section Start -->
    <section class="shop-details-section fix section-padding">
        <div class="container">
            <div class="shop-details-wrapper">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="shop-details-image">
                            <div class="tab-content">
                                <div id="thumb1" class="tab-pane fade show active">
                                    <div class="shop-details-thumb">
                                                   <form action="{{route('add_to_cart')}}" method="post">
                                                    @csrf
                                        <img src="{{asset('storage/books_pics/'. $book->image)}}" style="width: 350px;height:350PX;">


                                    </div>
                                </div>
                              
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="shop-details-content">
                            <div class="title-wrapper">

                            



             
                                      <h2 name="book_title">{{$book->title}}</h2>
                        
                              
                                <h5>Stock availability.</h5>
                            </div>
                            <div class="star">
                                <a href='shop-details.html'> <i class="fas fa-star"></i></a>
                                <a href='shop-details.html'><i class="fas fa-star"></i></a>
                                <a href='shop-details.html'> <i class="fas fa-star"></i></a>
                                <a href='shop-details.html'><i class="fas fa-star"></i></a>
                                <a href='shop-details.html'><i class="fa-regular fa-star"></i></a>
                                <span>(1 Customer Reviews)</span>
                            </div>
                            <p  name="description">
                              {{$book->description}}
                            </p>
                              <h4>book author</h4>
                              
                                <h3>{{$book->book_author->name}}</h3>
                            <div class="price-list">
                                <h3  name="book_price">RS- {{$book->price}}</h3>
                              
                            </div>
                           
                             <select name="book_form" class="form-control w-50">
 <option value="" style="cursor: disabled;">select book_form</option>
                    
    <option value="hardcopy" class=" w-50">hard_copy  </option>
    <option value="pdf" class="w-50">pdf  </option>

            </select>
           
                            <div class="cart-wrapper">
                                <div class="quantity-basket">
                                    <p class="qty">
                                        <button class="qtyminus" aria-hidden="true">−</button>
                                        <input type="number" name="qty" id="qty2" min="1" max="10" step="1" value="1">
                                        <button class="qtyplus" aria-hidden="true">+</button>
                                    </p>
                                   
                               
                                </div>
   

  
    <input type="hidden" name="book_image" value="{{ $book->image }}">
    <input type="hidden" name="book_title" value="{{ $book->title }}">
    <input type="hidden" name="description" value="{{ $book->description }}">
    <input type="hidden" name="book_price" value="{{ $book->price }}">
    <input type="hidden" name="book_id" value="{{ $book->id }}">
                                <button class='theme-btn' href="">Add To Cart</button>
                                </form>
                                <div class="icon-box">
                                    <a class='icon' href='shop-details.html'>
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a class='icon-2' href='shop-details.html'>
                                        <img src="{{asset('user/assets/img/icon/shuffle.svg')}}" alt="svg-icon">
                                    </a>
                                </div>
                            </div>
                            <div class="category-box">
                                <div class="category-list">
                                    <ul>
                                     
                                        <li>
                                            <span>Category:</span> {{$book->book_category->name}}
                                        </li>
                                    </ul>
                                    <ul>
                                    
                                        <li>
                                            <span>Format:</span> pdf/hardcopy
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span>Total page:</span> 330
                                        </li>
                                
                                    </ul>
                                    <ul>
                                    
                                        <li>
                                            <span>author:</span> {{$book->book_author->name}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-check">
                                <div class="check-list">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Free shipping orders from 2900
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            30 days exchange & return
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Mamaya Flash Discount: Starting at 30% Off
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Safe & Secure online shopping
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="social-icon">
                                <h6>Also Available On:</h6>
                                <a href="https://www.customer.io/"><img src="{{asset('user/assets/img/cutomerio.png')}}"
                                        alt="cutomer.io"></a>
                                <a href="https://www.amazon.com/"><img src="{{asset('user/assets/img/amazon.png')}}" alt="amazon"></a>
                                <a href="https://www.dropbox.com/"><img src="{{asset('user/assets/img/dropbox.png')}}" alt="dropbox"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-tab section-padding pb-0">
                    <ul class="nav mb-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active"
                                aria-selected="true" role="tab">
                                <h6>Description</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#additional" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                tabindex="-1" role="tab">
                                <h6>Additional Information </h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#review" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1"
                                role="tab">
                                <h6>reviews (3)</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade show active" role="tabpanel">
                            <div class="description-items">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis erat
                                    interdum, tempor turpis in, sodales ex. In hac habitasse platea dictumst. Etiam
                                    accumsan scelerisque urna, a lobortis velit vehicula ut. Maecenas porttitor dolor a
                                    velit aliquet, et euismod nibh vulputate. Duis nunc velit, lacinia vel risus in,
                                    finibus sodales augue. Aliquam lacinia imperdiet dictum. Etiam tempus finibus
                                    tortor, quis placerat arcu tristique in. Sed vitae dui a diam luctus maximus.
                                    Quisque nec felis dapibus, dapibus enim vitae, vestibulum libero. Aliquam erat
                                    volutpat. Phasellus luctus rhoncus justo. Duis a nulla sit amet justo aliquam
                                    ullamcorper. Phasellus nulla lorem, pretium et libero in, porta auctor dui. In a
                                    ornare purus, et efficitur elit. Etiam consectetur sit amet quam ut tincidunt. Donec
                                    gravida ultricies tellus ac pharetra.
                                    Praesent a pulvinar purus. Proin sollicitudin leo eget mi sagittis aliquam. Donec
                                    sollicitudin ex ac lobortis mollis. Sed eget libero nec mi
                                </p>
                            </div>
                        </div>
                        <div id="additional" class="tab-pane fade" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="text-1">Availability</td>
                                            <td class="text-2">Available</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Categories</td>
                                            <td class="text-2">Adventure</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Publish Date</td>
                                            <td class="text-2">2022-10-24</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Total Page</td>
                                            <td class="text-2">330</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Format</td>
                                            <td class="text-2">Hardcover</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Country</td>
                                            <td class="text-2">United States</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Language</td>
                                            <td class="text-2">English</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Dimensions</td>
                                            <td class="text-2">30 × 32 × 46 Inches</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Weight</td>
                                            <td class="text-2">2.5 Pounds</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="review" class="tab-pane fade" role="tabpanel">
                            <div class="review-items">
                                <div class="review-wrap-area d-flex gap-4">
                                    <div class="review-thumb">
                                        <img src="{{asset('user/assets/img/shop-details/review.png')}}" alt="img">
                                    </div>
                                    <div class="review-content">
                                        <div
                                            class="head-area d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="cont">
                                                <h5><a href='news-details.html'>Leslie Alexander</a></h5>
                                                <span>February 10, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mt-30 mb-4">
                                            Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem
                                            Ipsum is <br> simply dummy
                                        </p>
                                    </div>
                                </div>
                                <div class="review-title mt-5 py-15 mb-30">
                                    <h4>Your Rating*</h4>
                                    <div class="rate-now d-flex align-items-center">
                                        <p>Your Rating*</p>
                                        <div class="star">
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <form action="#" id="contact-form2" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <span>Your Name*</span>
                                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <span>Your Email*</span>
                                                    <input type="text" name="email" id="email" placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".8">
                                                <div class="form-clt">
                                                    <span>Message*</span>
                                                    <textarea name="message" id="message"
                                                        placeholder="Write Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".9">
                                                <div class="form-check d-flex gap-2 from-customradio">
                                                    <input type="checkbox" class="form-check-input"
                                                        name="flexRadioDefault" id="flexRadioDefault12">
                                                    <label class="form-check-label" for="flexRadioDefault12">
                                                        i accept your terms & conditions
                                                    </label>
                                                </div>
                                                <button type="submit" class="theme-btn style-2">
                                                    Submit now
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Ratting Book Section Start -->
    <section class="top-ratting-book-section section-padding pt-0 fix">
   
    </section>

    @endsection