@extends('dash.layoutid')
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Student Performance Edit</title>
</head>
<body>
@section('contentid')
<br><br>
    <div class="container">
        <div class="jumbotron">

            <div class="card" style="width: 16rem;">
                    <div class="card-body">
                    <h5 class="card-title">Student Performance Edit Form</h5>
                    <p class="card-text"> Enter The student Performance Here!!!.</p>
                    </div>
            </div>

<br>
            <form method="POST" action="/admin_perf_edit/{{$dis->id}}" >
              @csrf
              <div class="form-group">
                  <label>Room No. </label>
                  <input type="text" class="form-control" name="mark1" value="{{$dis->room_no}}" id="name"  placeholder="Enter Room No." disabled>
              </div>
              <div class="form-group">
                  <label>Name </label>
                  <input type="text" class="form-control" name="mark1" value="{{$dis->name}}" id="name"  placeholder="Enter name" disabled>
              </div>
              
              <div class="form-group">
                  <label>Roll No. </label>
                  <input type="text" class="form-control" name="mark1" value="{{$dis->roll_no}}" id="name"  placeholder="Enter Roll No." disabled>
              </div>
                <div class="form-group">
                    <label>Marks 1</label>
                    <input type="text" class="form-control" name="mark1" value="{{$dis->mark1}}" id="name"  placeholder="Enter mark1 Name">
                </div>
                <div class="form-group">
                    <label>Marks 2</label>
                    <input type="text" class="form-control" name="mark2" value="{{$dis->mark2}}"id="id_no" placeholder="Enter mark2">
                </div>
                <div class="form-group">
                    <label>Marks 3</label>
                    <input type="text" class="form-control" name="mark3" value="{{$dis->mark3}}"id="phone" placeholder="Enter mark3 ">
                </div>
                <div class="form-group">
                    <label>Marks 4</label>
                    <input type="text" class="form-control" name="mark4" value="{{$dis->mark4}}"id="address" placeholder="Enter mark4">
                </div>
                <div class="form-group">
                    <label>Marks 5</label>
                    <input type="text" class="form-control" name="mark5" value="{{$dis->mark5}}"id="address" placeholder="Enter mark5">
                </div>
                <div class="form-group">
                    <label>Marks 6</label>
                    <input type="text" class="form-control" name="mark6" value="{{$dis->mark6}}"id="address" placeholder="Enter mark6">
                </div>
                <div class="form-group">
                    <label>Attend 1</label>
                    <input type="text" class="form-control" name="attend1" value="{{$dis->attend1}}" id="name"  placeholder="Enter attend1 ">
                </div>
                <div class="form-group">
                    <label>Attend 2</label>
                    <input type="text" class="form-control" name="attend2" value="{{$dis->attend2}}"id="id_no" placeholder="Enter attend2">
                </div>
                <div class="form-group">
                    <label>Attend 3</label>
                    <input type="text" class="form-control" name="attend3" value="{{$dis->attend3}}"id="phone" placeholder="Enter attend3 ">
                </div>
                <div class="form-group">
                    <label>Attend 4</label>
                    <input type="text" class="form-control" name="attend4" value="{{$dis->attend4}}"id="address" placeholder="Enter attend4">
                </div>
                <div class="form-group">
                    <label>Attend 5</label>
                    <input type="text" class="form-control" name="attend5" value="{{$dis->attend5}}"id="address" placeholder="Enter attend5">
                </div>
                <div class="form-group">
                    <label>Attend 6</label>
                    <input type="text" class="form-control" name="attend6" value="{{$dis->attend6}}"id="address" placeholder="Enter attend6">
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
