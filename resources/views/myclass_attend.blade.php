@extends('dash.layoutid')
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Student Attendance Edit</title>
</head>
<body>
@section('contentid')
<bnr><br>
    <div class="container">
        <div class="jumbotron">

            <div class="card" style="width: 16rem;">
                    <div class="card-body">
                    <h5 class="card-title">Student Attendence Edit Form</h5>
                    <p class="card-text"> Enter The student Attendence Here!!!.</p>
                    </div>
            </div>

<br>
            <form method="POST" action="/class_attend_update/{{$edit->id}}" >
              @csrf
              <div class="form-group">
                  <label>Name </label>
                  <input type="text" class="form-control" name="name" value="{{$edit->name}}" id="name"  placeholder="Enter name " >
              </div>
                <div class="form-group">
                    <label>Attend 1</label>
                    <input type="text" class="form-control" name="attend1" value="{{$edit->attend1}}" id="name"  placeholder="Enter attend1 ">
                </div>
                <div class="form-group">
                    <label>Attend 2</label>
                    <input type="text" class="form-control" name="attend2" value="{{$edit->attend2}}"id="id_no" placeholder="Enter attend2">
                </div>
                <div class="form-group">
                    <label>Attend 3</label>
                    <input type="text" class="form-control" name="attend3" value="{{$edit->attend3}}"id="phone" placeholder="Enter attend3 ">
                </div>
                <div class="form-group">
                    <label>Attend 4</label>
                    <input type="text" class="form-control" name="attend4" value="{{$edit->attend4}}"id="address" placeholder="Enter attend4">
                </div>
                <div class="form-group">
                    <label>Attend 5</label>
                    <input type="text" class="form-control" name="attend5" value="{{$edit->attend5}}"id="address" placeholder="Enter attend5">
                </div>
                <div class="form-group">
                    <label>Attend 6</label>
                    <input type="text" class="form-control" name="attend6" value="{{$edit->attend6}}"id="address" placeholder="Enter attend6">
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
