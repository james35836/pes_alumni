<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use App\Cart;
// use Session;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct(){
    	$count = 0;
    	if(Session::get('cart_key')){
    		$count = Cart::where('key',Session::get('cart_key'))->where('status',0)->count();
    	}

    	View::share('cart_count', $count);
    }
}
