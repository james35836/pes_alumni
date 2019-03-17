<?php

namespace App\Http\Controllers;

use App\Officer;
use Illuminate\Http\Request;
use Validator;

class OfficerController extends Controller
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
        $data['_officer'] = Officer::all();
        return view('back_page.maintenance.officer',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request->all());
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
            'name'          => ['required', 'string', 'max:255'],
            'description'   => ['required',],
            'position'      => ['required', 'string', 'max:255'],
        );
        $validator = Validator::make($data, $rules);

        // process the login
        if($validator->fails()) {
            // dd($validator);
            return Redirect::to('nerds/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } 
        else 
        {
            
            // dd($data);
            $imageName = "officer-".time().'.'.$data['thumbnail']->getClientOriginalExtension();
            $data['thumbnail']->move(public_path('officer_img'), $imageName);
            // $data['thumbnail'] = "/officer_img/".$imageName;
            return Officer::create([
                'position'      => $data['position'],
                'name'          => $data['name'],
                'description'   => $data['description'],
                'thumbnail'     => "/officer_img/".$imageName,
                'fb_link'       => $data['fb_link'],
                'linkedin_link' => $data['linkedin_link'],
                'twitter_link'  => $data['twitter_link'],
            ]);

            
        }
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function show(Officer $officer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function edit(Officer $officer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Officer $officer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Officer  $officer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Officer $officer)
    {
        //
    }
}
