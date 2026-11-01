<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pest\Support\View;

class authController extends Controller
{
     
    function regform(){
        return view('auth.register');
    }
    function register(Request $request){
        $request->validate([
            "username"=>"required",
            "usermail"=>"required|email|unique:users,email",
            "userpass"=>"required|min:3|max:15",
           
        ]);
$user=new User();
$user->name=$request->username;
$user->email=$request->usermail;
$user->password=$request->userpass;
if($user->save()){
    return redirect()->route('loginform')->with('success',"USER IS CREATED");
}
else{
    return "user is not register";
}
    }
    function fatch(){
        $alluser=User::all();
        return view('auth.userfatch',compact('alluser'));
        
    }
    function delete($id){
        $user=User::find($id);
    User::destroy($user->id);
     return redirect()->route('userfatch')->with('success',"USER IS DELETED");
    }
   function edit($id){
    $data=User::find($id);
    return view('auth.edit',compact('data'));
   }
   function update($id,Request $request){
    $data=User::find($id);
      $data->name=$request->username;
         $data->email=$request->usermail;
         $data->password=$request->userpass;
         if($data->save()){
     return redirect()->route('userfatch')->with('success',"USER IS UPDATED");

         }
         else{
    return "user is not updated";
}}

    // Login Form
    function loginform()
    {
        return view('auth.login');
    }

    // Login
 
function userlogin(Request $request)
{
    $request->validate([
        'usermail' => 'required|email',
        'userpass' => 'required',
    ]);

    $credentials = [
        'email' => $request->usermail,
        'password' => $request->userpass,
    ];

    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        if (Auth::user()->role == 'admin') {
            return redirect()->route('count_total');
        }
        elseif (Auth::user()->role == 'user') {
            return redirect()->route('bookshows');
        }
        else {
            return redirect()->route('adduser');
        }

    } else {
        // Wrong email or password
        return redirect()->route('adduser');
    }
}



    // Logout
    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
return view('auth.login');
  
        }
}


