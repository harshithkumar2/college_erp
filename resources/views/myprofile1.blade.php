@extends('dash.layout2')
<html>
<head>
<title>My Profile</title>
<style>
.card-title{
    font-family:'Roboto' sans-serif;
    font-size:32px;
    text-transform:uppercase;
    letter-spacing:1.5px;
    user-select:none;
}
.card-text{
    font-family:'Roboto' sans-serif;
    font-size:22px;
    user-select:none;
}
#button{
    background-color:#2874A6;
    color:white;
    font-weight:600;
}
#button:hover{
    background-color:#3498DB;
  
}
.card{
    box-shadow: 3px 6px 10px 3px rgba(0,0,0,0.2);
    width: 25rem;height:30rem;border-radius:8px;
}
.card-img-top{
  height:198px;width:398px;border-radius:4px
}
.a1,.b{
  background-color: white;
  color:black;
}
tr{
  border-bottom: 0.5px solid lightgrey;
}
</style>
</head>
<body>
@section('content1')
<br><br>
<div class="container">
  <div class="row justify-content-center">
    @if(Session::has('pic'))
        <div class="card">
        <img src="uploads/{{Session::get('pic')}}" class="card-img-top" alt="My Profile">
         <div class="card-body">
                  <div style="text-align:center;">
                    <h5 class="card-title">{{Session::get('name')}}</h5>
                     <p class="card-text">TEACHER</p> <hr>
                     <p class="card-text" style=" font-size:20px;"><i class="fa fa-envelope" aria-hidden="true" style="color:#34495E;margin-bottom:10px"></i>&nbsp;&nbsp;{{Session::get('email')}}</p>
                     <a href="/changeteachpic/{{Cookie::get('id')}}">
                     <button type="button" class="btn btn-secondarys" id="button">Change Photo</button></a>
               @endif
                  </div>
            </div>
        </div>
    </div><br><br>
  <div class="row justify-content-center">
        <div class="card">
                <div class="card-body">
                    <div style="text-align:center;">
                    <table class="table table-borderless" style="border-collapse:collapse;">
        <thead>
        </thead>
  <tbody>
  @if(Session::has('name'))
    <tr>
      <th class="a1">Name:</th>
      <td class="b">{{Session::get('name')}}</td>
    </tr>     
    <tr>
    <th class="a1">D.O.B:</th>
      <td class="b">{{Session::get('dob')}}</td>
    </tr>
    <tr>
    <th class="a1">ID No.</th>
      <td class="b">{{Session::get('id1')}}</td>
    </tr> 
    <tr>
    <th class="a1">Phone:</th>
      <td class="b">{{Session::get('phone')}}</td>
    </tr> 
    <tr>
    <th class="a1">Gender:</th>
      <td class="b">{{Session::get('gender')}}</td>
    </tr> 
    <tr style="border-bottom:none">
    <th class="a1">Address:</th>
      <td class="b">{{Session::get('address')}}</td>
   
    </tr> 
    @endif
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div><br><br>
@endsection
</body>
</html>


    