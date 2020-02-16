@extends('tempate')

@section('content')

   <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
   <form method="post" action="/teacher">
  @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" placeholder="Enter name" name="name" required>
  </div>
  <div class="form-group">
    <label for="contact">Contact:</label>
    <input type="contact" class="form-control" placeholder="Enter Contact" name="contact" required>
  </div>
<div class="form-group">
    <label for="address">Address:</label>
    <input type="address" class="form-control" placeholder="Enter address" name="address" required>
  </div>
  <div class="form-group">
    <label for="pwd">Username:</label>
    <input type="username" class="form-control" placeholder="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="pwd" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="col-md-3">


</div>
</div>
@endsection