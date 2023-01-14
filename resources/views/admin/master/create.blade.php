@extends('layout.app.app')

@section('body')
{!! Form::open(['url' => '/app', 'method' => 'post','files'=>'true']) !!}

<div class="row">
	<div class="col-sm-3">
	{!! Form::text('title',null,['placeholder'=>'', 'id'=>'', 'class'=>'form-control']) !!}
	</div>
	<div class="col-sm-3">
	{!! Form::text('body',null,['placeholder'=>'', 'id'=>'', 'class'=>'form-control']) !!}
	</div> 
	<div class="col-sm-2">
	{!! Form::text('footer',null,['placeholder'=>'', 'id'=>'', 'class'=>'form-control']) !!}
	</div
	<div class="col-sm-2">
	{!! Form::file('file_name',['placeholder'=>'', 'id'=>'', 'class'=>'form-control']) !!}
	</div>
	<div class="col-sm-2">
	{!! Form::submit('Add-User',['id'=>'', 'class'=>'btn btn-primary']) !!}
	</div>
</div>
{!! Form::close() !!}

<!-- /resources/views/post/create.blade.php -->
 
<h1>Form Validations</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->

@stop

