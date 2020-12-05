@extends('dash.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Register</title>
</head>
<body>
    @section('content')
    <br><br>
    <div class="container">
        <div class="jumbotron">

            <div class="card" style="width: 16rem;">
                    <div class="card-body">
                    <h5 class="card-title">STUDENT DETAILS FORM</h5>
                    <p class="card-text"> Enter The Student Details Here!!!.</p>
                    </div>
            </div>
<br>

            <form method="POST" action="student_insert" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Student Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email id</label>
                    <input type="email" class="form-control" name="email_id" id="email_id" aria-describedby="emailHelp" placeholder="Enter Student Email" required>

                </div>
                <!--<div class="form-group">
                    <label>Room No</label>
                    <input type="text" class="form-control" name="room_no" id="room_no" placeholder="Enter Room No" required>
                </div>-->
                <div class="form-group">
                    <label>Phone_no</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone No" required>
                </div>
                <div class="form-group">
                    <label>Roll no.</label>
                    <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="Enter USN" required>
                </div>

                <div class="form-group">
                    <label>Parent Name</label>
                    <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Enter Parent Name" required>
                </div>
                <div class="form-group">
                    <label>D.O.B</label>
                    <input type="date" class="form-control" name="DOB" id="DOB" placeholder="Enter DOB" required>
                </div>
                <div class="form-group">
                  <label>Gender:</label>
                            <select class="form-control" name="gender" value="">
                            <option>Male</option>
                            <option>Female</option>
                            </select>
                        </div>
            
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required>
                </div>
                <div class="form-group">
                    <label>District</label>
                    <input type="text" class="form-control" name="district" id="district" placeholder="Enter District" required>
                </div>
               
                <div class="form-group">
                    <label>Blood Group</label>
                    <input type="text" class="form-control" name="blood_group" id="blood_group" placeholder="Enter Blood_Group" required>
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
