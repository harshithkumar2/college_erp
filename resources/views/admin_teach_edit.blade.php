@extends('dash.layoutid')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher update</title>
</head>
<body>
@section('contentid')
<br><br>
    <div class="container">
        <div class="jumbotron">

            <div class="card" style="width: 16rem;">
                    <div class="card-body">
                    <h5 class="card-title">TACHER UPDATE FORM</h5>
                    <p class="card-text"> Enter The teacher Details Here!!!.</p>
                    </div>
            </div>
<br>

            <form method="POST" action="/admin_teach_update/{{$edit->id}}">
              @csrf
                <div class="form-group">
                    <label>Teachers Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$edit->name}}"aria-describedby="emailHelp" placeholder="Enter Teachers Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Teachers I'd</label>
                    <input type="email" class="form-control" name="email_id" value="{{$edit->email_id}}"id="email_id" aria-describedby="emailHelp" placeholder="Enter Teachers Email">

                </div>
                <div class="form-group">
                    <label>D.O.B</label>
                    <input type="date" class="form-control" name="dob" id="id_no" placeholder="Enter Date Of Birth" value="{{$edit->dob}}" required>
                </div>
                <div class="form-group">
                    <label>Id No</label>
                    <input type="text" class="form-control" name="id_no" value="{{$edit->id_no}}"id="id_no" placeholder="Enter Id_No">
                </div>
                <div class="form-group">
                    <label>Room No</label>
                    <input type="text" class="form-control" name="room_no"value="{{$edit->room_no}}" id="roll_no" placeholder="Enter Room">
                </div>
                <div class="form-group">
                    <label>Phone No</label>
                    <input type="text" class="form-control" name="phone" value="{{$edit->phone}}"id="phone" placeholder="Enter Phone No">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address"value="{{$edit->address}}" id="address" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label>Qualification</label>
                    <input type="text" class="form-control" name="quali" id="class_alloted" placeholder="Enter Qualification" value="{{$edit->qualification}}" required>
                </div>
                <div class="form-group">
                    <label>Experience</label>
                    <input type="text" class="form-control" name="exp" id="class_alloted" placeholder="Enter Experience" value="{{$edit->experience}}" required>
                </div>

            <div class="form-group">
                  <label>Gender:</label>
                            <select class="form-control" name="gender" value="{{$edit->gender}}">
                            <option>Male</option>
                            <option>Female</option>
                            </select>
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
