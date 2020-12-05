@extends('dash.layout3')
<!DOCTYPE html>
<html>
<head><title>Student Dashboard</title>
<style>
.a1,.b{
  background-color: white;
  color:black;
}

tr{
  border-bottom: 0.5px solid lightgrey;
}
#card{
  box-shadow: 3px 6px 10px 4px rgba(0,0,0,0.2);
  border:solid 1px #3498DB;
}
#header{
  background-color:#3498DB;
  color:white;
  font-size:19px;
  font-weight:500;
}
@media (min-width:600px) and (max-width:800px) {
    .card{
    font-size:13px;

    }}
  </style>
</head>
<body>
@section('content3')
<br><br>
<div class="row">
  <div class="col-sm-4">
    <div class="card" id="card">
      <div class="card-header" id="header">Personal Information</div>
      <div class="card-body">
      <div style="text-align:left;">
      <table class="table table-borderless" style="border-collapse:collapse;">
       <tbody>
    <tr>
      <th class="a1">Name:</th>
      <td class="b">{{$data->name}}</td>
    </tr>     
    <tr>
    <th class="a1">D.O.B:</th>
      <td class="b">{{$data->DOB}}</td>
    </tr>
    <tr>
    <th class="a1">Gender:</th>
      <td class="b">{{$data->gender}}</td>
    </tr> 
    <tr>
    <th class="a1">Blood Group:</th>
      <td class="b">{{$data->blood_group}}</td>
    </tr> 
    <tr style="border-bottom:none">
    <th class="a1">Parent name:</th>
      <td class="b">{{$data->parent_name}}</td>
    </tr> 
  </tbody>
</table>
</div></div>
</div></div>


  <div class="col-sm-5" style="margin-top:1px">
    <div class="card" id="card">
    <div class="card-header" id="header">Contact Details</div>
      <div class="card-body">
      <div style="text-align:left;">
      <table class="table table-borderless" style="border-collapse:collapse;">
  <tbody>
    <tr>
      <th class="a1">Email:</th>
      <td class="b">{{$data->email}}</td>
    </tr>     
    <tr>
    <th class="a1">Phone:</th>
      <td class="b">{{$data->phone}}</td>
    </tr>
    <tr>
    <th class="a1">Address:</th>
      <td class="b">{{$data->address}}</td>
    </tr> 
    <tr style="border-bottom:none">
    <th class="a1">District:</th>
      <td class="b">{{$data->district}}</td>
    </tr> 
    </tbody>
</table>
</div></div>
</div></div>


  <div class="col-sm-3" style="margin-top:1px">
    <div class="card" id="card">
    <div class="card-header" id="header">Academic Details</div>
      <div class="card-body">
      <div style="text-align:left;">
      <table class="table table-borderless" style="border-collapse:collapse;">
  <tbody>
    <tr>
      <th class="a1">Roll No.:</th>
      <td class="b">{{$data->roll_no}}</td>
    </tr>     
    <tr>
    <th class="a1">Room No.:</th>
      <td class="b">{{$data->room_no}}</td>
    </tr>
    <tr style="border-bottom:none">
    <th class="a1">Subject:</th>
      <td class="b">{{$data->Subject}}</td>
    </tr> 
    </tbody>
</table>
</div></div>
</div></div>
</div>
@endsection


</body>
</html>
