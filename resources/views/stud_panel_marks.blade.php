@extends('dash.layout3')
<!DOCTYPE html>
<html lang="en">
<head>

<title>Student Performance Table</title>
<style>
.c{
  background-color:white;
  color:black;
}
</style>
</head>

<body>
@section('content3')
<div style="overflow-x:auto;">

  <table class="table">
  <tr >
    <th colspan="9" class="head">My Performance</th></tr>
</tr>
<tr>
    <th scope="col">#</th>
      <th scope="col">Subjects</th>
      <th scope="col">Marks</th>
      <th scope="col">Attendence</th>

    </tr>

<tr>
  <td>1.</td>
  <td>Sub 1</td>
  <td>{{$data->mark1}}</td>
  <td>{{$data->attend1}}</td>
</tr>
<tr>
  <td>2.</td>
  <td>Sub 2</td>
  <td>{{$data->mark2}}</td>
  <td>{{$data->attend2}}</td>
</tr>
<tr>
  <td>3.</td>
  <td>Sub 3</td>
  <td>{{$data->mark3}}</td>
  <td>{{$data->attend3}}</td>
</tr>
<tr>
  <td>4.</td>
  <td>Sub 4</td>
  <td>{{$data->mark4}}</td>
  <td>{{$data->attend4}}</td>
</tr>
<tr>
  <td>5.</td>
  <td>Sub 5</td>
  <td>{{$data->mark5}}</td>
  <td>{{$data->attend5}}</td>
</tr>
<tr>
  <td>6.</td>
  <td>Sub 6</td>
  <td>{{$data->mark6}}</td>
  <td>{{$data->attend6}}</td>
</tr>
  </table>
</div>
@endsection
</body>
</html>
