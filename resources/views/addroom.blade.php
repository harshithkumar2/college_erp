@extends('dash.layoutid')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Class</title>
</head>
<body>
@section('contentid')
    <div class="container">
      @if(Session::has('msg'))
      <script>swal("Added!", "{{Session::get('msg')}}", "success")</script>
      @endif
        <div class="jumbotron" style="margin-top:80px">

        <div class="card" style="width: 16rem;">
                    <div class="card-body">
                    <h5 class="card-title">ADD CLASSES</h5>


                    </div>
            </div>
<br>

            <form method="post" action="addclass" >
              @csrf

                <div class="form-group">
                    <label for="">Class No</label>
                   <input type="text" class="form-control" placeholder="Enter Class (Room No)"  name="room" style="height:44px" required>
                    </div>

                <button type="submit" class="btn btn-primarys" id="regbtn" style="margin-top:10px">Submit</button>
            </form>
        </div>

    </div>
   @endsection
</body>
</html>
