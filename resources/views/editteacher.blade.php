@extends('tempate')

@section('content')

   <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
   <form method="post" action="/teacher/{{$teacher->id}}">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" placeholder="Enter name" name="name" value="{{$teacher->name}}">
  </div>
  <div class="form-group">
    <label for="contact">Contact:</label>
    <input type="contact" class="form-control" placeholder="Enter Contact" name="contact" value="{{$teacher->contact}}">
  </div>
<div class="form-group">
    <label for="address">Address:</label>
    <input type="address" class="form-control" placeholder="Enter address" name="address" value="{{$teacher->address}}">
  </div>
  <div class="form-group">
    <label for="pwd">Username:</label>
    <input type="username" class="form-control" placeholder="username" name="username" value="{{$teacher->username}}">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="text" class="form-control" placeholder="Enter password" name="pwd" value="{{$teacher->password}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

<div class="col-md-3">


</div>
</div>
@endsection