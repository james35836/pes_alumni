@extends('layouts.backend')
@section('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="{{Auth::user()->userinfo->user_profile}}" alt="" />
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Name</b><br /> {{Auth::user()->userinfo->name}}</p>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <h3>500</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <h3>900</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <h3>600</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Activity</a></li>
                        <li><a href="#INFORMATION">Update Details</a></li>
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
                                                        <li> <b>Full Name</b> <i class="fa fa-angle-right"></i> Fly Zend</li>
                                                        <li><i class="fa fa-angle-right"></i> <b>Civil Status</b> Fly Zend</li>
                                                        <li><i class="fa fa-angle-right"></i> <b>Gender</b> Fly Zend</li>
                                                        <li><i class="fa fa-angle-right"></i> <b>Bithdate</b> Fly Zend</li>
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
                                                        <li><i class="fa fa-angle-right"></i> <b>Email Address</b> Fly Zend</li>
                                                        <li><i class="fa fa-angle-right"></i> <b>Phone Number</b> Fly Zend</li>
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
                                                        <li><i class="fa fa-angle-right"></i> Paloc Elementary School (SY: 2004)</li>
                                                        <li><i class="fa fa-angle-right"></i> Paloc National High School (SY: 2004)</li>
                                                        <li><i class="fa fa-angle-right"></i> Paloc College School (SY: 2004)</li>
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
                                                        <li><i class="fa fa-angle-right"></i> Paloc Elementary School (SY: 2004)</li>
                                                        <li><i class="fa fa-angle-right"></i> Paloc National High School (SY: 2004)</li>
                                                        <li><i class="fa fa-angle-right"></i> Paloc College School (SY: 2004)</li>
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
                                                        <li><i class="fa fa-angle-right"></i> Software Engr.</li>
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
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                            dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                            dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input name="number" type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Date of Birth">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Department">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Pincode">
                                                </div>
                                                <div class="file-upload-inner ts-forms">
                                                    <div class="input prepend-big-btn">
                                                        <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <div class="file-button">
                                                            Browse
                                                            <input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                        </div>
                                                        <input type="text" id="prepend-big-btn" placeholder="no file selected">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                    <input type="text" class="form-control" placeholder="Description">
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select Gender</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select country</option>
                                                        <option>India</option>
                                                        <option>Pakistan</option>
                                                        <option>Amerika</option>
                                                        <option>China</option>
                                                        <option>Dubai</option>
                                                        <option>Nepal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select state</option>
                                                        <option>Gujarat</option>
                                                        <option>Maharastra</option>
                                                        <option>Rajastan</option>
                                                        <option>Maharastra</option>
                                                        <option>Rajastan</option>
                                                        <option>Gujarat</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select city</option>
                                                        <option>Surat</option>
                                                        <option>Baroda</option>
                                                        <option>Navsari</option>
                                                        <option>Baroda</option>
                                                        <option>Surat</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Website URL">
                                                </div>
                                                <input type="number" class="form-control" placeholder="Mobile no.">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection