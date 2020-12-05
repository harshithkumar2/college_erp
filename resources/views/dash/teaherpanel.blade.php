@extends('dash.layout2')
<!DOCTYPE html>
<html>
<head><title>Teacher Dashboard</title>
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
    color:white;
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
@section('content1')
<br><br>
<div class="container">

<div class="row">
<div class="col-sm-3">

<div class="flip-card" style="margin-bottom:10px;margin-left:17px">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#EB984E">
        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size:60px" id="ia"></i>
        <div class="card-header" style="font-weight:550;color:white">TOTAL STUDENT</div>
    </div>
        <div class="flip-card-back" style="background-color:#F5CBA7">
            <p class="font"> </p>
        </div>
  </div>
</div>

</div>
<br>
<div class="col-sm-3">

<div class="flip-card" style="margin-bottom:10px;margin-left:17px">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#3498DB">
    <i class='fas fa-school' aria-hidden="true" style="font-size:60px"  id="ia"></i>
    <div class="card-header" style="font-weight:550;color:white">MY CLASS</div>
    </div>
    <div class="flip-card-back" style="background-color:#AED6F1">
      <p class="font" >{{$count}}</p>
    </div>
  </div>
</div>
</div>





<div class="col-sm-3">
<div class="flip-card"  style="margin-bottom:10px;margin-left:17px">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#28B463">
    <i class="fas fa-table" aria-hidden="true" style="font-size:60px"  id="ia"></i>
    <div class="card-header" style="font-weight:550;color:white">ATTENDENCE</div>
    </div>
    <div class="flip-card-back" style="background-color:#ABEBC6">
    <p class="font"></p>
    </div>
  </div>
</div>
</div>
<div class="col-sm-2">
<div class="flip-card" style="margin-bottom:10px;margin-left:17px">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#A569BD">
    <i class='fas fa-pie-chart' aria-hidden="true" style="font-size:60px"  id="ia"></i>
    <div class="card-header" style="font-weight:550;color:white">PRESENT COUNT</div>
    </div>
    <div class="flip-card-back" style="background-color:#D2B4DE">
    <p class="font"></p>
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
