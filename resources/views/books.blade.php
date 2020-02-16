@extends('tempate')
@section('content')
   
<div class="container">
  <a href="/books" role="button" class="btn btn-success" style="float: right;">Add books</a><br><br>   <table class="table table-dark">
    <thead>
      <tr>
        <th>Name</th>
        <th>Author</th>
        <th>Publication</th>
        <th>Price</th>
        <th>Rack Number</th>
        <th>Actions</th>
      </tr>
    </tbody>
  </table>
</div>

@endsection