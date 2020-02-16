@extends('tempate')

@section('content')

   <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
   <form method="post" action="/parents">
  @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" placeholder="Enter name" name="name" required>
  </div>
  <div class="form-group">
    <label for="contact">Address:</label>
    <input type="contact" class="form-control" placeholder="Enter Contact" name="address">
  </div>
<div class="form-group">
    <label for="address">Contact</label>
    <input type="address" class="form-control" placeholder="Enter address" name="contact">
  </div>
  <div class="form-group">
    <label for="student">Student:</label>
    <input type="student" class="form-control" placeholder="Enter students name" name="student">
  </div>
  <div class="form-group">
    <label for="name">Username:</label>
    <input type="username" class="form-control" placeholder="Enter username" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="pwd">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="col-md-3">


</div>
</div>
@endsection