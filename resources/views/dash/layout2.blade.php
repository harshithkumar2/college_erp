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
<link rel="stylesheet" href="css/styl2.css">

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
@yield('content1')
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
