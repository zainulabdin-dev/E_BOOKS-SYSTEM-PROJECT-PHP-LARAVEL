<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\book;
use App\Models\cart;
use App\Models\category;
use App\Models\competition;
use App\Models\news;
use App\Models\order;
use App\Models\payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    function web(){

    return redirect()->route('bookshows');
}
    function cat(){
    return view('user.categories');
}
function shop(){
    return redirect()->route('booksdetail');
}
function myorders(){
    return redirect()->route('allorder');
}
function checkout(){
    return view('user.checkout');
}
function author(){
    return view('user.author');
}
function about(){
    return view('user.about');
}
function contact(){
    return view('user.contact');
}
function whishlist(){
    return view('user.whishlist');
}
function blog(){
    return view('user.blog');
}
function faq(){
    return view('user.faq');
}
function error(){
    return view('user.404_error');
}
function shop_list(){
    return redirect()->route('allcarts');
}
//
//book showing on website
    function book_showing(){
        $book=book::with(['book_category','book_author'])->get();
        $book1=book::with(['book_category','book_author'])->get();
        $book2=book::with(['book_category','book_author'])->get();
        $book3=book::with(['book_category','book_author'])->get();
        $author=author::all();
        $cat=category::all();
           $news=news::all();
         return view('user.website',compact('book','book1','cat','news','book2','book3','author'));
//return $all_book;
    }
       function book_detail($id){
        $book=book::with(['book_category','book_author'])->find($id);
     return view('user.shop_detail',compact('book'));
//return $book;
    }
    function add_to_cart(Request $request){
    

$cart=new cart();
$cart->cart_title=$request->book_title;
$cart->price=$request->book_price;
$cart->description=$request->description;
$cart->image=$request->book_image;
$cart->user_id=Auth::id();
$cart->book_id=$request->book_id;
$cart->product_type=$request->book_form;
$cart->product_qty=$request->qty;


if($cart->save()){
    return redirect()->route('allcarts');
}
else{
    return "data is not inserted";
}


}
function fatchcart()
{
    $userbyid = Auth::id();

    $allcart = cart::where('user_id', $userbyid)->get();

    return view('user.shop_list', compact('allcart'));
}
    function deletecart($id){
        $user=cart::find($id);
    cart::destroy($user->id);
     return redirect()->route('allcarts');
    }

//checkout
       function checkout_book($id,$cid){
        $book=book::with(['book_category','book_author'])->find($id);
        $user_id=Auth::id();
        $user=User::find($user_id);
        $cart=cart::find($cid);
  return view('user.checkout',compact('book','user','cart'));
// return $book;


    }
    // // click shop icon to show all added cart
    function all_added_cart(){
        return redirect()->route('allcarts');
    }

    function count_cart(){
         $userbyid = Auth::id();

    $allcart = cart::where('user_id', $userbyid)->get();
    
        $countcart=count($allcart);
        //     return view('user.navbar',compact('countcart'));
    return $countcart;
    }
//order detail
 function order(Request $request){
    

$order=new order();
$order->user_name=$request->user_name;
$order->product_name=$request->title;
$order->order_type=$request->order_type;
$order->price=$request->order_price;
$order->shipping=$request->shipping_price;
$order->quantity=$request->quantity_price;
$order->payment_method=$request->payment_method;
$order->address=$request->user_address;
$order->contact=$request->phone;
$order->email=$request->email;
$order->status=$request->status;
$order->total_price=$request->total_price;
$order->user_id=$request->user_id;
$order->book_id=$request->book_id;
$order->save();

if ($request->order_type == 'pdf' && $request->payment_method == 'credit_card') {

    return redirect()->route('credit', $order->id);

} else {

    return redirect()->route('cod', $order->id);

}
}
function all_order(){
    $userid=Auth::id();
    $orders=order::where('user_id',$userid)->get();
    return view('user.my_orders',compact('orders'));
}
//pdf access
function pdf($id)
{
    $order = order::find($id);

    if (!$order) {
        return "Order not found";
    }

    $book = book::find($order->book_id);

    if (!$book) {
        return "Book not found";
    }

    return view('user.pdf_read',compact('book'));
}

function credit($id){
    $userid=Auth::id();
    $orders=order::where('user_id',$userid)->find($id);
    return view('user.creditcard',compact('orders'));
    

}
function cod($id){
    $userid=Auth::id();
    $orders=order::where('user_id',$userid)->find($id);
     return view('user.COD',compact('orders'));


}
//payment controller
 function payment(Request $request){
    

$payment=new payment();
$payment->order_id=$request->order_id;
$payment->amount=$request->total_price;
$payment->payment_method=$request->payment_method;
$payment->address=$request->address;
$payment->payment_status=$request->payment_status;
$payment->card_holder=$request->card_name;
$payment->card_id=$request->card_number;
if($payment->save()){
return redirect()->route('myorders');
}
else{
    return "payment not successfull";
}


}
function participate(){
    $data=competition::all();
    return view('admin.all_participate',compact('data'));
}
//profile work
function profile($id){
    $profile=User::find($id);
    return view('user.profile',compact('profile'));
}
//category wise book
function book_by_cat($id){
    $cat=category::find($id)->only('id');

    $category=book::where('category_id',$cat)->get();
    return view('user.categories',compact('category'));
}

}
