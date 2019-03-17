<?php

namespace App\Http\Controllers;

use App\Stories;
use Illuminate\Http\Request;
use Auth;
use Validator;
class StoriesController extends Controller
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
        return view('back_page.maintenance.stories');
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
        // validate
        $data  = $request->all();
        $rules = array(
            'thumbnail'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'          => ['required', 'string', 'max:255'],
            'description'   => ['required',],
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
            

            $imageName = "stories-".time().'.'.$data['thumbnail']->getClientOriginalExtension();
            $data['thumbnail']->move(public_path('stories_img'), $imageName);

            return Stories::create([
                'title'          => $data['title'],
                'description'   => $data['description'],
                'thumbnail'     => "/stories_img/".$imageName,
                'user_id'       => Auth::user()->id,
            ]);

            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function show(Stories $stories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function edit(Stories $stories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stories $stories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stories  $stories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stories $stories)
    {
        //
    }
}
