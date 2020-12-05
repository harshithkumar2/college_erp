@extends('dash.layout3')
<!DOCTYPE html>
<html lang="en">
<head>

<title>Student Attendance Table</title>


</head>

<body>

  @section('content3')
  <br>
</div>

<div style="overflow-x:auto;">
  <table>
    <tr>
    <th scope="col">ID No.</th>
      <th scope="col">Name</th>
      <th scope="col">Attendance 1</th>
      <th scope="col">Attendance 2</th>
      <th scope="col">Attendance 3</th>
      <th scope="col">Attendance 4</th>
      <th scope="col">Attendance 5</th>
      <th scope="col">Attendance 6</th>
    </tr>
   
    <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->attend1}}</td>
    <td>{{$data->attend2}}</td>
    <td>{{$data->attend3}}</td>
    <td>{{$data->attend4}}</td>
    <td>{{$data->attend5}}</td>
    <td>{{$data->attend6}}</td>
    </tr>
 
  </table>
</div>
@endsection
</body>
</html>
