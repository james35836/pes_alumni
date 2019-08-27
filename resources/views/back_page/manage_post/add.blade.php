@extends('layouts.backend')


@section('content')

<!-- Forms Section-->
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            
            <!-- Form Elements -->
            <div class="col-lg-12">
                <div  role="tabpanel" aria-labelledby="edit-settings-tab" class="tab-pane fade edit-settings-tab active show">
                    <div class="card" >
                        
                        <div class="card-header d-flex align-items-center">
                            <div class="col-md-6">
                                <h3 class="h4">Add Posts</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                   @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                   @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-body">
                            {!! Form::open(array('route' => 'users.store','method'=>'POST','class' => 'form-horizontal row')) !!}
                            
                                @csrf
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Name:</label>
                                        {!! Form::text('name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Post Type:</label>
                                        {!! Form::select('type',$type, null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Date:</label>
                                        {!! Form::text('date', null, array('placeholder' => 'Date','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Time:</label>
                                        {!! Form::text('time', null, array('placeholder' => 'Time','class' => 'form-control')) !!}
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <div class="form-group">
                                        <label>Description:</label>
                                        {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                
                                
                                <div class="line"></div>
                                <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection