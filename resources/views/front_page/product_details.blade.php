@extends('layouts.frontend')
@section('content')
<div id="product-category">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <!-- left block Start  -->
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
                                                <a href="product-detail-view.html">
                                                    <img class="img-responsive" title="T-shirt" alt="T-shirt" src="{{ $product->product_image }}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item col-md-8 col-sm-8 col-xs-8">
                                            <div class="product-details">
                                                <div class="product-name">
                                                    <h5><a href="product-detail-view.html">{{ $product->name }}</a></h5>
                                                </div>
                                                <div class="review"></div>
                                                <div class="price"> <span class="price-new">&#8369; {{ $product->product_price }}</span> </div>
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
                    <div class="product-detail-view">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="sp-wrap"> 
                                    <a class="item" href="{{ $data->product_image }}">
                                        <img src="{{ $data->product_image }}" alt="">
                                    </a> 
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-detail-content">
                                    <div class="product-name">
                                        <h4><a href="product-detail-view.html">{{ $data->name }} </a></h4>
                                    </div>
                                    <div class="review"> <span class="rate"> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star"></i> </span> 15 Review(s) | <a href="#">Add Your Review </a> </div>
                                    <div class="price"> <span class="price-old">$123.20</span> <span class="price-new">{{ $data->product_price }}</span> </div>
                                    <div class="stock"><span>In stock : </span>Availability </div>
                                    <div class="products-code"> <span>Product Code :</span> Html5_sample1</div>
                                    <div class="product-discription"><span>Description</span>
                                    <p>{!! $data->description !!}</p>
                                </div>
                                <div class="Sort-by">
                                    <label>Sort by</label>
                                    <select class="selectpicker form-control" id="select-by-size">
                                        <option selected="selected" value="#">S</option>
                                        <option value="#">M</option>
                                        <option value="#">L</option>
                                    </select>
                                </div>
                                <div class="Color">
                                    <label>Color</label>
                                    <select class="selectpicker form-control" id="select-by-color">
                                        <option selected="selected" value="#">Blue</option>
                                        <option value="#">Green</option>
                                        <option value="#">Orange</option>
                                        <option value="#">White</option>
                                    </select>
                                </div>
                                <div class="product-qty">
                                    <label for="qty">Qty:</label>
                                    <div class="custom-qty">
                                        <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">
                                        <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button type="submit" class="btn btn-default">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-detail-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="tabs">
                                <ul class="nav nav-tabs">
                                    <li><a class="tab-Description selected" title="Description">Description</a></li>
                                    <li><a class="tab-Product-Tags" title="Product-Tags">Product-Tags</a></li>
                                    <li><a class="tab-Reviews" title="Reviews">Reviews</a></li>
                                </ul>
                            </div>
                            <div id="items">
                                <div class="tab-content">
                                    <ul>
                                        <li>
                                            <div class="items-Description selected">
                                                <div class="Description"> <strong>The standard Lorem Ipsum passage, used since the 1500s</strong><br>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
                                                    <br>
                                                    <strong>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</strong><br>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="items-Product-Tags "><strong>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</strong><br>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur</div>
                                        </li>
                                        <li>
                                            <div class="items-Reviews ">masghrgjhgjr jh mahendra kathiriya shibhavadla lashkar</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Related-product">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="Featured-Products-title">
                                <h1 class="tf">Related Products</h1>
                            </div>
                            <div class= "customNavigation"> <a class="btn related_prev prev"><i class="fa fa-angle-left"></i></a> <a class="btn related_next next"><i class="fa fa-angle-right"></i></a> </div>
                            <div id="related-products" class="owl-carousel">
                                @foreach($_product as $product)
                                
                                <div class="item">
                                    <div class="product-block ">
                                        <div class="image"> <a href="product-detail-view.html"><img class="img-responsive" title="T-shirt" alt="T-shirt" src="{{ $product->product_image }}"></a> </div>
                                        <div class="product-details">
                                            <div class="product-name">
                                                <h4><a href="product-detail-view.html">Black African Print Pencil Skirt </a></h4>
                                            </div>
                                            <div class="price"> <span class="price-old">$123.20</span> <span class="price-new">$14.99</span> </div>
                                            <div class="product-hov">
                                                <ul>
                                                    <li class="wish"><a href="#" ></a></li>
                                                    <li class="addtocart"><a href="#" >Add to Cart</a> </li>
                                                    <li class="compare"><a href="#" ></a></li>
                                                </ul>
                                                <div class="review"> <span class="rate"> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star"></i> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right block end  -->
        </div>
    </div>
</div>
</div>
@endsection