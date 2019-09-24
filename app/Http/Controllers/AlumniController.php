<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Post;
use App\Product;


class AlumniController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function alumni_dashboard()
    {
        $data['user_count'] = User::count();
        $data['admin_count'] = User::where('access',4)->orWhere('access',3)->count();
        $data['member_count'] = User::where('access',0)->count();
        $data['inactive_count'] = User::where('status',0)->count();

        $data['user_percent'] = 100;
        $data['admin_percent'] = round(($data['admin_count'] /  $data['user_count']) * 100,2);
        $data['member_percent'] = round(($data['member_count'] /  $data['user_count']) * 100,2);
        $data['inactive_percent'] = round(($data['inactive_count'] /  $data['user_count']) * 100,2);

        $data['event_count'] = Post::where('type','event_post')->count();
        $data['story_count'] = Post::where('type','story_post')->count();
        $data['product_count'] = Product::count();

        return view('back_page.alumni_dashboard',$data);
    }
    public function alumni_list()
    {
        $data['_list'] = User::where('type','!=',2)->where('status',1)->paginate(10);
        return view('back_page.alumni_list',$data);
    }
    public function alumni_faculties()
    {
        $data['_list'] = User::where('type',2)->paginate(10);
        return view('back_page.alumni_faculties',$data);
    }
    public function alumni_feeds()
    {
        $data['_feed'] = Post::all()->sortByDesc("created_at")->where('type','feed_post');
        return view('back_page.alumni_feeds',$data);
    }

    public function alumni_profile()
    {
        $id                     = Request('user') ? Request('user') : Auth::user()->id;

        $view                   = Request('view');
        $data['data']           = User::findorFail($id);
        $data['data']['view']   = $view;
        return view('back_page.alumni_profile',$data);
    }
}
