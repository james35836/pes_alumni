@extends('layouts.backend')
@section('content')
<div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    @foreach($_list as $list)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 p-30">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="/backend/img/student/1.jpg" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>Alexam Angles</h2>
                                <p class="dp">Computer Science</p>
                                <p class="dp-ag"><b>Age:</b> 20 Years</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
@endsection