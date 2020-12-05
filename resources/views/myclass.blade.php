@extends('dash.layout3')
<!DOCTYPE html>
<html lang="en">
<head>

<title>My class</title>


</head>

<body>

  @section('content3')
  <br>
  <div class="container">
<div class="jumbotron">
<h4 style="text-align:center">Teacher Details</h4>
<br>
<div style="overflow-x:auto;">
  <table class="table">
    <tr>
    <th scope="col">#</th>
      <th scope="col">Teacher Name</th>
      <th scope="col">E-mail ID</th>
      <th scope="col">Id No</th>
    </tr>
    <?php
$j = 1;
     ?>
    @foreach($class as $data)
    <tr>
    <td>{{$j++}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->email_id}}</td>
    <td>{{$data->id_no}}</td>
    </tr>
    @endforeach
  </table>
</div>
</div>

<div class="jumbotron">
<h4 style="text-align:center">Subject Details</h4>
<br>
<div style="overflow-x:auto;">
  <table class="table">
    <tr>
    <th scope="col">#</th>
      <th scope="col">Subject</th>
      <th scope="col">Sub Code</th>
    </tr>
    <?php
    $i = 1;
     ?>
    @foreach($sub as $s)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$s->subjects}}</td>
    <td>{{$s->code}}</td>
    </tr>
    @endforeach
  </table>
</div>
</div>
</div>
@endsection
</body>
</html>
