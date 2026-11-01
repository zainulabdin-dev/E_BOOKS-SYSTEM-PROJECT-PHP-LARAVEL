<?php

namespace App\Providers;

use App\Models\author;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\cart;
use App\Models\order;
use App\Models\payment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
public function boot(): void
{
 View::composer('*', function ($view) {

    $cartCount = Auth::check()
        ? cart::where('user_id', Auth::id())->count()
        : 0;

    $user = Auth::check()
        ? User::find(Auth::id())
        : null;

        $ordercount =order::all()->count();
         $customer =User::all()->count();
         $authorcount =author::all()->count();
    

        

    $view->with([
        'cartCount' => $cartCount,
        'user' => $user,
        'ordercount' => $ordercount,
        'customer' => $customer,
        'authorcount' => $authorcount,
       
    ]);

});
}
}