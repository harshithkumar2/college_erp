<!DOCTYPE html>
<html>
<head>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"  crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
  body{
  font-family: 'Roboto' sans-serif;
  background-color: #F2F3F4;
}
*{
  margin: 0;padding: 0;text-decoration: none;list-style: none;
}
#text1{
  color: #fff;
  margin: 0;
  text-transform: uppercase;
  font-size: 20.5px;
  font-weight: 750;
}
#text1 span{
  color: #19B3D3;
}
#sidebarCollapse{
  color:white;
  width:45px;
}
#sidebarCollapse:hover{
 background-color: #21618C;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#2f323a;
  overflow-x: hidden;
  transition: all .5s ease;
  box-shadow: 7px 2px 5px 0px rgba(0,0,0,0.75);

}
header{
  font-size: 25px;
  color:white;
  text-align:center;
  line-height:68px;background: #22242A;
  user-select: none;
  font-weight: 700;

}
.sidenav .closebtn {
  position: absolute;
  top:16px;
  right:10px;
 transition: all .5s ;
  background-color:#21618C;
  cursor: pointer;

}
#close{
color:white;
font-size: 15px;
transition: all .5s ;
}
#close:hover{
  background-color: red;
  transition: all .5s ;
}
.sidenav ul a {
  color:white;
  display: block;
  width:100%;
  line-height:63px;
  text-decoration: none;
  font-size: 20px;
  padding-left: 40px;
  box-sizing: border-box;
  border-top: 1px solid rgba(255,255,255,.1);
  border-bottom: 1px solid #1C2833 ;transition: .4s;
}
ul li:hover a{
  padding-left: 50px;
  text-decoration: none;

}
.sidenav ul a:hover{
  background-color: #2E86C1;
  transition: all .5s ;
}
.sidenav ul a i{
  margin-right: 7px;
   }
.sidenav ul a span{
margin-right: 12px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
ul li .a,#navbarDropdown{
  color:white;
  font-size:16px;
  font-family:Verdana, Geneva, Tahoma, sans-serif;

}
#ab{
  color:black;border-bottom: none;font-size:20px; width:260px;height:65px;
}
#ab:hover{
  color:black;
  background-color: white;

}
table{
  font-family:'Roboto' sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table tr:nth-child(even){background-color: #E5E8E8;}
table th {
  padding-top: 14px;
  padding-bottom: 14px;
  text-align:left;
  background-color:#A569BD;
  color: whitesmoke;
  letter-spacing:0.5px;
  user-select: none;
  border-right: 0.5px solid lightgrey;
 }
table td
{

border-right: 0.5px solid lightgrey;
height:70px;

}

table tr .head{
  text-align:center;
  font-size:22px;
  text-transform:uppercase;
  letter-spacing:1px;
  background-color:#884EA0;
  border-bottom: 2px solid whitesmoke;
  user-select: none;
  }
table td, table th {
 border-bottom: 0.5px solid lightgrey;
}
table tr:hover {background-color: #ddd;}
.jumbotron{
  box-shadow: 3px 6px 10px 6px rgba(0,0,0,0.2);

}
#regbtn{
  background-color:#2980B9;
  width:130px;
  color: whitesmoke;
  font-weight: 600;
}
#regbtn:hover{
  background-color: #3498DB;
}

  </style>
</head>

<body>



<div id="mySidenav" class="sidenav">
  <header>Teacher</header>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><button class="btn btn-infos" id="close"><i class="fa fa-times"></i></button></a></a>

  <ul class="list-unstyled components mb-5">
  <li class="active">
      <a href="/teachdash" class="a" style="background-color:#21618C"><span class="fa fa-qrcode"></span>Dashboard</a>
    </li>
    <li class="active">
      <a href="/" class="a"><span class="fa fa-home"></span>Home</a>
    </li>
    <li>
      <a href="/myprof1/{{Cookie::get('id')}}" class="a"><span class="fa fa-user"></span>My Profile</a>
    </li>
    <li>
      <a href="/myclass" class="a"><span class="fas fa-school"></span>My Class</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
      <i class="fa fa-table" aria-hidden="true"></i>Student table
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="/student_marks" id="ab"><span class="fa fa-address-card"></span>&nbsp;&nbsp;Marks&nbsp;&nbsp;</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/student_attend" id="ab"><span class="fa fa-bar-chart-o"></span>&nbsp;&nbsp;Attendence&nbsp;&nbsp;</a>
      </div>
    </li>
     <li>
        <a href="/change_pass/teacher/{{Cookie::get('id')}}" class="a"><span class="fa fa-lock"></span>Change Password</a>
      </li>
       <li>
            <a href="teacher/logout" class="a"><span class="fas fa-sign-out-alt"></span>Logout</a>
        </li>
        <li>
        <a href="#" class="a" style="font-size:13px">  &copy; Copyright-<script>document.write(new Date().getFullYear())</script>, School.</a>
        </li>
    </ul>
</div>


<nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background-color:#22242A;height:60px;">
  <a class="navbar-brand" href="#"><h3 id="text1">Teacher <span>Dashboard</span></h3></a>

  <button type="button" id="sidebarCollapse" class="btn btn-darks" onclick="openNav()">
    <i class="fa fa-bars" aria-hidden="true"></i>

    </button>
</nav>
<div>
@yield('contentid1')
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "260px";
  document.getElementById("main").style.marginLeft = "260px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

</body>
</html>
