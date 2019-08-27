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
                                <h3 class="h4">Add Album</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('albums.index') }}"> Back</a>
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
                            {!! Form::model($data, ['method' => 'PATCH','enctype'=>'multipart/form-data','class' => 'form-horizontal row','route' => ['users.update', $data->id]]) !!}
                            
                                @csrf
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Name:</label>
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label>Photos:</label><br>
                                        {!! Form::file('images[]', ['multiple' => 'multiple'])!!}
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="form-group">
                                        <label>Description:</label>
                                        {!! Form::textarea('description', null, array('rows' => '3','placeholder' => 'Description','class' => 'form-control')) !!}
                                    </div>
                                </div>
								<div class="form-group col-md-12">
									<div class="table-responsive">
			                            <table class="table table-borderless">
			                                <thead>
			                                    <tr>
			                                <th>Image</th>
			                               
			                                <th>Action</th>
			                            </tr>
			                                </thead>
			                                <tbody>
			                          
			                            @foreach($data->photo as $key=> $data)
			                            <tr>
			                                <td><img  style="height:100px;" src="{{$data->name}}" alt="" /></td>
			                                
			                                <td>
			                                    {!! Form::open(['method' => 'DELETE','route' => ['albums.destroy', $data->id],'style'=>'display:inline']) !!}
			                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger','disabled'=>'true']) !!}
			                                    {!! Form::close() !!}
			                                </td>
			                            </tr>
			                            @endforeach
			                                </tbody>
			                            </table>
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