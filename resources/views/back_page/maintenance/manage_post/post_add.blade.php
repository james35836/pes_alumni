@extends('layouts.backend')
@section('content')

<div class="product-status mg-b-15">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
                <h4>Add User</h4>
                <form class="form-submit" method="POST" action= "/manage/post/add_submit">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <select name="type" class="form-control">
                                    <option value="event_post">Select Post Type</option>
                                    <option value="event_post">Event</option>
                                    <option value="announcement_post">Announcement</option>
                                    <option value="article_post">Article</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input name="date" type="text" class="form-control" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <input name="time" type="text" class="form-control" placeholder="Time">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                            <div class="form-group">
                                <textarea name="place" class="form-control" placeholder="Full Address For The Venue"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 panel-body no-padding">
                            <div class="summernote6">
                                <h5><strong>Add some details here</strong></h5>
                                <p><strong>Enjoy</strong> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="payment-adress">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection