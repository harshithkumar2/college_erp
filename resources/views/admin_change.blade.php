@extends('dash.layoutid')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Password</title>
</head>
@section('contentid')
<br><br>
    <div class="container">
        <div class="jumbotron">

        <div class="card" style="width: 16rem;">
                    <div class="card-body">
                    <h5 class="card-title">CHANGE PASSWORD</h5>
                    <p class="card-text"> Enter Your New Password Here!!!.</p>

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
            <form method="post" action="/change/{{$pass->id}}">
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
                <button type="submit" class="btn btn-primary" id="regbtn">Submit</button>
                </div>
             
                
            </form>
        </div>

    </div>
   @endsection
  
</body>
</html>
