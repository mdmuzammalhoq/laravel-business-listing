@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing<a href="/dashboard" class="pull-right btn btn-primary btn-xs">Get back</a></div>

                <div class="panel-body">
                {!! Form::open(['action' => 'ListingsConroller@store', 'method' => 'POST' ]) !!}
                   <div class="form-group">
	                   {!! Form::label('Name *'); !!}
	                   {!! Form::text('name', null, ['class'=>'form-control']); !!}
                   </div>
                   <div class="form-group">
	                   {!! Form::label('Email *'); !!}
	                   {!! Form::email('email', null, ['class'=>'form-control']); !!}
                   </div>
                   <div class="form-group">
	                   {!! Form::label('Phone'); !!}
	                   {!! Form::text('phone', null, ['class'=>'form-control']); !!}
                   </div>
                   
                   
                   <div class="form-group">
	                   {!! Form::label('Address'); !!}
	                   {!! Form::text('address', null, ['class'=>'form-control']); !!}
                   </div>
                   <div class="form-group">
	                   {!! Form::label('Website'); !!}
	                   {!! Form::text('website', null, ['class'=>'form-control']); !!}
                   </div>
                   <div class="form-group">
	                   {!! Form::label('Biodata'); !!}
	                   {!! Form::textarea('bio', null, ['class'=>'form-control']); !!}
                   </div>
                   <div class="form-group">
	                   {!! Form::submit('submit', ['class'=>'btn btn-primary']); !!}
                   </div>
                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection