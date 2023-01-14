@extends('layout.app.app')

@section('body')
<p>Show page</p>
<!-- Start Edit Form-->
{!! Form::open(['route' => ['app.show',$results->id], 'method' => 'post']) !!}

<div class="row">
	<div class="col-sm-3">
	{!! Form::text('title',$results->title,['placeholder'=>'', 'id'=>'', 'class'=>'form-control']) !!}
	</div>
	<div class="col-sm-3">
	{!! Form::text('body',$results->body,['placeholder'=>'', 'id'=>'', 'class'=>'form-control']) !!}
	</div> 
	<div class="col-sm-3">
	{!! Form::text('footer',$results->footer,['placeholder'=>'', 'id'=>'', 'class'=>'form-control']) !!}
	</div>
</div>
{!! Form::close() !!}
<!-- End Edit Form-->
@stop