@extends('dash.layout')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Student Performance</title>
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
  <tr > <th colspan="17" class="head">Student Performance</th></tr>
 
 <tr>
    <tr>
    <th scope="col">Room No.</th>
       <th scope="col">Roll no</th>
       <th scope="col">Name</th>
    <th scope="col">Mark 1</th>
    <th scope="col">Mark 2</th>
    <th scope="col">Mark 3</th>
    <th scope="col">Mark 4</th>
    <th scope="col">Mark 5</th>
    <th scope="col">Mark 5</th>
    <th scope="col">Attend 1</th>
    <th scope="col">Attend 2</th>
    <th scope="col">Attend 3</th>
    <th scope="col">Attend 4</th>
    <th scope="col">Attend 5</th>
    <th scope="col">Attend 6</th>
    <th scope="col">Edit</th>
    <th scope="col">Delete</th>
    </tr>
    @foreach($perf as $item1)
    <tr>
    <td>{{$item1->room_no}}</td>
   
    <td>{{$item1->roll_no}}</td>
    <td>{{$item1->name}}</td>
    <td>{{$item1->mark1}}</td>
    <td>{{$item1->mark2}}</td>
    <td>{{$item1->mark3}}</td>
    <td>{{$item1->mark4}}</td>
    <td>{{$item1->mark5}}</td>
    <td>{{$item1->mark6}}</td>
    <td>{{$item1->attend1}}</td>
    <td>{{$item1->attend2}}</td>
    <td>{{$item1->attend3}}</td>
    <td>{{$item1->attend4}}</td>
    <td>{{$item1->attend5}}</td>
    <td>{{$item1->attend6}}</td>
    <td style="text-align:center"><a href="/adminperf/{{$item1->id}}"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></td></a>
    <td style="text-align:center"><a href="/delete/{{$item1->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button></td></a>
    </tr>
    @endforeach
  </table>
</div>
@endsection
</body>
</html>