@extends('dash.layout')
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<title>Classes</title>
<style>
#rebtn{
  background-color:#17A589;
  width:100px;
  color: whitesmoke;
  font-weight: 600;

}
#rebtn:hover{
  background-color: #1ABC9C;
}

</style>
</head>

<body>
@section('content')
<br>
<div class="container">

  <form class="" action="search" method="post">
    @csrf
  <div style="text-align:right" class="">
      <label>Room:</label>&nbsp;&nbsp;
          <select class=""name="gender" value="search" style="width:80px">
            @foreach($room as $r)
              <option value="{{$r->id}}">{{$r->room_no}}</option>
              @endforeach
           </select>&nbsp;&nbsp;
           <button type="submit" id="se" class="btn btn-primary" style="margin-top:-5px;font-size:13px"><i class="fa fa-search"></i></button>
  </div>
  </form>
<br>
  @isset($teach)
<div class="jumbotron">
    <h4 style="text-align:center">Teacher Details</h4>

                <br>
    <div style="overflow-x:auto;">
  <table  class="table">
    <tr>
    <th scope="col">#</th>
      <th scope="col">Roll No.</th>
      <th scope="col">Name</th>
      <th scope="col">E-Mail</th>
     </tr>
     <?php $i = 1; ?>
     @foreach($teach as $t)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$t->id_no}}</td>
    <td>{{$t->name}}</td>
    <td>{{$t->email_id}}</td>
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
@isset($stud)
    <div class="jumbotron">
    <h4 style="text-align:center">Student Details</h4>

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
    <?php $k = 1; ?>
    @foreach($stud as $st)
    <tr>
    <td>{{$k++}}</td>
    <td>{{$st->roll_no}}</td>
    <td>{{$st->name}}</td>
    <td>{{$st->email}}</td>
    <td style="text-align:center"><a href="myclass_edit_marks/{{$st->id}}"><button type="submit" class="btn btn-primarys" id="rebtn">Edit </button></a></td>
    <td style="text-align:center"><a href="myclass_edit_attend/{{$st->id}}"><button type="submit" class="btn btn-primarys" id="rebtn">Edit </button></a></td>
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
