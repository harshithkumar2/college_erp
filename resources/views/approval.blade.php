@extends('dash.layout')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Teacher Approval</title>
<style>

</style>
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
<script>swal("Approved!", "You Have Approved This Teacher", "success")</script>
@endif
@if(Session::has('msg1'))
<!--<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>{{Session::get('msg1')}}!</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>-->
<script>swal("Rejected!", "You Have Rejected This Teacher", "error")</script>
@endif



<div style="overflow-x:auto;">
  <table class="table">
  <thead>
    <tr > <th colspan="13" class="head" >Approval List</th></tr>

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
        <th scope="col">Approve</th>
        <th scope="col">Reject</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1; ?>
  @foreach($approve as $item1)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$item1->id_no}}</td>
    <td>{{$item1->name}}</td>
    <td>{{$item1->email_id}}</td>

    <td>{{$item1->dob}}</td>
    <td>{{$item1->phone}}</td>
    <td>{{$item1->address}}</td>
    <td>{{$item1->qualification}}</td>
    <td>{{$item1->experience}}</td>
    <td>{{$item1->gender}}</td>
    <td style="text-align:center"><a href="/approved/{{$item1->id}}"><button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></td></a>
    <td style="text-align:center"><a href="/approve_reject/{{$item1->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></td></a>

    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection
</body>
</html>
