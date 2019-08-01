<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $data['_data'] = Product::paginate(10);
        return view('back_page.manage_product.products',$data);
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
            'thumbnail_1'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'          => ['required', 'string', 'max:255'],
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
            

            $imageName = "shop-".time().'.'.$data['thumbnail_1']->getClientOriginalExtension();
            $data['thumbnail_1']->move(public_path('shop_img'), $imageName);

            return Product::create([
                'name'          => $data['name'],
                'price'          => $data['price'],
                'colors'        => $data['colors'],
                'sizes'         => $data['sizes'],
                'discount'      => $data['discount'],
                'thumbnail_1'   => "/shop_img/".$imageName,
                'thumbnail_2'   => "/shop_img/".$imageName,
                'description'   => $data['description'],
                'category_id'   => $data['category_id'],
            ]);

            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Product $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $shop)
    {
        //
    }
}
