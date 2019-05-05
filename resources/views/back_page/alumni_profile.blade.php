@extends('layouts.backend')
@section('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="{{$data->userinfo->user_profile}}" alt="" />
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center center">
                                <div class="address-hr ">
                                    <p><b>{{$data->userinfo->name}}</b> <br>{{$data->userinfo->work_position}}</p>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="{{$data->userinfo->fb_link}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <!-- <h3>500</h3> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="{{$data->userinfo->twitter_link}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <!-- <h3>900</h3> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="{{$data->userinfo->instagram_link}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <!-- <h3>600</h3> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Account</a></li>
                        @if($data->view == "my-account")
                        <li><a href="#INFORMATION">Update</a></li>
                        @endif
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h4>Basic Information</h4>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i><b><span style="display: inline-block;width: 84px;">Name</span></b>  {{$data->userinfo->name}}</li>
                                                        <li><i class="fa fa-angle-right"></i> <b><span style="display: inline-block;width: 84px;">Civil Status</span></b>{{$data->userinfo->civil_status ?: "N/A"}}</li>
                                                        <li><i class="fa fa-angle-right"></i> <b><span style="display: inline-block;width: 84px;">Gender</span></b> {{$data->userinfo->gender ?: "N/A"}}</li>
                                                        <li><i class="fa fa-angle-right"></i> <b><span style="display: inline-block;width: 84px;">Birthdate</span></b> {{$data->userinfo->birthdate ?: "N/A"}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h4>Contact Information</h4>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i><b><span style="display: inline-block;width: 100px;">Email Address</span></b>  {{$data->email}}</li>
                                                        <li><i class="fa fa-angle-right"></i> <b><span style="display: inline-block;width: 100px;">Phone Number</span></b> {{$data->userinfo->contact ?: "N/A"}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h4>Address</h4>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i><b><span style="display: inline-block;width: 200px;">Permanent Address</span></b>  {{$data->userinfo->permanent_address ?: "N/A"}} </li>
                                                        <li><i class="fa fa-angle-right"></i> <b><span style="display: inline-block;width: 200px;">Current Address</span></b> {{$data->userinfo->current_address ?: "N/A"}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h4>Education</h4>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i><b><span style="display: inline-block;width: 220px;">Elementary</span></b>  Paloc Elementary School </li>
                                                        <li><i class="fa fa-angle-right"></i> <b><span style="display: inline-block;width: 220px;">High School</span></b> {{$data->userinfo->high_school ?: "N/A"}}</li>
                                                        <li><i class="fa fa-angle-right"></i> <b><span style="display: inline-block;width: 220px;">College School</span></b> {{$data->userinfo->college_school ?: "N/A"}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h4>Works</h4>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i> <b><span style="display: inline-block;width: 220px;">{{$data->userinfo->work ?: ""}}</span></b> ({{$data->userinfo->work_position ?: "N/A"}})</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h4>Bio</h4>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="content-profile">
                                                            {{$data->userinfo->biography ?:"N/A"}}
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($data->view == "my-account")
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <form class="profile-update" method="PUT" action= "/alumni/update_user_info?id={{$data->id}}">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name = "first_name" class="form-control" value="{{$data->userinfo->first_name}}" placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name = "middle_name" class="form-control" value="{{$data->userinfo->middle_name}}" placeholder="Middle Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name = "last_name" class="form-control" value="{{$data->userinfo->last_name}}" placeholder="Last Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name = "birthdate" class="form-control" value="{{$data->userinfo->birthdate  ?: "" }}" placeholder="Date of Birth">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name = "contact" class="form-control" value="{{$data->userinfo->contact   ?: ""}}" placeholder="Phone">
                                                    </div>
                                                    <div class="form-group">{{$data->userinfo->gender}}
                                                        <select name = "gender" class="form-control">
                                                            <option value="">Select Gender</option>
                                                            <option value="Male" {{ $data->userinfo->gender  == "Male" ? "selected" : ""}}>Male</option>
                                                            <option value="Female" {{ $data->userinfo->gender  == "Female" ? "selected" : ""}}>Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name = "civil_status" class="form-control" value="{{$data->userinfo->civil_status}}">
                                                            <option value="">Select Status</option>
                                                            <option value="Single" {{ $data->userinfo->civil_status  == "Single" ? "selected" : ""}}>Single</option>
                                                            <option value="Married" {{ $data->userinfo->civil_status  == "Married" ? "selected" : ""}}>Married</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name = "work" class="form-control" value="{{$data->userinfo->work ?: ""}}" placeholder="Work">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name = "work_position" class="form-control" value="{{$data->userinfo->work_position  ?: ""}}" placeholder="Work Position">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name = "college_school" class="form-control" value="{{$data->userinfo->college_school  ?: ""}}" placeholder="College School">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name = "college_graduated" class="form-control" value="{{$data->userinfo->college_graduated  ?: ""}}" placeholder="Year Graduated">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name = "high_school" class="form-control" value="{{$data->userinfo->high_school  ?: ""}}" placeholder="High School">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name = "high_graduated" class="form-control" value="{{$data->userinfo->high_graduated  ?: ""}}" placeholder="Year Graduated">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="permanent_address" rows="2" placeholder="Permanent Address?">{{$data->userinfo->permanent_address  ?: ""}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="current_address" rows="2" placeholder="Current Address?">{{$data->userinfo->current_address  ?: ""}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="biography" rows="2" placeholder="Biography">{{$data->userinfo->biography  ?: ""}}</textarea>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress mg-t-15">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection