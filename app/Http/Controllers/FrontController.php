<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Cart;
use App\Product;
use App\Category;
use Mail;
use Session;
class FrontController extends Controller
{
    public function index()
    {
        $data['_event'] = Post::all()->where('type','event_post');
        return view('front_page.landing',$data);
    }
    public function stories()
    {
        $data['_data'] = Post::where('type','story_post')->paginate(5);
        return view('front_page.stories',$data);
    }
    public function product(Product $product)
    {
        $data['_data']      = Product::with(['category'])->paginate(6);
        $data['_product']   = Product::orderBy('created_at','DESC')->limit(4)->with(['category'])->get();
        $data['_category']  = Category::all();
        return view('front_page.product',$data);
    }

    public function checkout(Product $product)
    {
        $cart_key = Session::get('cart_key');
        $data['_data']      = Cart::with(['product'])->where('key',$cart_key)->where('status',0)->paginate(6);
        foreach($data['_data'] as $key=>$carts)
        {
            $data['_data'][$key]['product']['product_total']       = "&#8369; ". $carts['product']['price'] * $carts['quantity'];
        }
        $data['sub_total']  = $data['_data']->sum('product.price');
        $data['sub_discount']  = $data['_data']->sum('product.discount');
        $data['total']  = $data['sub_total'] - $data['sub_discount'];
        $data['amount']  = $data['total'];

        $data['sub_total']  = "&#8369; ". $data['sub_total'];
        $data['sub_discount']  = "&#8369; ". $data['sub_discount'];
        $data['total']  = "&#8369; ".$data['total'];

        $data['_product']   = Product::orderBy('created_at','DESC')->limit(4)->with(['category'])->get();
        $data['_category']  = Category::all();

        
        // dd($data['_data']['products']);


        return view('front_page.checkout_cart',$data);
    }

    public function product_details()
    {
        $data['data'] = Product::find(Request('id'));
        $data['_data']      = Product::with(['category'])->paginate(6);
        $data['_product']   = Product::orderBy('created_at','DESC')->limit(4)->with(['category'])->get();
        $data['_category']  = Category::all();
        return view('front_page.product_details',$data);
    }

    public function events()
    {
        $data['_data'] = Post::where('type','event_post')->paginate(5);
        return view('front_page.events',$data);
    }

    public function post_details()
    {
        $data['data'] = Post::find(Request('id'));
        return view('front_page.post_details',$data);
    }

    public function about()
    {
        $data['_officer'] = User::where('type',1)->where('status',1)->get();

        return view('front_page.about',$data);
    }
    public function contact()
    {
        return view('front_page.contact');
    }

    public function gallery()
    {
        return view('front_page.gallery');
    }


    public function send_email(Request $request)
    {
        $data          = $request->all();
        $data['title'] = "Customer Inquiry";
        $data['date_created'] = date('Y-m-d');
        $data['name_of_receiver'] = "Team";
        // $data['name_of_sender'] = "This is Test Mail Tuts Make";
        $data['action_link'] = "This is Test Mail Tuts Make";
        // $data['email_message'] = "This is Test Mail Tuts Make";
        // $data['email_messages'] = "This is Test Mail Tuts Make";
        $data['email_receiver'] = "jamesomosora@gmail.com";
    
        Mail::send('layouts.email_template', $data, function($message) use($data) {
            $message->to($data['email_receiver'], $data['name_of_receiver'])->subject('Customer Inquiry');
        });
 
        if (Mail::failures()) {
            return 'Sorry! Please try again latter';
        }else{
            return 'Great! Successfully send in your mail';
        }
    }
}
