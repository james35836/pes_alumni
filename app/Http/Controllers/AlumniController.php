<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;


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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function alumni_dashboard()
    {
        $data['_list'] = User::all();
        return view('back_page.alumni_dashboard',$data);
    }
    public function alumni_list()
    {
        $data['_list'] = User::where('type',1)->paginate(10);
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

    public function alumni_info()
    {
        return view('back_page.alumni_info');
    }

    public function alumni_info_update()
    {
        return view('back_page.alumni_info_update');
    }

    public function alumni_profile()
    {
        $id                     = Request('user');
        $view                   = Request('view');
        $data['data']           = User::findorFail($id);
        $data['data']['view']   = $view;
        return view('back_page.alumni_profile',$data);
    }
}
