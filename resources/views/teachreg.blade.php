@extends('dash.layout')
<html>
    <head>
        <title>Teacher Registration</title>
    </head>
    <body>

@section('content')
<br><br>
    <div class="container">
    
        <div class="jumbotron">

            <div class="card" style="width: 15.9rem;">
                    <div class="card-body">
                    <h5 class="card-title">TEACHER DETAILS FORM</h5>
                    <p class="card-text"> Enter The teacher Details Here!!!.</p>
                    </div>
            </div>

<br>
            <form method="POST" action="teacher_insert" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label>Teachers Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Teachers Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email-Id</label>
                    <input type="email" class="form-control" name="email_id" id="email_id" aria-describedby="emailHelp" placeholder="Enter Teachers Email" required>

                </div>
                <!--<div class="form-group">
                    <label>Room No</label>
                    <input type="text" class="form-control" name="room_no" id="room_no" placeholder="Enter Room No" required>
                </div>-->
                <div class="form-group">
                    <label>D.O.B</label>
                    <input type="date" class="form-control" name="dob" id="id_no" placeholder="Enter Date Of Birth" required>
                </div>
                <div class="form-group">
                    <label>Id_no</label>
                    <input type="text" class="form-control" name="id_no" id="id_no" placeholder="Enter Id_No" required>
                </div>
                <div class="form-group">
                    <label>Phone No.</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone No" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required>
                </div>
                <div class="form-group">
                    <label>Qualification</label>
                    <input type="text" class="form-control" name="quali" id="class_alloted" placeholder="Enter Qualification" required>
                </div>
                <div class="form-group">
                    <label>Experience</label>
                    <input type="text" class="form-control" name="exp" id="class_alloted" placeholder="Enter Experience" required>
                </div>

            <div class="form-group">
                  <label>Gender:</label>
                            <select class="form-control" name="gender" value="">
                            <option>Male</option>
                            <option>Female</option>
                            </select>
                        </div>


                <div class="form-group">
                    <label for="">Upload Photo</label>
                    
                        <input type="file" class="form-control" placeholder=""  name="image" style="height:44px" required>
                       
                    </div>
               
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Following Details Are Correct.</label>
                </div>
                <button type="submit" class="btn btn-primarys" id="regbtn">Submit</button>
            </form>
        </div>

    </div>
    @endsection
</body>
</html>
