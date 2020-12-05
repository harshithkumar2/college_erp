@extends('dash.layoutid2')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
</head>
<body>
@section('contentid2')
    <div class="container">
        <div class="jumbotron" style="margin-top:60px">

        <div class="card" style="width: 16rem;">
                    <div class="card-body">
                    <h5 class="card-title">CHANGE PASSWORD</h5>

                    </div>
            </div>
<br>
@if(Session::has('msg'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>{{Session::get('msg')}}!</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
            <form method="post" action="/change_stud/{{$pass->id}}">
              @csrf

                <div class="row">
                  <div class="col-sm-12">
                    <label>Old Password:</label>
                    <input type="password" name="old" class="form-control" placeholder="Enter Old password">
                  </div>

                </div><br>
                <div class="row">
                  <div class="col-sm-12">
                    <label>New Password:</label>
                    <input type="password" name="new" class="form-control" placeholder="Enter new password">
                  </div>

                </div><br>
                <div class="row">
                  <div class="col-sm-12">
                    <label>Re-enter New Password:</label>
                    <input type="password" name="cnew" class="form-control" placeholder="Enter Re-enter new password">
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
