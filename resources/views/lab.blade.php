@extends('tempate')
@section('content')
  
<div class="container">
  <a href="/lab/add" role="button" class="btn btn-success" style="float: right;">Add questions</a><br><br>   <table class="table table-dark">
    <thead>
      <tr>
        <th>Subject</th>
        <th>Title</th>
        <th>Class</th>
        <th>Number</th>
        <th>Teacher</th>
        <th>Filebrowser</th>
        <th>Actions</th>
      </tr>
    </tbody>
     @foreach($lab as $la)
      <tr>
        <td>{{$la->subject}}</td>
        <td>{{$la->title}}</td>
        <td>{{$la->class}}</td>
        <td>{{$la->number}}</td>
        <td>{{$la->teacher}}</td>
        <td>{{$la->filebrowser}}</td>
        
        <td><a href="/lab/{{$la->id}}/edit" role="button" class="btn btn-info">Edit</a>  <a href="/lab/delete/{{$la->id}}" role="button" class="btn btn-danger">delete</a></td>
      </tr>
      @endforeach
      <tr>
    </tbody>
  </table>
  {{ $lab->links() }}
</div>
  

@endsection