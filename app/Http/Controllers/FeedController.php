<?php

namespace App\Http\Controllers;

use App\Feed;
use Illuminate\Http\Request;
use Redirect;
class FeedController extends Controller
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
    
    public function index()
    {
        //
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
        title   varchar(255) NULL    
content text NULL    
thumbnail   varchar(255) NULL    
group_id    int(10) unsigned     
user_id int(10) unsigned     
archived    tinyint(4) [1]   
created_at  timestamp NULL   
updated_at  

        $rules = array(
            // 'thumbnail'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'          => ['required', 'string', 'max:255'],
            'content'   => ['required', 'string'],
            'group_id'      => ['required'],
        );
        $validator = Validator::make($data, $rules);

        // process the login
        if($validator->fails()) {
           
            return Redirect::to('nerds/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } 
        else 
        {
            

            $imageName = "event-".time().'.'.$data['thumbnail']->getClientOriginalExtension();
            $data['thumbnail']->move(public_path('event_img'), $imageName);

            return Event::create([
                'name'          => $data['name'],
                'description'   => $data['description'],
                'thumbnail'     => "/event_img/".$imageName,
                'time'          => $data['time'],
                'date'          => $data['date'],
                'place'         => $data['place'],
                'group_id'      => $data['group_id'],
                'created_at'      =>Carbon::now(),
                'user_id'       => Auth::user()->id,
            ]);

            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function show(Feed $feed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function edit(Feed $feed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feed $feed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feed $feed)
    {
        //
    }
}
