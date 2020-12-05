@extends('dash.layout')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Teacher Table</title>
<style>
</style>
</head>

<body>
@section('content')
<br>
<div class="container">
  @if(Session::has('msg'))
  <script>swal("Added!", "{{Session::get('msg')}}", "success")</script>
  @endif
    <div class="jumbotron">
    <h4 style="text-align:center">Teacher Class Assign</h4>
    <form class="" action="assign_teacher" method="post">
      @csrf
    <div>
         <label>Room:</label>&nbsp;&nbsp;
                <select name="gender" value="" style="width:80px">
                  @foreach($room as $r)
                    <option value="{{$r->id}}">{{$r->room_no}}</option>
                    @endforeach
                </select>
                </div>
                <br>
                <div style="overflow-x:auto;">
  <table  class="table">
    <tr>
    <th scope="col">Serial No.</th>
      <th scope="col">Roll No.</th>
      <th scope="col">Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Select</th>

    </tr>
    @foreach($teacher as $item1)
    <tr>
    <td>{{$item1->id}}</td>
    <td>{{$item1->id_no}}</td>
    <td>{{$item1->name}}</td>
    <td>{{$item1->email_id}}</td>
    <td><input type="checkbox" name="list[]" value="{{$item1->id}}"></td>
    </tr>
    @endforeach
  </table>   <br>
<div style="text-align:right"><button type="submit" class="btn btn-primary" id="regbtn">Save</button></div>
    </div>
    </form>
</div>



@endsection
</body>
</html>
