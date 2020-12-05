@extends('dash.layout')
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

</style>
</head>

<body style="background-color:#F2F3F4 ">
@section('content')
<br><br>



<div class="container">
    <div class="row justify-content-center">
        @if(Session::has('pic'))
            <div class="card">
                <img src="uploads/{{Session::get('pic')}}" class="card-img-top" alt="My Profile">
                    <div class="card-body">
                        <div style="text-align:center;">
                            <h5 class="card-title">{{Session::get('name')}}</h5>
                            <p class="card-text">Admin</p> <hr>
                            <p class="card-text" style=" font-size:20px;"><i class="fa fa-envelope" aria-hidden="true" style="color:#34495E;margin-bottom:10px"></i>&nbsp;&nbsp;{{Session::get('email')}}</p>
                            <a href="/changepic/{{Cookie::get('ida')}}">
                            <button type="button" class="btn btn-secondarys" id="button">Change Photo</button></a>
                       @endif
                        </div>
                     </div>
                </div>
            </div>
        </div>
@endsection
</body>
</html>


    