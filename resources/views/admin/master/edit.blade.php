@extends('layout.app.app')

@section('body')
<p>Edit page</p>
<!-- Start Edit Form-->
{!! Form::open(['route' => ['app.update',$results->id], 'method' => 'put']) !!}

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
	<img src="{{ URL::to('/') }}/images/{{$results->title}}" width="50px" height="150px">
	<div class="col-sm-3">
	{!! Form::submit('Update-User',['id'=>'', 'class'=>'btn btn-info']) !!}
	</div>
</div>
{!! Form::close() !!}
<!-- End Edit Form-->


<p>Delete page</p>
<!-- Start Edit Form-->
{!! Form::open(['route' => ['app.destroy',$results->id], 'method' => 'DELETE']) !!}

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
	<div class="col-sm-3">
	{!! Form::submit('Delete-User',['id'=>'liveToastBtn', 'class'=>'btn btn-danger']) !!}
	</div>
</div>
{!! Form::close() !!}
<!-- End Edit Form-->


<!-- Start using Toast-->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
<!-- Ending using Toast-->
@stop