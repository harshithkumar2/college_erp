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
<link rel="stylesheet" href="css/style.css">

</head>

<body>



<div id="mySidenav" class="sidenav">
  <header>Admin</header>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><button class="btn btn-infos" id="close"><i class="fa fa-times"></i></button></a></a>

  <ul class="list-unstyled components mb-5">
  <li class="active">
      <a href="/dash" class="a" style="background-color:#21618C"><span class="fa fa-qrcode"></span>Dashboard</a>
    </li>
    <li class="active">
      <a href="/" class="a"><span class="fa fa-home"></span>Home</a>
    </li>
    <li>
      <a href="/myprof/{{Cookie::get('ida')}}" class="a"><span class="fa fa-user"></span>My Profile</a>
    </li>
    <li>
      <a href="approve" class="a"><span class="fas fa-exclamation-circle"></span>Approval</a>
    </li>
    <li>
            <a href="/class" class="a"><span class="fas fa-school"></span>Class</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/adclass" id="ab"><span class="fas fa-school"></span>&nbsp;&nbsp;Class&nbsp;&nbsp;</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/adsubject" id="ab"><span class="fa fa-book"></span>&nbsp;&nbsp;Subject&nbsp;&nbsp;</a>
          </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
        <i class="fa fa-graduation-cap" aria-hidden="true"></i> Student
      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/stureg" id="ab"><span class="fa fa-user-plus"></span>&nbsp;&nbsp;Student  Form&nbsp;&nbsp;</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/studdata" id="ab"><span class="fa fa-table"></span>&nbsp;&nbsp;Student Table&nbsp;&nbsp;</a>
          <!--  <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/performance" id="ab"><span class="fa fa-bar-chart"></span>&nbsp;&nbsp;Performance&nbsp;&nbsp;</a>-->
        </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
        <i class="fas fa-chalkboard-teacher" aria-hidden="true"></i> Teacher
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/teachreg" id="ab"><span class="fa fa-user-plus"></span>&nbsp;&nbsp;Teacher  Form&nbsp;&nbsp;</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/teachdata" id="ab"><span class="fa fa-table"></span>&nbsp;&nbsp;Teacher  Table&nbsp;&nbsp;</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
      <i class="fa fa-tasks" aria-hidden="true"></i>&nbsp;Assign
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/assignstud" id="ab"><span class="fa fa-graduation-cap"></span>&nbsp;&nbsp;Student&nbsp;&nbsp;</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/assignteach" id="ab"><span class="fas fa-chalkboard-teacher"></span>&nbsp;&nbsp;Teacher&nbsp;&nbsp;</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/assignsubj" id="ab"><span class="fa fa-book"></span>&nbsp;&nbsp;Subjects&nbsp;&nbsp;</a>
      </div>
    </li>
       <li>
            <a href="/change_pass/admin/{{Cookie::get('ida')}}" class="a"><span class="fa fa-lock"></span>Change Password</a>
          </li>

          <li>
            <a href="admin/logout" class="a"><span class="fas fa-sign-out-alt"></span>Logout</a>
          </li>

          <li>
        <a href="#" class="a" style="font-size:13px">  &copy; Copyright-<script>document.write(new Date().getFullYear())</script>, School.</a>
        </li>
    </ul>
</div>


<nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background-color:#22242A;height:60px;">
  <a class="navbar-brand" href="#"><h3 id="text1">Admin <span>Dashboard</span></h3></a>

  <button type="button" id="sidebarCollapse" class="btn btn-darks" onclick="openNav()">
    <i class="fa fa-bars" aria-hidden="true"></i>

    </button>
</nav>
<div>
@yield('content')
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
