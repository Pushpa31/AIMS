@extends('tempate')
@section('content')
<div class="container">
  <a href="/parents/add" role="button" class="btn" style="float: right; margin-top: 10px; background-color: #DE627F; color: white"> <i class="fas fa-plus-circle"></i> Parents</a><br><br>   
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Student</th>
        <th>Username</th>
        <th>Password</th>
       
      </tr>
    </thead>
  <tbody>
 @foreach($parents as $parent)
      <tr>
        <td>{{$parent->name}}</td>
        <td>{{$parent->address}}</td>
        <td>{{$parent->contact}}</td>
        <td>{{$parent->student}}</td>
        <td>{{$parent->username}}</td>
        <td>{{$parent->password}}</td>
        <td><a href="/parents/{{$parent->id}}/edit"><i class="far fa-edit" style="font-size: 18px;"></i></a>  <a href="/parents/delete/{{$parent->id}}"> <i class="fas fa-trash-alt" style="color: red; font-size: 18px; padding-left: 10px;"></i></a></td>
      </tr>
      @endforeach
      <tr>
    </tbody>
  </table>
  {{ $parents->links() }}
</div>


@endsection