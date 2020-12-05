<html>
<head>
<title>Home</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/homestyle.css" rel="stylesheet">
<style>
    body{
    background-image: url("image3.jpg");
   background-position: center; 
   background-repeat: no-repeat; 
   background-size: cover; 
 
 }
    </style>
</head>
<body>
<!-- navs-->
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact</a>
  </li>

  @if(Session::has('student'))
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;{{Session::get('student')}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/studdash"><span class="fa fa-shield"></span>&nbsp;&nbsp;Student Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/student/logout">  <span class="fas fa-sign-out-alt"></span>&nbsp;Logout</a>
        </li>
        @elseif(Session::has('teacher'))
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;{{Session::get('teacher')}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/teachdash"><span class="fa fa-shield"></span>&nbsp;&nbsp;Teacher Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/teacher/logout">  <span class="fas fa-sign-in-alt"></span>&nbsp;Logout</a>
        </li>
        @elseif(Session::has('admin'))
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;{{Session::get('admin')}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/dash"><span class="fa fa-shield"></span>&nbsp;&nbsp;Admin Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/logout">  <span class="fas fa-sign-in-alt"></span>&nbsp;Logout</a>
        </li>
        @else
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/adminlog"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Admin</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/tealog"><i class="fas fa-chalkboard-teacher" aria-hidden="true"></i>&nbsp;&nbsp;Teacher</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/studlog"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;Student</a>
    </div>
</li>
@endif
  <li class="nav-item">
    <a class="nav-link" href="/teach_reg_public">Apply</a>
  </li>
</ul>
<!--end navs-->
<div class="row justify-content-center" style="margin-top:580px">
<a href="/explore"><button type="submit" class="btn btn-info" style="background-color:#5499C7;font-weight: 500;">Explore More</button></a>
</div>
</body>
</html>