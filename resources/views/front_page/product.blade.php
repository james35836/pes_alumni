@extends('layouts.frontend')
@section('content')
<div id="product-category">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div id="left">
                    <div class="sidebar-block">
                        <div class="sidebar-widget Category-block">
                            <div class="sidebar-title">
                                <h4> Categories</h4>
                            </div>
                            <ul class="title-toggle">
                                @foreach($_category as $category)
                                <li><a href="grid-view.html">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="sidebar-widget Best-Products-block">
                            <div class="sidebar-title">
                                <h4> Best Products</h4>
                            </div>
                            <ul class="title-toggle">
                                @foreach($_product as $product)
                                <li>
                                    <div class="product-block ">
                                        <div class="item col-md-4 col-sm-4 col-xs-4">
                                            <div class="image">
                                                <a href="/product/details?id={{ $product->id }}&name={{ $product->name }}">
                                                    <img class="img-responsive" title="T-shirt" alt="T-shirt" src="{{ $product->product_image }}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item col-md-8 col-sm-8 col-xs-8">
                                            <div class="product-details">
                                                <div class="product-name">
                                                    <h5><a href="/product/details?id={{ $product->id }}&name={{ $product->name }}">{{ $product->name }}</a></h5>
                                                </div>
                                                <div class="review"></div>
                                                <div class="price"> <span class="price-new">{!! $product->product_price !!}</span> </div>
                                                <div class="addto-cart"><a href="#">Add to Cart</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- left block end  -->
            </div>
            <div class="col-md-9 col-sm-8">
                <!-- right block Start  -->
                <div id="right">
                    <div class="category-banner"> <a href="#"><img src="/img/banner.png" alt="#"></a> </div>
                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>
                        <div class="col-md-6">
                            <div class="shoring pull-right">
                                <div class="short-by">
                                    <p>Sort By</p>
                                    <div class="select-item">
                                        <select>
                                            <option value="" selected="selected">Name (A to Z)</option>
                                            <option value="">Name(Z - A)</option>
                                            <option value="">price(low&gt;high)</option>
                                            <option value="">price(high &gt; low)</option>
                                            <option value="">rating(highest)</option>
                                            <option value="">rating(lowest)</option>
                                        </select>
                                        <span class="fa fa-angle-down"></span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="product-grid-view">
                        <ul>
                            @foreach($_data as $data)
                            <li>
                                <div class="item col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-block ">
                                        <div class="image">
                                            <a href="/product/details?id={{ $data->id }}&name={{ $data->name }}">
                                                <img class="img-responsive" title="T-shirt" alt="T-shirt" src="{{ $data->product_image }}">
                                            </a>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name">
                                                <h4><a href="/product/details?id={{ $data->id }}&name={{ $data->name }}">{{ $data->name }} </a></h4>
                                            </div>
                                            <div class="price"> <span class="price-old">{!! $data->product_price !!}</span> <span class="price-new">{!! $data->product_price !!}</span> </div>
                                            <div class="product-hov">
                                                <ul>
                                                    <li class="wish"><a href="/product/details?id={{ $data->id }}&name={{ $data->name }}"></a></li>
                                                    <li class="addtocart addItemToCart" data-id="{{ $data->id }}"><a href="#">Add to Cart</a> </li>
                                                    <li class="compare"><a href="/product/details?id={{ $data->id }}&name={{ $data->name }}"></a></li>
                                                </ul>
                                                <div class="review"> <span class="rate"> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star"></i> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="pagination-bar">
                        {{$_data->links('pagination.pagination')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection