@extends('dash.layoutid')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Subjects</title>
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
                    <h5 class="card-title">ADD SUBJECTS</h5>


                    </div>
            </div>
<br>

            <form method="post" action="addsubject" >
              @csrf

                <div class="form-group">
                    <label for="">Subject Name</label>
                   <input type="text" class="form-control" placeholder="Enter the Subject Name"  name="sub" style="height:44px" required>
                    </div>
                    <div class="form-group">
                        <label for="">Subject Code</label>
                       <input type="text" class="form-control" placeholder="Enter the Subject Code"  name="code" style="height:44px" required>
                        </div>
                <button type="submit" class="btn btn-primarys" id="regbtn" style="margin-top:10px">Submit</button>
            </form>
        </div>

    </div>
   @endsection
</body>
</html>
