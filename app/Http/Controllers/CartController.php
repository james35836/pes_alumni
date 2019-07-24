<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Validator;
use Session;
use Carbon\Carbon;

class CartController extends Controller
{
    public function get_unique_id()
    {
        if(Session::get('cart_key'))
        {
            $return = Session::get('cart_key');
        }
        else
        {
            $generated = substr(time(),0,4)."-".substr(str_shuffle("1234567890".time()), 0,13);
            Session::put('cart_key',$generated);
            $return = Session::get('cart_key');
        }
        return $return;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart_key = Session::get('cart_key');
        $data['_data']      = Cart::with(['product'])->where('key',$cart_key)->where('status',0)->paginate(6);
        foreach($data['_data'] as $key=>$carts)
        {
            $data['_data'][$key]['product']['product_total']       = "&#8369; ". $carts['product']['price'] * $carts['quantity'];
        }
        $data['sub_total']  = $data['_data']->sum('product.price');
        $data['sub_discount']  = $data['_data']->sum('product.discount');
        $data['total']  = $data['sub_total'] - $data['sub_discount'];
        $data['amount']  = $data['total'];

        $data['sub_total']  = "&#8369; ". $data['sub_total'];
        $data['sub_discount']  = "&#8369; ". $data['sub_discount'];
        $data['total']  = "&#8369; ".$data['total'];


        return view('front_page.view_cart',$data);
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

    public function store(Request $request)
    {
        $data  = $request->all();
        $rules = array(
            'product_id'   => ['required'],
        );
        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return 0;
        } 
        else 
        {
            $data['key'] = $this->get_unique_id();

            $cart = Cart::create([
                'key'          => $data['key'],
                'quantity'   => isset($data['quantity']) ? $data['quantity'] : 1,
                'product_id'   => $data['product_id'],
                'created_at'   => Carbon::now(),
            ]);

            return 1;

            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
