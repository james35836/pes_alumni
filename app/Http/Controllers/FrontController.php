<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Stories;
use App\Product;
use App\Category;
use Mail;
class FrontController extends Controller
{
    public function index()
    {
        $data['_event'] = Post::all()->where('type','event_post');
        return view('front_page.landing',$data);
    }
    public function stories()
    {
        $data['_stories'] = Stories::all();
        return view('front_page.stories',$data);
    }
    public function product(Product $product)
    {
        $data['_data']      = Product::with(['category'])->paginate(6);
        $data['_product']   = Product::orderBy('created_at','DESC')->limit(4)->with(['category'])->get();
        $data['_category']  = Category::all();
        // dd($data['_product']);
        return view('front_page.product',$data);
    }
    public function events()
    {
        $data['_data'] = Post::where('type','event_post')->paginate(5);
        return view('front_page.events',$data);
    }

    public function details()
    {
        $data['data'] = Post::find(Request('id'));
        return view('front_page.details',$data);
    }
    public function about()
    {
        $data['_officer'] = User::all();

        return view('front_page.about',$data);
    }
    public function contact()
    {
        return view('front_page.contact');
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
