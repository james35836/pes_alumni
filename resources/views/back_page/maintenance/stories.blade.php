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
            <b>ADD EVENTS</b>
        </a>
        </h4>
    </div>
    <div id="collapse1" class="collapse show">
        <div class="card-body">
            <form method="POST" action="/stories" enctype="multipart/form-data">
                    {{ csrf_field()}}
            <div class="row">
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input type="text" name="title" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label class="control-label">Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control" />
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