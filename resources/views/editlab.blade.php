@extends('tempate')
@section('content')

  <div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
   <form method="post" action="/lab/{{$lab->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" class="form-control" placeholder="Enter subject" name="subject" value="{{$lab->subject}}" required>
  </div>
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{$lab->title}}">
  </div>
  <div class="form-group">
    <label for="class">Class</label>
    <input type="text" class="form-control" placeholder="Enter class" name="class" value="{{$lab->class}}">
  </div>
  <div class="form-group">
    <label for="number">Number:</label>
    <input type="text" class="form-control" placeholder="Enter number" name="number" value="{{$lab->number}}">
  </div>
  <div class="form-group">
    <label for="teacher">Teacher:</label>
    <input type="text" class="form-control" placeholder="Enter teacher name" name="teacher" value="{{$lab->teacher}}">
  </div>
  <div class="form-group">
    <label for="filebrowser">File browser:</label>
    <input type="file" class="form-control" placeholder="filebrowser" name="file" value="{{$lab->file}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-md-3">
</div>
</div>
@endsection