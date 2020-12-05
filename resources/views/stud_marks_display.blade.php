@extends('dash.layout2')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Marks</title>
<style>
 .heads{
  background-color:#884EA0;
  border-bottom: 2px solid whitesmoke;
  border-left:2px solid #884EA0;
  text-align:center;
 }
</style>
</head>
<body>
  @section('content1')
@if(Session::has('msg'))
<!--<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{Session::get('msg')}}!</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>-->
<script>swal("Edited!", "You Have Edited Successfully", "success")</script>
@endif

<div style="overflow-x:auto;">
  <table class="table">
    <form class="" action="tea_marks" method="post">
      @csrf
  <tr>

    <th colspan="9" class="heads">
      <label>Room:</label>&nbsp;&nbsp;
        <select name="gender" value="" style="width:80px">
          @foreach($room as $r)
            <option value="{{$r->id}}">{{$r->room_no}}</option>
            @endforeach
        </select>&nbsp;
        <button type="submit" id="se" class="btn btn-warning" style="margin-top:-5px;font-size:11px"><i class="fa fa-search"></i></button></th>
    </tr>
  </form>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Roll No</th>
    <th scope="col">Name</th>
    <th scope="col">Marks 1</th>
    <th scope="col">Marks 2</th>
    <th scope="col">Marks 3</th>
    <th scope="col">Marks 4</th>
    <th scope="col">Marks 5</th>
    <th scope="col">Marks 6</th>

    </tr>
    @isset($data)
    <?php
    $i = 1; ?>
    @foreach($data as $item1)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$item1->roll_no}}</td>
    <td>{{$item1->name}}</td>
    <td>{{$item1->mark1}}</td>
    <td>{{$item1->mark2}}</td>
    <td>{{$item1->mark3}}</td>
    <td>{{$item1->mark4}}</td>
    <td>{{$item1->mark5}}</td>
    <td>{{$item1->mark6}}</td>

    </tr>
    @endforeach
    @endisset
  </table>
</div>

@endsection
</body>
</html>
