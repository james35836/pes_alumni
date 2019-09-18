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

    
    public function manage_post_edit(){
        $id = Request('id');
        $data['data'] = Post::findOrFail($id);
        return view('back_page.manage_post.post_edit',$data);
    }

    

    public function story_list()
    {
        $data['_data'] = Post::where('type','story_post')->paginate(10);
        return view('back_page.manage_post.stories',$data);
    }
    
    public function index()
    {
        $data['_events'] = Post::paginate(10);
        return view('back_page.manage_post.events',$data);
    }

    public function events()
    {
        $data['_events'] = Post::where('type','event_post')->paginate(10);
        return view('back_page.manage_post.events',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['type'] = ['event_post'=>'Event','story_post'=>'Story','announcement_post'=>'Announcement'];
        $data['_category'] = Category::all();
        return view('back_page.manage_post.add',$data);
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
            $data['name']       = isset($data['name']) ? $data['name']: '';
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
            
            return redirect()->back();


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['type'] = ['event_post','story_post','announcement_post'];

        $data['post'] = Post::findOrFail($id);
        return view('back_page.manage_post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data  = $request->all();
        $id  = $data['id'];
        // dd($data);
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
            $update['group_id']   = isset($data['group_id']) ? $data['group_id']: 1;
            $update['name']       = isset($data['name']) ? $data['name']: '';
            $update['type']       = isset($data['type']) ? $data['type']: '';
            $update['time']       = isset($data['time']) ? $data['time']: '';
            $update['date']       = isset($data['date']) ? $data['date']: '';
            $update['place']       = isset($data['place']) ? $data['place']: '';
            $update['description']       = isset($data['description']) ? $data['description']: '';
            if(isset($data['thumbnail'])){
                $imageName = "event-".time().'.'.$data['thumbnail']->getClientOriginalExtension();
                $data['thumbnail']->move(public_path('posts_img'), $imageName);
                $image_name = "/posts_img/".$imageName;
            }
            $update['thumbnail'] = $image_name;
            
            $update['user_id'] =  Auth::user()->id;
            $update['updated_at'] =  Carbon::now();
            $new = Post::where('id', $id)->update($update);
            

            return Post::findOrFail($id)->load('user');


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Post::where('id',$id)->delete();
        // Photo::where('id',$id)->delete();

        return back()->with('success', 'Post successfully updated');
    }
}

