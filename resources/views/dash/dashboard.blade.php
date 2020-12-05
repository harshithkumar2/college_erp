@extends('dash.layout')
<!DOCTYPE html>
<html>
<head><title>Admin Dashboard</title>
<style>
 .flip-card {
    background-color: transparent;
    width: 170px;
    height: 170px;
    perspective: 1000px;
  }

  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  .flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }

  .flip-card-front {
    background-color: #bbb;
    color: black;
  }

  .flip-card-back{

    color: black;
    transform: rotateY(180deg);
    }
  .font{
      font-size:80px;
      position:absolute;
      left: 50%;
      top:50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
   }
  #ia{
    font-size:160px;
    color:whitesmoke;
    position:absolute;
    left: 50%;
    top:60%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }

  /* Extra small devices (phones, 600px and down) */
  @media (min-width:300px) and (max-width:350px) {
    .flip-card-inner{
      width:250px;}}
  @media (min-width:350px) and (max-width:400px) {
    .flip-card-inner{
      width:300px;}}
  @media (min-width:400px) and (max-width:500px) {
    .flip-card-inner{
      width:355px;}}
  @media (min-width:500px) and (max-width:600px) {
    .flip-card-inner{
      width:470px;}}
  @media (min-width:600px) and (max-width:800px) {
    .flip-card-inner{
      width:150px;
    }}

</style>
</head>
<body>
@section('content')
<br><br>
<div class="container">

<div class="row">
<div class="col-sm-3">

<div class="flip-card" style="margin-bottom:10px;margin-left:17px">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#EB984E">
    <div class="card-header" style="font-weight:550;color:white">TOTAL STUDENT</div>
        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size:60px" id="ia"></i>
      </div>
      <div class="flip-card-back" style="background-color:#F5CBA7">
            <p class="font">{{$student}}</p>
        </div>

  </div>

</div>

</div>
<br>
<div class="col-sm-3">

<div class="flip-card" style="margin-bottom:10px;margin-left:17px">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#28B463">
        <i class='fas fa-chalkboard-teacher' style="font-size:60px"  id="ia"></i>
        <div class="card-header" style="font-weight:550;color:white">TOTAL TEACHER</div>
    </div>
    <div class="flip-card-back" style="background-color:#ABEBC6">
      <p class="font">{{$teacher}}</p>
    </div>
  </div>
</div>
</div>





<div class="col-sm-3">
<div class="flip-card"  style="margin-bottom:10px;margin-left:17px">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#E74C3C">
    <i class="fas fa-exclamation-circle" aria-hidden="true" style="font-size:60px"  id="ia"></i>
    <div class="card-header" style="font-weight:550;color:white">APPROVAL</div>
    </div>
    <div class="flip-card-back" style="background-color:#F5B7B1">
    <p class="font">{{$count}}</p>
    </div>
  </div>
</div>
</div>
<div class="col-sm-2">
<div class="flip-card" style="margin-bottom:10px;margin-left:17px">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#A569BD">
    <i class='fas fa-school' aria-hidden="true" style="font-size:60px"  id="ia"></i>
    <div class="card-header" style="font-weight:550;color:white">TOTAL CLASS</div>
    </div>
    <div class="flip-card-back" style="background-color:#D2B4DE">
    <p class="font">{{$room}}</p> 
    </div>
  </div>
</div>
</div>
</div>
<div>
<br><br>







<div class="container" style="width:80%">
{!! $chart->container() !!}
</div>

<br><br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
{!! $chart->script() !!}
@endsection


</body>
</html>
