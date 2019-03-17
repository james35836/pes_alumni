<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Officer;
use App\Event;
use App\Stories;
use App\Shop;
class FrontController extends Controller
{
    public function index()
    {
        return view('front_page.landing');
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
        $data['_event'] = Event::all();
        return view('front_page.events',$data);
    }
    public function about()
    {
        $data['_officer'] = Officer::all();

        return view('front_page.about',$data);
    }
    public function contact()
    {
        return view('front_page.contact');
    }
}
