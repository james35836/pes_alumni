@extends('layouts.frontend')
@section('content')
<div id="cart-page-contain">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <!-- left block Start  -->
                <div class="cart-content table-responsive">
                    <table class="cart-table table-responsive" style="width:100%">
                        <tbody>
                            <tr class="Cartproduct carttableheader">
                                <td style="width:10%"> Product</td>
                                <td style="width:25%">Name</td>
                                <td style="width:25%">Details</td>
                                <td style="width:5%">QNT</td>
                                <td style="width:10%">Price</td>
                                <td style="width:5%">Discount</td>
                                <td style="width:15%">Total</td>
                                <td class="delete" style="width:5%">&nbsp;</td>
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
                                    <span class="size">24 x 2.3 M</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text quantity qty text" title="Quantity" value="{{ $data->quantity }}" name="quantity" min="1" step="1">
                                    </div>
                                </td>
                                <td class="price">{!! $data->product->product_price !!}</td>
                                <td class="price">{!! $data->product->discount !!}</td>
                                <td class="price">{!! $data->product->product_total !!}</td>
                                <td class="delete delete_cart_item" data-id="{{   $data->id }}"><a title="Delete"> <i class="glyphicon glyphicon-trash "></i></a></td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div class="row mt-10">
                        <div class="pagination-bar">
                            {{$_data->links('pagination.pagination')}}
                        </div>
                    </div>
                </div>

                <div class="cart-bottom">
                    <div class="box-footer">
                        <div class="pull-left"><a class="btn btn-default" href="/shopping"> <i class="fa fa-arrow-left"></i> &nbsp; Continue shopping </a></div>
                        <div class="pull-right">
                            <button class="btn btn-default" type="submit"><i class="fa fa-undo"></i> &nbsp; Update cart</button>
                        </div>
                    </div>
                </div>
                <!-- left block end  -->
            </div>
            <div class="col-md-3 col-xs-12">
                <!-- right block Start  -->
                <div id="right">
                    <div class="sidebar-block">
                        <div class="sidebar-widget">
                            <div class="sidebar-title">
                                <h4>Cart Summary</h4>
                            </div>
                            <div id="order-detail-content" class="title-toggle table-block">
                                <div class="carttable">
                                    <table class="table" id="cart-summary">
                                        <tbody>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td class="price">{!! $sub_total !!}</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td class="price"><span class="success">Free shipping!</span></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Discount</td>
                                                <td id="total-tax" class="price">{!! $sub_discount !!}</td>
                                            </tr>
                                            <tr>
                                                <td> Total</td>
                                                <td id="total-price">{!! $total !!}</td>
                                            </tr>
                                            {{-- <tr>
                                                <td colspan="2"><div class="input-append couponForm">
                                                    <input type="text" placeholder="Gift or Coupon code" id="appendedInputButton">
                                                    <button type="button" class="col-lg-4 btn btn-success">Apply!</button>
                                                </div></td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="checkout"> <a href="/checkout" title="checkout" class="btn btn-success ">Proceed to checkout</a> </div>
                    </div>
                </div>
                <!-- left block end  -->
            </div>
        </div>
    </div>
</div>
@endsection