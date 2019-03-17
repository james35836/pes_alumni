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
                  <td style="width:15%"> Product</td>
                  <td style="width:45%">Details</td>
                  <td style="width:10%">QNT</td>
                  <td style="width:5%">Discount</td>
                  <td style="width:15%">Total</td>
                  <td class="delete" style="width:10%">&nbsp;</td>
                </tr>
                <tr class="Cartproduct">
                  <td ><div class="image"><a href="product-details.html"><img alt="img" src="images/product/cart70x92.jpg"></a></div></td>
                  <td><div class="product-name">
                      <h4><a href="product-detail-view.html">Black African Print Pencil Skirt </a></h4>
                    </div>
                    <span class="size">24 x 2.3 M</span>
                    <div class="price"><span>$8.80</span></div></td>
                  <td class="product-quantity"><div class="quantity">
                      <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="cart" min="0" step="1">
                    </div></td>
                  <td>0</td>
                  <td class="price">$300</td>
                  <td class="delete"><a title="Delete"> <i class="glyphicon glyphicon-trash "></i></a></td>
                </tr>
                <tr class="Cartproduct">
                  <td ><div class="image"><a href="product-details.html"><img alt="img" src="images/product/cart2-70x92.jpg"></a></div></td>
                  <td><div class="product-name">
                      <h4><a href="product-detail-view.html">Black African Print Pencil Skirt </a></h4>
                    </div>
                    <span class="size">24 x 2.3 M</span>
                    <div class="price"><span>$8.80</span></div></td>
                  <td class="product-quantity"><div class="quantity">
                      <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="cart" min="0" step="1">
                    </div></td>
                  <td>0</td>
                  <td class="price">$300</td>
                  <td class="delete"><a title="Delete"> <i class="glyphicon glyphicon-trash"></i></a></td>
                </tr>
                <tr class="Cartproduct">
                  <td ><div class="image"><a href="product-details.html"><img alt="img" src="images/product/car3-70x92.jpg"></a></div></td>
                  <td><div class="product-name">
                      <h4><a href="product-detail-view.html">Black African Print Pencil Skirt </a></h4>
                    </div>
                    <span class="size">24 x 2.3 M</span>
                    <div class="price"><span>$8.80</span></div></td>
                  <td class="product-quantity"><div class="quantity">
                      <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="cart" min="0" step="1">
                    </div></td>
                  <td>0</td>
                  <td class="price">$300</td>
                  <td class="delete"><a title="Delete"> <i class="glyphicon glyphicon-trash "></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="cart-bottom">
            <div class="box-footer">
              <div class="pull-left"><a class="btn btn-default" href="index.html"> <i class="fa fa-arrow-left"></i> &nbsp; Continue shopping </a></div>
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
                          <td>Total products</td>
                          <td class="price">$125.05</td>
                        </tr>
                        <tr>
                          <td>Shipping</td>
                          <td class="price"><span class="success">Free shipping!</span></td>
                        </tr>
                        <tr class="cart-total-price ">
                          <td>Total (tax excl.)</td>
                          <td class="price">$125.05</td>
                        </tr>
                        <tr>
                          <td>Total tax</td>
                          <td id="total-tax" class="price">$0.00</td>
                        </tr>
                        <tr>
                          <td> Total</td>
                          <td id="total-price">$125.05</td>
                        </tr>
                        <tr>
                          <td colspan="2"><div class="input-append couponForm">
                              <input type="text" placeholder="Gift or Coupon code" id="appendedInputButton">
                              <button type="button" class="col-lg-4 btn btn-success">Apply!</button>
                            </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="checkout"> <a href="checkout.html" title="checkout" class="btn btn-default ">Proceed to checkout</a> </div>
            </div>
          </div>
          <!-- left block end  --> 
        </div>
      </div>
    </div>
  </div>
@endsection