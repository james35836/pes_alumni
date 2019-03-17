@extends('layouts.back')
@section('content')
<script type="text/javascript">
$(function () {
$(".date").datepicker({
autoclose: true,
todayHighlight: true
});
});
</script>
<div class="card card-default">
    <div class="card-header">
        <h4 class="card-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            <i class="glyphicon glyphicon-search text-gold"></i>
            <b>ADD PRODUCT</b>
        </a>
        </h4>
    </div>
    <div id="collapse1" class="collapse show">
        <div class="card-body">
            <form method="POST" action="/shop" enctype="multipart/form-data">
                    {{ csrf_field()}}
            <div class="row">
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="control-label">Product Name</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="control-label">Product Sizes</label>
                        <input type="text" name="sizes" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="control-label">Product Colors</label>
                        <input type="text" name="colors" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="control-label">Product Price</label>
                        <input type="text" name="price" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="control-label">Product Discount</label>
                        <input type="text" name="discount" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="control-label">Thumbnail 1</label>
                        <input type="file" name="thumbnail_1" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="control-label">Thumbnail 2</label>
                        <input type="file" name="thumbnail_2" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="control-label">Category</label>
                        <select class="form-control" name="category_id">
                            <option>1</option>
                            
                        </select>
                    </div>
                </div>
                
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea class="form-control"  rows="5" name="description"></textarea>
                    </div>
                </div>
                <div class="col-md-4  m-auto">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary submit-transaction w-100">SUBMIT</button>
                    </div>
                    <button class="button clear" type="reset">Clear</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection