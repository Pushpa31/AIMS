@extends('tempate')

@section('content')

   
<div class="container">
   @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
   @endif
  <a href="/teacher/add" role="button" class="btn btn-success" style="float: right;">Add teachers</a><br><br>  
  <table class="table table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($teachers as $teacher)
      <tr>
        <td>{{$teacher->name}}</td>
        <td>{{$teacher->address}}</td>
        <td>{{$teacher->contact}}</td>
        <td>{{$teacher->username}}</td>
        <td>{{$teacher->password}}</td>
        <td><a href="/teacher/{{$teacher->id}}/edit" role="button" class="btn btn-info">Edit</a>  <a href="/teacher/delete/{{$teacher->id}}" role="button" class="btn btn-danger">delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $teachers->links() }}
</div>

@endsection