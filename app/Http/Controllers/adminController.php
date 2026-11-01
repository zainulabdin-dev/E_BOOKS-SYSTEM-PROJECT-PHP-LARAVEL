<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\book;
use App\Models\category;
use App\Models\competition;
use App\Models\Contact;
use App\Models\news;
use App\Models\order;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    function count_total(){
        $total_price=order::sum('total_price');
       return view('admin.dashboard',compact('total_price'));
       
    }

        function dashboard(){
        return redirect()->route('count_total');
    }
      // categories functions
    function category(){
        return view('admin.insertcat');
    }
    function insertcategory(Request $request){
        $request->validate([
            "catname"=>"required",
            "description"=>"required"
      
        ]);
$category=new category();
$category->name=$request->catname;
$category->description=$request->description;

if($category->save()){
    return redirect()->route('fatchcategory')->with('success',"USER IS CREATED");
}
else{
    return "user is not register";
}
    }
    function fatch(){
        $allcategory=category::all();
        return view('admin.fatchcat',compact('allcategory'));
        
    }
    function delete($id){
        $user=category::find($id);
    category::destroy($user->id);
     return redirect()->route('fatchcategory')->with('success',"USER IS DELETED");
    }
   function edit($id){
    $data=category::find($id);
    return view('admin.editcat',compact('data'));
   }
   function update($id,Request $request){
    $data=category::find($id);
      $data->name=$request->catname;
         $data->description=$request->description;
       
         if($data->save()){
     return redirect()->route('fatchcategory')->with('success',"USER IS UPDATED");

         }
         else{
    return "user is not updated";
}}

















//author functions
  function author(){
        return view('admin.authorinsert');
    }
    function addauthor(Request $request){
        $request->validate([
            "authorname"=>"required",
            "detail"=>"required"
      
        ]);
$author=new author();
$author->name=$request->authorname;
$author->detail=$request->detail;

if($author->save()){
    return redirect()->route('allauthor')->with('success',"AUTHOR IS CREATED");
}
else{
    return "author is not register";
}
    }
    function fatchauthor(){
        $allauthor=author::all();
        return view('admin.authorfatch',compact('allauthor'));
        
    }
    function deleteauthor($id){
        $user=author::find($id);
    author::destroy($user->id);
     return redirect()->route('allauthor')->with('success',"AUTHOR IS DELETED");
    }
   function editauthor($id){
    $data=author::find($id);
    return view('admin.authoredit',compact('data'));
   }
   function updateauthor($id,Request $request){
    $data=author::find($id);
      $data->name=$request->authorname;
         $data->detail=$request->detail;
       
         if($data->save()){
     return redirect()->route('allauthor')->with('success',"AUTHOR IS UPDATED");

         }
         else{
    return "user is not updated";
}}




























//book_upload
function book(){
    return redirect()->route('select');
}

    function bookupload(Request $request){
        $request->validate([
            "book_title"=>"required",
            "book_price"=>"required",
            "book_stock"=>"required",
            "book_pdf"=>"required",
            "book_image"=>"required",
            "category_name"=>"required",
            "author_name"=>"required",
            "description"=>"required",
      
        ]);
$pdf=$request->file("book_pdf")->store("books","public");
$pic=$request->file("book_image")->store("books_pics","public");
$pdfpath=basename($pdf);
$picpath=basename($pic);

$book=new book();
$book->title=$request->book_title;
$book->price=$request->book_price;
$book->stock=$request->book_stock;
$book->pdf=$pdfpath;
$book->image=$picpath;
$book->description=$request->description;
$book->category_id=$request->category_name;
$book->author_id=$request->author_name;


if($book->save()){
    return redirect()->route('bookfatch')->with('success',"BOOK IS UPLOADED");

}
else{
    return "data is not inserted";
}


    }
    function book_fatch(){
        $all_book=book::with(['book_category','book_author'])->get();
         return view('admin.book_fatch',compact('all_book'));
//return $all_book;
    }
    
      function deletebook($id){
        $user=book::find($id);
    book::destroy($user->id);
     return redirect()->route('bookfatch')->with('success',"BOOK IS DELETED");
    }
   function editbook($id){
    $data=book::find($id);
  $selectcat=category::all();
        $selectauth=author::all();
    return view('admin.book_edit',compact('data','selectcat','selectauth'));
   }

   function updatebook($id,Request $request){
    $pdf=$request->file("book_pdf")->store("books","public");
$pic=$request->file("book_image")->store("books_pics","public");
$pdfpath=basename($pdf);
$picpath=basename($pic);

    $book=book::find($id);
      $book->title=$request->book_title;
$book->price=$request->book_price;
$book->stock=$request->book_stock;
$book->pdf=$pdfpath;
$book->image=$picpath;
$book->description=$request->description;
$book->category_id=$request->category_name;
$book->author_id=$request->author_name;

         if($book->save()){
     return redirect()->route('bookfatch')->with('success',"BOOK IS UPDATED");

         }
         else{
    return "user is not updated";
}}

    
    //select category and author function
           function select_cat_auth(){
        $selectcat=category::all();
        $selectauth=author::all();
       return view('admin.bookupload',compact('selectcat','selectauth'));
    
    }
   
function fatch_orders(){
$orders = order::with(['user_order', 'book_order'])
    ->orderBy('id', 'asc')
    ->get();
$pay = payment::whereIn('order_id', $orders->pluck('id')) ->get();

   return view('admin.orders',compact('orders','pay'));
 //return $pay;
    }
    //complete orders detail 
function all_order_deatil($id,){
     $order=order::with(['user_order','book_order'])->find($id);
      $order2 = payment::with(['order_payment'])->where('order_id', $id)->first();
  return view('admin.order_detail',compact('order','order2'));
   //   return $order2;

 
}
   
//order status update
   function update_order($id,Request $request){
    $data=order::find($id);
      $data->status=$request->order_status;
      
         if($data->save()){
     return redirect()->route('admin.orders');

         }
         else{
    return "user is not updated";
}}
//news working start
function upload_news(){
    return view('admin.news_upload');
}
    function news_publish(Request $request){

$pic=$request->file("book_image")->store("books_pics","public");

$picpath=basename($pic);

$news=new news();
$news->title=$request->title;
$news->description=$request->description;
$news->start_date=$request->published_date;
$news->end_date=$request->end_date;
$news->prize=$request->prize;
$news->image=$picpath;
$news->status=$request->status;




if($news->save()){
    return redirect()->route('count_total');
 

}
else{
    return "data is not inserted";
}


    }
    function competition($id){
        $news=news::find($id);
        $userid=Auth::id();
        return view('user.competition',compact('news','userid'));
    }
    function competition_upload(Request $request)
    {
        $pdf=$request->file("file")->store("books","public");

$pdfpath=basename($pdf);


        $entry = new competition();

        $entry->name = $request->name;
        $entry->email = $request->email;
        $entry->submission_title = $request->submission_title;
        $entry->writing = $request->writing;

        $entry->start_date = $request->start_date;
        $entry->end_date = $request->end_date;
        $entry->title = $request->title;
        $entry->prize = $request->prize;
        $entry->user_id = $request->userid;
        $entry->rank = $request->rank;

$entry->file = $pdfpath;
        if ($entry->save()) {
return redirect()->route('bookshows');
        }

    }
//news fatch and update
function fatchnews(){
    $news=news::all();
    return view('admin.news_fatch',compact('news'));
}
 function update_news(Request $request, $id)
{
    $news = News::find($id);

    if (!$news) {
        return redirect()->back()->with('error', 'News not found');
    }

    $news->title = $request->title;
    $news->description = $request->description;
    $news->prize = $request->prize;
    $news->start_date = $request->start_date;
    $news->end_date = $request->end_date;
    $news->status = $request->status;

    $news->save();

    return redirect()->back()->with('success', 'News updated successfully');
}
//delet particcipate
  function delcomp($id){
        $user=competition::find($id);
    competition::destroy($user->id);
     return redirect()->route('count_total');
    }
//winner update
function winner(){
    $userid=Auth::id();
    $winner=competition::where('user_id',$userid)->get();
    $winner2=competition::where('user_id',$userid)->get();
    return view('user.winner',compact('winner','winner2'));
}

function winning(Request $request , $id){
    $win=competition::find($id);
    $win->rank=$request->rank;
   
    if( $win->save()){
        return redirect()->route('count_total');
    }
}

//contact us
  public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($data);

        return back()->with('success', 'Your message has been sent successfully.');
    }
    //contact fatch
    function fatchcontact(){
     $contacts = Contact::latest()->get();

    return view('admin.user_contact', compact('contacts'));
    }
    }
