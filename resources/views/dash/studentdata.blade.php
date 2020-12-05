@extends('dash.layout')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Tabel</title>
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
  <table class="table">
  <tr > <th colspan="16" class="head"> Student List</th></tr>

</tr>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Roll No.</th>
      <th scope="col">Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">D.O.B</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Parent Name</th>

      <th scope="col">Address</th>
      <th scope="col">District</th>

      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
    @foreach($data1 as $item)
    <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->roll_no}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>

    <td>{{$item->DOB}}</td>
    <td>{{$item->gender}}</td>
    <td>{{$item->phone}}</td>
    <td>{{$item->blood_group}}</td>
    <td>{{$item->parent_name}}</td>

    <td>{{$item->address}}</td>
    <td>{{$item->district}}</td>

    <td style="text-align:center"><a href="/student/edit/{{$item->id}}"> <button class="btn btn-success" type="submit"><i class="fa fa-edit"></i></button></td></a>
    <td style="text-align:center"><a href="/student/delete/{{$item->id}}"><button type="button" class="btn btn-danger "><i class="fa fa-trash-alt"></i></button></td></a>
    </tr>
    @endforeach
  </table>
</div>

@endsection
</body>
</html>
