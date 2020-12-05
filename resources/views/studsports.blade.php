@extends('dash.layout3')
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sports Details</title>
</head>
<body>
    @section('content3')
    <br><br>
    <div class="container" >
        <div class="jumbotron">

        <div class="card" style="width: 16rem;">
            <div class="card-body">
                <h5 class="card-title">Sports Form</h5>
                    <p class="card-text"> Enter The Intrested Sports Here!!!.</p>
                 </div>
            </div>
        <br>
    <form method="post" action="/studsports">
              @csrf

                <div class="row">
                  <div class="col-sm-12">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name " required>
                  </div>

                </div><br>
                <div class="row">
                  <div class="col-sm-12">
                    <label>USN:</label>
                    <input type="text" name="usn" class="form-control" placeholder="Enter Your Usn" required>
                  </div>

                </div><br>
                <div class="form-group">
                  <label>Sports:</label>
                            <select class="form-control" name="sport" value="" required>
                            <option>Cricket</option>
                            <option>Volleyball</option>
                            <option>Hockey</option>
                            <option>Basketball</option>
                            <option>Football</option>
                            <option>Badminton</option>
                            <option>Kabbadi</option>
                            <option>Throwball</option>
                            <option>Athletics</option>

                            </select>
                        </div>
                  <div class="row">
                  <div class="col-sm-12">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email Id" required>
                  </div>
                </div><br>
                
              
                        <div class="row">
                  <div class="col-sm-12">
                    <label>Phone:</label>
                    <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone No." required>
                  </div>
                </div><br>
                        <button type="submit" class="btn btn-primarys" id="regbtn">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
    @endsection
</body>
</html>
