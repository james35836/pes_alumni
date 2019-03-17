<?php

namespace App\Http\Controllers;
use Auth;
use App\Event;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;

class EventController extends Controller
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
        $data['_events'] = Event::all();
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
            'thumbnail'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'          => ['required', 'string', 'max:255'],
            'date'          => ['required', 'string', 'max:255'],
            'time'          => ['required', 'string', 'max:255'],
            'place'         => ['required', 'string', 'max:255'],
            'description'   => ['required', 'string'],
            'group_id'      => ['required'],
        );
        $validator = Validator::make($data, $rules);

        // process the login
        if($validator->fails()) {
            dd($validator);
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
