@extends('tempate')

@section('content')

   <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
   <form method="post" action="/lab" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" class="form-control" placeholder="Enter subject" name="subject"  required>
  </div>
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" placeholder="Enter title" name="title">
  </div>
<div class="form-group">
    <label for="class">Class</label>
    <input type="text" class="form-control" placeholder="Enter class" name="class">
  </div>
  <div class="form-group">
    <label for="number">Number:</label>
    <input type="text" class="form-control" placeholder="Enter number" name="number">
  </div>
  <div class="form-group">
    <label for="teacher">Teacher:</label>
    <input type="text" class="form-control" placeholder="Enter teacher name" name="teacher">
  </div>
  <div class="form-group">
    <label for="filebrowser">File browser:</label>
    <input type="file" class="form-control" placeholder="filebrowser" name="file">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="col-md-3">


</div>
</div>
@endsection