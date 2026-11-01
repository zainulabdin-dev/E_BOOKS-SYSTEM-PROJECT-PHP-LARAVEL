<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\rolecheck;

//user
Route::get('/',[authController::class,'regform'])->name('adduser');
Route::post('/userreg',[authController::class,'register'])->name('userregister');
Route::get('/alluser',[authController::class,'fatch'])->name('userfatch');
Route::get('delete/user{id}',[authController::class,'delete'])->name('deletuser');
Route::get('/edit/user{id}',[authController::class,'edit'])->name('useredit');
Route::post('/update/user{id}',[authController::class,'update'])->name('updated');
//logout
Route::post('logout',[authController::class,'logout'])->name('logout');

//loginuser
Route::post('/loginform', [UserController::class, 'login'])->name('loginform');
//login
Route::get('/login',[authController::class,'loginform'])->name('loginform');
Route::post('/loginform',[authController::class,'userlogin'])->name('userlogin');
//books upload all routing
Route::get('/books',[adminController::class,'book'])->middleware('rolecheck')->name('book');
Route::post('/book_upload',[adminController::class,'bookupload'])->name('bookupload');
Route::get('/upload',[adminController::class,'select_cat_auth'])->name('select');
Route::get('all_books',[adminController::class,'book_fatch'])->name('bookfatch');
Route::get('delete/book{id}',[adminController::class,'deletebook'])->name('deletebook');
Route::get('/edit/book{id}',[adminController::class,'editbook'])->name('editbook');
Route::post('/update/book{id}',[adminController::class,'updatebook'])->name('updatebook');
//book showing
Route::get('books_shows',[userController::class,'book_showing'])->name('bookshows');
//book shop detail
Route::get('books/detail{id}',[userController::class,'book_detail'])->name('booksdetail');
//checkout

//category
Route::get('/insertcat',[adminController::class,'category'])->middleware('rolecheck')->name('insert');
Route::post('/category',[adminController::class,'insertcategory'])->name('insertcategory');

Route::get('/allcategory',[adminController::class,'fatch'])->middleware('rolecheck')->name('fatchcategory');
Route::get('delete/category{id}',[adminController::class,'delete'])->middleware('rolecheck')->name('deletcategory');
Route::get('/edit/category{id}',[adminController::class,'edit'])->middleware('rolecheck')->name('editcategory');
Route::post('/update/category{id}',[adminController::class,'update'])->name('updatecategory');
//author
Route::get('/insertauthor',[adminController::class,'author'])->middleware('rolecheck')->name('author');
Route::post('/addauthor',[adminController::class,'addauthor'])->name('addauthor');
Route::get('/allauthor',[adminController::class,'fatchauthor'])->middleware('rolecheck')->name('allauthor');
Route::get('delete/author{id}',[adminController::class,'deleteauthor'])->middleware('rolecheck')->name('deletauthor');
Route::get('/edit/author{id}',[adminController::class,'editauthor'])->middleware('rolecheck')->name('editauthor');
Route::post('/update/author{id}',[adminController::class,'updateauthor'])->name('updateauthor');
//website href route
Route::get('/web',[userController::class,'web'])->name('web');
Route::get('/cat',[userController::class,'cat'])->name('category');
Route::get('/shop',[userController::class,'shop'])->name('shop');
Route::get('/myorders',[userController::class,'myorders'])->name('myorders');
Route::get('/checkout',[userController::class,'checkout'])->name('checkout');
Route::get('/author',[userController::class,'author'])->name('author');
Route::get('/about',[userController::class,'about'])->name('about');
Route::get('/contact',[userController::class,'contact'])->name('contact');
Route::get('/whishlist',[userController::class,'whishlist'])->name('whishlist');
Route::get('/blog',[userController::class,'blog'])->name('blog');
Route::get('/faq',[userController::class,'faq'])->name('faq');
Route::get('/error',[userController::class,'error'])->name('error');
Route::get('/shop_list',[userController::class,'shop_list'])->name('shop_list');
//add to cart
Route::post('/addtocart',[userController::class,'add_to_cart'])->name('add_to_cart');
Route::get('/alladdtocart',[userController::class,'fatchcart'])->name('allcarts');
Route::get('delete/cart{id}',[userController::class,'deletecart'])->name('deletcart');

//count all add to cart
Route::get('/count_all',[userController::class,'count_cart'])->name('count');
// click shop icon to show all added cart
Route::get('/all_add_carts',[userController::class,'all_added_cart'])->name('added');


//checkout
Route::get('/checkout{id}/{cid}',[userController::class,'checkout_book'])->name('checkout_book');



//admin dashboard routing
Route::get('/admin',[adminController::class,'dashboard'])->middleware('rolecheck')->name('dashboard');

//add to cart working
Route::post('/add_to_cart',[userController::class,'addtocart'])->name('addtocart');
// books by category
Route::get('/book_by_category{id}',[userController::class,'book_by_cat'])->name('book_by_cat');
//order create 
Route::post('/order_detail',[userController::class,'order'])->name('order');
//orders shows on users
Route::get('/allorder',[userController::class,'all_order'])->name('allorder');
//orders shows on admin
Route::get('/admin/orders', [AdminController::class, 'fatch_orders'])->middleware('rolecheck')->name('admin.orders');
//order complete detail on admin
Route::get('/complete/detail{id}',[adminController::class,'all_order_deatil'])->middleware('rolecheck')->name('detail');
//orders status update
Route::post('/order_status{id}',[adminController::class,'update_order'])->name('update.order');
//pdf access
Route::get('/pdf_access{id}',[userController::class,'pdf'])->name('pdf_access');
//payments routes
Route::post('/payment',[userController::class,'payment'])->name('payment');
//payment order fatch
Route::get('/allorder_credit{id}',[userController::class,'credit'])->name('credit');
Route::get('/allorder_cod{id}',[userController::class,'cod'])->name('cod');

//news working
Route::get('/uploadnews',[adminController::class,'upload_news'])->middleware('rolecheck')->name('news');
//news publish
Route::post('/publishnews',[adminController::class,'news_publish'])->name('news_publish');
Route::get('/competition{id}',[adminController::class,'competition'])->name('competition');
Route::post('/competition_upload',[adminController::class,'competition_upload'])->name('comp.upload');
//participate
Route::get('participate',[userController::class,'participate'])->name('participate');
//delet participate entry
Route::get('delete/participate{id}',[adminController::class,'delcomp'])->name('delcomp');

//
Route::get('profile{id}',[userController::class,'profile'])->name('profile');
//news fatch update
Route::get('fatchnews',[adminController::class,'fatchnews'])->name('fatchnews');
Route::post('/update-news/{id}', [adminController::class, 'update_news']) ->name('update_news');

Route::get('countprice',[adminController::class,'count_total'])->name('count_total');
//winner update
Route::get('winner',[adminController::class,'winner'])->name('winner');
//anounce winner
Route::post('winning{id}',[adminController::class,'winning'])->name('winning');

//contact us 
Route::post('/contact/store', [adminController::class, 'store'])
    ->name('contact.store');
// contact fatch
Route::get('/admin/contacts', [adminController::class, 'fatchcontact'])
    ->name('admin.contacts');



