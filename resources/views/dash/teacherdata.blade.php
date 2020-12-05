@extends('dash.layout')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Teacher Table</title>
</head>

<body>
@section('content')



@if(Session::has('msg'))
<!--<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{Session::get('msg')}}!</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>-->
<script>swal("Edited!", "You Have Edited Successfully", "success")</script>
@endif
@if(Session::has('msg1'))
<!--<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>{{Session::get('msg1')}}!</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>-->
<script>swal("Deleted!", "You Have Deleted Successfully", "error")</script>
@endif

<div style="overflow-x:auto;">
  <table  class="table">
  <tr > <th colspan="13" class="head">Teacher List</th></tr>

 <tr>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Roll No.</th>
      <th scope="col">Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">D.O.B</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Qualification</th>
      <th scope="col">Experience</th>
      <th scope="col">Gender</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
    @foreach($data2 as $item1)
    <tr>
    <td>{{$item1->id}}</td>
    <td>{{$item1->id_no}}</td>
    <td>{{$item1->name}}</td>
    <td>{{$item1->email_id}}</td>
    
    <td>{{$item1->dob}}</td>
    <td>{{$item1->phone}}</td>
    <td>{{$item1->address}}</td>
    <td>{{$item1->qualification}}</td>
    <td>{{$item1->experience}}</td>
    <td>{{$item1->gender}}</td>
    <td style="text-align:center"><a href="/teacher/edit/{{$item1->id}}"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></td></a>
    <td style="text-align:center"><a href="/teacher/delete/{{$item1->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button></td></a>
    </tr>
    @endforeach
  </table>
</div>
@endsection
</body>
</html>
