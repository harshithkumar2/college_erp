@extends('dash.layoutid')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Update</title>
</head>
<body>
@section('contentid')
<br><br>
    <div class="container">
        <div class="jumbotron">

            <div class="card" style="width: 16rem;">
                    <div class="card-body">
                    <h5 class="card-title">STUDENT UPDATE FORM</h5>
                    <p class="card-text"> Enter The Student Details Here!!!.</p>
                    </div>
            </div>
<br>
            <form method="POST" action="/admin_stud_update/{{$edit->id}}">
              @csrf
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$edit->name}}" aria-describedby="emailHelp" placeholder="Enter Student Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email id</label>
                    <input type="email" class="form-control" name="email_id" value="{{$edit->email}}" id="email_id" aria-describedby="emailHelp" placeholder="Enter Student Email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label>Phone No</label>
                    <input type="text" class="form-control" name="phone" value="{{$edit->phone}}"id="phone" placeholder="Enter Phone No">
                </div>
                <div class="form-group">
                    <label>Roll No</label>
                    <input type="text" class="form-control" name="roll_no"value="{{$edit->roll_no}}" id="roll_no" placeholder="Enter USN">
                </div>
                <div class="form-group">
                    <label>Room No</label>
                    <input type="text" class="form-control" name="room_no"value="{{$edit->room_no}}" id="roll_no" placeholder="Enter Room">
                </div>

                <div class="form-group">
                    <label>Parent Name</label>
                    <input type="text" class="form-control" name="father_name"value="{{$edit->parent_name}}" id="father_name" placeholder="Enter Parent Name">
                </div>
                <div class="form-group">
                    <label>D.O.B</label>
                    <input type="text" class="form-control" name="DOB"value="{{$edit->DOB}}" id="DOB" placeholder="Enter DOB">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" class="form-control" name="gender"value="{{$edit->gender}}" id="gender" placeholder="Enter Gender">
                </div>
               
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address"value="{{$edit->address}}" id="address" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label>District</label>
                    <input type="text" class="form-control" name="district" value="{{$edit->district}}"id="district" placeholder="Enter District">
                </div>
               
                <div class="form-group">
                    <label>Blood Group</label>
                    <input type="text" class="form-control" name="blood_group"value="{{$edit->blood_group}}" id="blood_group" placeholder="Enter Blood_Group">
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
