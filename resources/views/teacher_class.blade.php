@extends('dash.layoutid1')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> My Class</title>
<style>
#rebtn{
  background-color:#17A589;
  color: whitesmoke;
  font-weight: 600;

}
#rebtn:hover{
  background-color: #1ABC9C;
}
</style>
</head>

<body>
@section('contentid1')
<br>
<div class="container">
  <form class="" action="teach_search" method="post">
    @csrf
    <div style="text-align:right">
        <label>Room:</label>&nbsp;&nbsp;
            <select name="gender" value="" style="width:80px">
              @foreach($room as $r)
                <option value="{{$r->id}}">{{$r->room_no}}</option>
                @endforeach
             </select>&nbsp;&nbsp;
             <button type="submit" id="se" class="btn btn-primary" style="margin-top:-5px;font-size:13px"><i class="fa fa-search"></i></button>
    </div>
  </form>
                <br>

@isset($stud)
<div class="jumbotron">
    <h4 style="text-align:center">Student Details</h4>
  <br>
                <div style="overflow-x:auto;">
  <table  class="table">
    <tr>
    <th scope="col">#</th>
      <th scope="col">Roll No.</th>
      <th scope="col">Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Marks</th>
      <th scope="col">Attendence</th>

    </tr>
    <?php
    $i = 1; ?>
    @foreach($stud as $s)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$s->roll_no}}</td>
    <td>{{$s->name}}</td>
    <td>{{$s->email}}</td>
    <td><a href="/stud_marks/edit/{{$s->id}}"><button type="submit" class="btn btn-primarys" id="rebtn">Update </button></a></td>
    <td><a href="/stud_attend/edit/{{$s->id}}"> <button type="submit" class="btn btn-primarys" id="rebtn">Update </button></a></td>
    </tr>
    @endforeach
  </table>   <br>

    </div>
</div>
@endisset
@isset($sub)
<div class="jumbotron">
    <h4 style="text-align:center">Subject Details</h4>
    <div style="overflow-x:auto;">
  <table  class="table">
    <tr>
    <th scope="col">#</th>
      <th scope="col">Subjects</th>
      <th scope="col">Sub. Code</th>
     </tr>
     <?php
     $j = 1; ?>
     @foreach($sub as $s)
    <tr>
    <td>{{$j++}}</td>
    <td>{{$s->subjects}}</td>
    <td>{{$s->code}}</td>
    </tr>
    @endforeach
  </table>   <br>
</div>
</div>
@endisset


 </div>


@endsection
</body>
</html>
