<?php

namespace App\Http\Controllers;

use App\Post;
use Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Category;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manage_post_add(){

        $data['_category'] = Category::all();
        return view('back_page.maintenance.manage_post.post_add',$data);
    }

    public function event_list()
    {
        $data['_events'] = Post::where('type','event_post')->paginate(10);
        return view('back_page.maintenance.events',$data);
    }

    public function story_list()
    {
        $data['_data'] = Post::where('type','event_post')->paginate(10);
        return view('back_page.maintenance.stories',$data);
    }
    
    public function index()
    {
        $data['_events'] = Post::all();
        return view('back_page.maintenance.events',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data  = $request->all();
        $rules = array(
            // 'thumbnail'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'name'          => ['required', 'string', 'max:255'],
            // 'date'          => ['required', 'string', 'max:255'],
            // 'time'          => ['required', 'string', 'max:255'],
            // 'place'         => ['required', 'string', 'max:255'],
            'description'   => ['required', 'string'],
            //'group_id'      => ['required'],
        );
        $validator = Validator::make($data, $rules);

        // process the login
        if($validator->fails()) {
            return "error";
        } 
        else 
        {
            $image_name = "/posts_img/default_image.png";
            $data['group_id']   = isset($data['group_id']) ? $data['group_id']: 1;
            $data['name']       = isset($data['name']) ? $data['name']: 'POST';
            $data['time']       = isset($data['time']) ? $data['time']: '';
            $data['date']       = isset($data['date']) ? $data['date']: '';
            $data['place']       = isset($data['place']) ? $data['place']: '';
            if(isset($data['thumbnail'])){
                $imageName = "event-".time().'.'.$data['thumbnail']->getClientOriginalExtension();
                $data['thumbnail']->move(public_path('posts_img'), $imageName);
                $image_name = "/posts_img/".$imageName;
            }
            $data['thumbnail'] = $image_name;
            
            $data['user_id'] =  Auth::user()->id;
            $data['created_at'] =  Carbon::now();
            $new = Post::create($data);
            $id = $new->id;
            return Post::findOrFail($id)->load('user');


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}

