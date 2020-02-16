@extends('tempate')

@section('content')

  
   <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
   <form method="post" action="/parents/{{$parents->id}}">

  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" placeholder="Enter name" name="name" value="{{$parents->name}}" >
  </div>
  <div class="form-group">
    <label for="contact">Address:</label>
    <input type="contact" class="form-control" placeholder="Enter Contact" name="address" value="{{$parents->address}}">
  </div>
<div class="form-group">
    <label for="address">Contact</label>
    <input type="address" class="form-control" placeholder="Enter address" name="contact" value="{{$parents->contact}}">
  </div>
  <div class="form-group">
    <label for="student">Student:</label>
    <input type="student" class="form-control" placeholder="Enter students name" name="student" value="{{$parents->student}}">
  </div>
  <div class="form-group">
    <label for="name">Username:</label>
    <input type="username" class="form-control" placeholder="Enter username" name="username" value="{{$parents->username}}">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="text" class="form-control" placeholder="Enter password" name="pwd" value="{{$parents->password}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

<div class="col-md-3">


</div>
</div>
@endsection