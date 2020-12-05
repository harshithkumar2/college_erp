<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School-ERP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      h1{
        font-weight: bold;
        color: #990000;
        text-shadow: 3px 2px 3px blue;

      }
      #toggler{
        color:white;
        background-color:black;
        width:50px;
        height:40px;
      }
      .card{
  border:solid 1px #EBF5FB;
  text-align: left;
  box-shadow: 5px 5px 10px ;


}

    </style>
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body style="background-color:#D6EAF8">
                                   <!-- navbar part-->

    <header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#566573">
  <a class="navbar-brand" href="/home">School</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" id="toggler">
      <span class="fa fa-bars"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">

      <ul class="navbar-nav  ml-auto">
        <li class="nav-item active">
       <a class="nav-link" href="/home"><span class="fa fa-home"></span>&nbsp;Home <span class="sr-only">(current)</span></a>
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
        <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="fas fa-sign-in-alt"></span>&nbsp;Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/studlog"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp; Student Login</a>
          <div class="dropdown-menu"></div>
          <a class="dropdown-item" href="/tealog"><i class="fas fa-chalkboard-teacher" aria-hidden="true"></i>&nbsp;&nbsp;Teacher Login</a>
          <div class="dropdown-menu"></div>
          <a class="dropdown-item" href="/adminlog"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Admin Login</a>
        </div>
      </li>
      @endif
        <li class="nav-item active">
          <a class="nav-link " href="/teach_reg_public" tabindex="-1" aria-disabled="true"><i class="fa fa-address-card"></i>&nbsp;&nbsp;Apply</a>
        </li>
      </ul>
    </div>
  </nav>
  </header>
                                                  <!--end navbar-->

                                                   <!--carousal part-->

  <main role="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img class="d-block w-100" src="img/student.jpg" alt="First slide">
      <div class="container">
            <div class="carousel-caption text-center">
          <p> <a href="/studlog"><input type="button" class="btn btn-dangers" value="Student Login"
                style="width:220px;height:60px;color:white;font-weight:bold;font-size:18px;background-color:#3498DB;box-shadow:  0 0 12px 6px black;"></a>
         </p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/teacher1.jpg" alt="Second slide" style="margin:auto">
          <div class="carousel-caption text-center">
        <div class="container">
          <p><a href="/tealog"><input type="button" class="btn btn-dangers" value="Teacher Login"
              style="width:220px;height:60px;color:white;font-weight:bold;font-size:18px;background-color:#3498DB;box-shadow:  0 0 12px 6px black;"></a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="img/admin1.jpg" alt="Third slide">
              <div class="carousel-caption text-center">
        <div class="container">
          <p><a href="/adminlog"><input type="button" class="btn btn-dangers" value="Admin Login"
                style="width:220px;height:60px;color:white;font-weight:bold;font-size:18px;background-color:#3498DB;box-shadow:  0 0 12px 6px black;;"></a></p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

                                             <!--end carousal-->
<div class="dropdown-divider"></div>
<br>
<div class="row">
<div class="col-sm-3" style="margin-bottom:10px">

<div class="card" style="width: 22.5rem;">
  <img class="card-img-top" src="img/about.jpg" alt="Card image cap" >
  <div class="card-body">
  <h2>ABOUT</h2>
  <div class="dropdown-divider"></div>
    <p class="lead" style="font-size:25px;">An Web Enabled Solution for Educational Institutions Where Admission Proccess
    Takes Place.</p>
    </div>
  </div>
</div>


<div class="col-sm-3" style="margin-bottom:10px">


<div class="card" style="width:22.5rem;">
  <img class="card-img-top" src="img/service.jpg" alt="Card image cap">
  <div class="card-body">
  <h2>SERVICES</h2>
  <div class="dropdown-divider"></div>
    <p class="lead" style="font-size:25px;">Admission </p>
    <p class="lead" style="font-size:25px;">Attendence </p>
    <p class="lead" style="font-size:25px;"> Marks</p>

</div>
</div>
</div>
<br>
<div class="col-sm-3"style="margin-bottom:10px" >

<div class="card" style="width: 22.5rem;">
  <img class="card-img-top" src="img/contact.jpg" alt="Card image cap">
  <div class="card-body">
  <h2 >CONTACT US</h2>
  <div class="dropdown-divider"></div>
    <p class="lead" style="font-size:25px;">Instagram:example</p>
    <p class="lead" style="font-size:25px;">Email: eaxmple@gmail.com</p>
    <p class="lead" style="font-size:25px;">Twitter:example</p>
    </div>

</div>
</div>
<div class="col-sm-3" >

<div class="card" style="width: 22.5rem;">
  <img class="card-img-top" src="img/feature.jpg" alt="Card image cap">
  <div class="card-body">
  <h2 >FEATURES</h2>
  <div class="dropdown-divider"></div>
    <p class="lead" style="font-size:25px;">This Website Is Responsive In Any Platform And very Smooth And Simple To  Use. </p>

    </div>

</div>
</div>
</div>
<br>





  <!-- FOOTER -->
  <div class="dropdown-divider"></div>
  <br>
  <footer class="container">
    <p class="float-right"><a href="#" class="btn btn-dark">Back to top</a></p>
    <p class="text-center">&copy; 2020 ,  School ERP. &middot;</p>
  </footer>

</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</html>
