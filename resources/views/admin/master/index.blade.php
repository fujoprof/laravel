@extends('layout.app.app')

@section('body')
<!-- Start View data-->
<!-- Start View data-->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Footer</th>
      <th scope="col">User-Id</th>
      <th scope="col">Update</th>
      <th scope="col">Show</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($results as $result)
    <tr>
      <th scope="row">1</th>
      <td>{{$result->title}}</td>
      <td>{{$result->body}}</td>
      <td>{{$result->footer}}</td>
      <td>{{$result->user_id}}</td>
      <td><a href="{{route('app.edit',$result->id)}}" class="btn btn-primary">Update</a></td>
      <td><a href="{{route('app.show',$result->id)}}" class="btn btn-info">Show</a></td>
      <td><a href="{{route('app.edit',$result->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
	@endforeach
  </tbody>
</table>
<!-- End View data-->
  <button type="button" class="btn btn-primary" id="toastbtn">Show Toast</button>
  
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-body">
    Hello, world! This is a toast message.
    <div class="mt-2 pt-2 border-top">
      <button type="button" class="btn btn-primary btn-sm">Take action</button>
      <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
    </div>
  </div>
</div>

<script>
document.getElementById("toastbtn").onclick = function() {
  var toastElList = [].slice.call(document.querySelectorAll('.toast'))
  var toastList = toastElList.map(function(toastEl) {
    return new bootstrap.Toast(toastEl)
  })
  toastList.forEach(toast => toast.show()) 
}
</script>


@stop