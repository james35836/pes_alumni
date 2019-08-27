<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Input;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['_data'] = Photo::paginate(10);
        return view('back_page.manage_album.albums',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_page.manage_album.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $rules['images']                = "required";
        $rules['name']                 = "required";

        request()->validate($rules);

        // $data['count_images'] = count($request->file('images'));

        $album = Album::create($data);
        if( count($request->file('images')) > 0){
            foreach($request->file('images') as $key => $image)
            {
                $name = "/images/gallery-".$key.time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/images/', $name);
                Photo::create([
                    'name' => $name,
                    'album_id' => $album->id,
                    'description' => ""
                ]);
              
            }
        }

        

        return redirect()->route('albums.index')->with('success','Album and photos successfully added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $id = Request('id');
        $data['data'] = Album::findorFail($id);
        return view('back_page.manage_album.album_edit',$data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data'] = Album::findorFail($id);
        return view('back_page.manage_album.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();

        Album::where('id',$data['id'])->update([
            'name' => $data['name'],
            'description' => $data['description']
        ]);

        if($request->file('images') !==  null){
            foreach($request->file('images') as $key => $image)
            {
                $name = "/images/gallery-".$key.time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/images/', $name);
                Photo::create([
                    'name' => $name,
                    'album_id' => $data['id'],
                    'description' => ""
                ]);
              
            }

            return back()->with('success', 'Album and photos successfully updated');

        }
        
        return back()->with('success', 'Album successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Photo::where('id',$id)->delete();

        return "";
    }
}
