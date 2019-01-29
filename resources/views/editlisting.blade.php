@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Listing <a href="/dashboard" class="pull-right btn btn-primary btn-xs">Go back</a></div>

                <div class="panel-body">
                {!! Form::open(['action' => ['ListingsConroller@update', $listing->id ], 'method' => 'POST' ]) !!}
                   <div class="form-group">
	                   {!! Form::label('Name *'); !!}
	                   {!! Form::text('name', $listing->name, ['class'=>'form-control']); !!}
                   </div>
                   <div class="form-group">
	                   {!! Form::label('Email *'); !!}
	                   {!! Form::email('email', $listing->email, ['class'=>'form-control']); !!}
                   </div>
                   <div class="form-group">
	                   {!! Form::label('Phone'); !!}
	                   {!! Form::text('phone', $listing->phone, ['class'=>'form-control']); !!}
                   </div>
                   
                   
                   <div class="form-group">
	                   {!! Form::label('Address'); !!}
	                   {!! Form::text('address', $listing->address, ['class'=>'form-control']); !!}
                   </div>
                   <div class="form-group">
	                   {!! Form::label('Website'); !!}
	                   {!! Form::text('website', $listing->website, ['class'=>'form-control']); !!}
                   </div>
                   <div class="form-group">
	                   {!! Form::label('Biodata'); !!}
	                   {!! Form::textarea('bio', $listing->bio, ['class'=>'form-control']); !!}
                   </div>
                   <div class="form-group">
	                   {!! Form::submit('Update', ['class'=>'btn btn-primary']); !!}
                   </div>
                      {{Form::hidden('_method', 'PUT')}}
                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection