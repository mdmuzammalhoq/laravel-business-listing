@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"> <a href="listings/create" class="btn btn-primary btn-sm">Create Listings</a> </span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }} 
                        </div>
                    @endif

                   @if(count('listings'))
                        <table class="table table-striped">
                            <tr>
                                <th>Comapny Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                            
                                @foreach($listings as $listing)
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                    
                                    <td><a class="btn btn-primary btn-xs" href="listings/{{$listing->id}}/edit">Edit</a></td>
                                    <td><a class="btn btn-primary btn-xs" href="listings/{{$listing->id}}">Delete</a></td>
                                </tr>
                                @endforeach
                            
                        </table>
                   @endif
                </div>
            </div>
        </div>
    </div>

@endsection
