<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Stories;
use App\Shop;
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
    public function shopping(Shop $product)
    {
        $data['_shop'] = Shop::with(['category'])->get();
        return view('front_page.shopping',$data);
    }
    public function events()
    {
        $data['_event'] = Post::all();
        return view('front_page.events',$data);
    }

    public function events_details()
    {
        $data['event'] = Post::find(Request('id'));
        return view('front_page.event_details',$data);
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
}
