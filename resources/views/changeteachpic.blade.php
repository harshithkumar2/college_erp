@extends('dash.layoutid1')
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Change Photo</title>
</head>
<body>
@section('contentid1')
    <div class="container">
        <div class="jumbotron" style="margin-top:80px">

        <div class="card" style="width: 16rem;">
                    <div class="card-body">
                    <h5 class="card-title">CHANGE YOUR PHOTO</h5>
                
                    </div>
            </div>
<br>

            <form method="post" action="/changepic/teachphoto/{{$id->id}}" enctype="multipart/form-data">
              @csrf
                
                <div class="form-group">
                    <label for="">Change Photo</label>
                        <input type="file" class="form-control" placeholder="Enter Valid Email-Id"  name="pic" style="height:44px" required>
                </div>
               
                <button type="submit" class="btn btn-primarys" id="regbtn">Submit</button>
            </form>
        </div>

    </div>
    @endsection
</body>
</html>
