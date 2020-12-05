@extends('dash.layoutid1')
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Student Marks Edit</title>
</head>
<body>
@section('contentid1')
<br><br>
    <div class="container">
        <div class="jumbotron">

            <div class="card" style="width: 16rem;">
                    <div class="card-body">
                    <h5 class="card-title">Student Marks Edit Form</h5>
                    <p class="card-text"> Enter The student Marks Here!!!.</p>
                    </div>
            </div>

<br>
            <form method="POST" action="/stud_mark_update/{{$edit->id}}" >
              @csrf
              <div class="form-group">
                  <label>Name </label>
                  <input type="text" class="form-control" name="mark1" value="{{$edit->name}}" id="name"  placeholder="Enter name" disabled>
              </div>
                <div class="form-group">
                    <label>Marks 1</label>
                    <input type="text" class="form-control" name="mark1" value="{{$edit->mark1}}" id="name"  placeholder="Enter mark1 Name">
                </div>
                <div class="form-group">
                    <label>Marks 2</label>
                    <input type="text" class="form-control" name="mark2" value="{{$edit->mark2}}"id="id_no" placeholder="Enter mark2">
                </div>
                <div class="form-group">
                    <label>Marks 3</label>
                    <input type="text" class="form-control" name="mark3" value="{{$edit->mark3}}"id="phone" placeholder="Enter mark3 ">
                </div>
                <div class="form-group">
                    <label>Marks 4</label>
                    <input type="text" class="form-control" name="mark4" value="{{$edit->mark4}}"id="address" placeholder="Enter mark4">
                </div>
                <div class="form-group">
                    <label>Marks 5</label>
                    <input type="text" class="form-control" name="mark5" value="{{$edit->mark5}}"id="address" placeholder="Enter mark5">
                </div>
                <div class="form-group">
                    <label>Marks 6</label>
                    <input type="text" class="form-control" name="mark6" value="{{$edit->mark6}}"id="address" placeholder="Enter mark6">
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
