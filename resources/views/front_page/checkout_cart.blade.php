@extends('layouts.frontend')
@section('content')
<div id="checkout-step-contain">
    <div class="container">
        <div class="account-content checkout-staps">
            <div class="account-content checkout-staps">
                <div class="staps">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div data-tab_name = "billing_tab" class="checkout-stap active checkout_tabs">
                                <div class="title"> <span class="stap">Step 1: </span><a href="javascript:"> Billing &amp; Shipping Address</a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div data-tab_name = "payment_tab" class="checkout-stap checkout_tabs">
                                <div class="title"><span class="stap">Step 2: </span><a href="javascript:"> Payment Method & Confirm Order</a></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <form class="billing-info form-checkout-cart" method="POST" action="/proceed/checkout" novalidate>
                @csrf
                <div class="" id="billing_tab">
                    <div class="products-order checkout billing-information">
                        <div class="checkbox">
                            <label>
                                <input class="addresses-toggle" type="checkbox" data-target="#my-billing-addresses" data-toggle="collapse" value="">
                                Use My Account
                            </label>
                        </div>
                        <div class="collapse row" id="my-billing-addresses">
                            <div class="col-xs-12 col-sm-4 ">
                                <h4 class="block-title-2"> Enter Pin Code </h4>
                                <div class="form-group pin-alert">
                                    <input type="text" placeholder="Enter Pin Code" class="code form-control">
                                </div>
                                <button class="btn   btn-primary btn-small pin-request" style="margin: 0px;" type="button"><i class="fa fa-user"></i> REQUEST</button>
   
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="text" required placeholder="First Name *" name="first_name" class="first_name form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" required placeholder="Last Name *" name="last_name" class="last_name form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="email" required placeholder="E-mail *" name="email" class="email form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" required placeholder="Phone" name="contact" class="contact form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="input-group">
                                    <input type="text" required placeholder="Address *" name="address" class="address form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <div class="col-md-12 col-sm-12"> <a data-tab_name="payment_tab" class="btn btn-primary pull-right checkout_tabs" href="javascript:">Continue</a> </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="display:none;" id="payment_tab">
                    <div class="col-lg-12">
                        <h2 class="delivery-method tf"> Choose your Payment method </h2>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="paymentBox">
                            <div class="accordion">
                                <div class="accordion-section">
                                    <a href="#accordion-1" class="accordion-section-title"> Cash on Delivery</a>
                                    <div id="accordion-1" class="accordion-section-content open" style="display: block;">
                                        <div class="panel-collapse collapse in" id="collapseOne">
                                            <div class="panel-body">
                                                <p>All transactions are secure and encrypted, and we neverstor To learn more, please view our privacy policy.</p>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" value="option1" name="optionsRadios">
                                                        Pay with Paypal
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" value="option1" name="optionsRadios">  
                                                        Bank/Remittance
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" value="option1" name="optionsRadios">
                                                        Cash On Delivery
                                                    </label>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="CommentsOrder">Add Comments About Your Order</label>
                                                    <textarea rows="3" cols="26" name="CommentsOrder" class="form-control" id="CommentsOrder"></textarea>
                                                </div> --}}
                                                <div class="form-group clearfix">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">I have read and agree to the <a href="terms-conditions.html">Terms &amp; Conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                            <h2 class="delivery-method tf">Confirm Order</h2>
                            <div class="cart-content table-responsive">
                                <table class="cart-table ">
                                    <tbody>
                                        <tr class="Cartproduct carttableheader">
                                            <td style="width:10%"> Product</td>
                                            <td style="width:25%">Name</td>
                                            <td style="width:25%">Details</td>
                                            <td style="width:5%">QNT</td>
                                            <td style="width:10%">Price</td>
                                            <td style="width:10%">Discount</td>
                                            <td style="width:15%">Total</td>
                                        </tr>
                                        @foreach($_data as $data)
                                        <tr class="Cartproduct">
                                            <td ><div class="image"><a href="/product/details?id={{ $data->product->id }}&name={{ $data->product->name }}"><img alt="img" src="{{ $data->product->product_image }}"></a></div></td>
                                            <td>
                                                <div class="product-name">
                                                    <h4>
                                                    <a href="/product/details?id={{ $data->product->id }}&name={{ $data->product->name }}">{{ $data->product->name }}</a>
                                                    </h4>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="size">M</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="quantity">
                                                    <span class="size">{{ $data->quantity }}</span>
                                                </div>
                                            </td>
                                            <td class="price">{!! $data->product->product_price !!}</td>
                                            <td class="price">{!! $data->product->discount !!}</td>
                                            <td class="price">{!! $data->product->product_total !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                        <tr class="cart-detail">
                                            <td colspan="2"></td>
                                            <td colspan="3">Sub Total</td>
                                            <td colspan="2" class="price">{!! $sub_total !!}</td>
                                        </tr>
                                        <tr class="cart-detail">
                                            <td colspan="2"></td>
                                            <td colspan="3">Shipping</td>
                                            <td colspan="2" class="price"><span class="success">Free shipping!</span></td>
                                        </tr>
                                        
                                        <tr class="cart-detail">
                                            <td colspan="2"></td>
                                            <td colspan="3">Discount</td>
                                            <td colspan="2" class="price" id="total-tax">{!! $sub_discount !!}</td>
                                        </tr>
                                        <tr class="cart-detail">
                                            <td colspan="2"></td>
                                            <td colspan="3"> Total</td>
                                            <td colspan="2" class="price" id="total-price">
                                                {!! $total !!}
                                                <input type="hidden" class="form-control" name="amount" value="{!! $amount !!}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="cart-bottom">
                                <div class="box-footer">

                                    <div class="pull-right"> 
                                        <button class="btn   btn-primary btn-small proceed_checkout_btn" type="submit">PROCEED CHECKOUT &nbsp; <i class="fa fa-check"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection