<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/styl2.css">
        <title>Teacher Registration</title>
    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
  <form class="form-inline ml-auto mr-auto">
   <h4>Teacher Registration</h4>
  </form>
</nav>
<br>
    <div class="container">

        <div class="jumbotron">

            <div class="card" style="width: 15.9rem;">
                    <div class="card-body">
                    <h6 class="card-title">TACHER DETAILS FORM</h6>
                    <p class="card-text"> Enter The teacher Details Here!!!.</p>
                    </div>
            </div>

<br>
            <form method="POST" action="teacher_public_insert" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label>Teachers Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Teachers Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email-Id</label>
                    <input type="email" class="form-control" name="email_id" id="email_id" aria-describedby="emailHelp" placeholder="Enter Teachers Email" required>

                </div>
               
                <div class="form-group">
                    <label>D.O.B</label>
                    <input type="date" class="form-control" name="dob" id="id_no" placeholder="Enter Date Of Birth" required>
                </div>
                <div class="form-group">
                    <label>Id_no</label>
                    <input type="text" class="form-control" name="id_no" id="id_no" placeholder="Enter Id_No" required>
                </div>
                <div class="form-group">
                    <label>Phone No.</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone No" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required>
                </div>
                <div class="form-group">
                    <label>Qualification</label>
                    <input type="text" class="form-control" name="quali" id="class_alloted" placeholder="Enter Qualification" required>
                </div>
                <div class="form-group">
                    <label>Experience</label>
                    <input type="text" class="form-control" name="exp" id="class_alloted" placeholder="Enter Experience" required>
                </div>

            <div class="form-group">
                  <label>Gender:</label>
                            <select class="form-control" name="gender" value="">
                            <option>Male</option>
                            <option>Female</option>
                            </select>
                        </div>


                <div class="form-group">
                    <label for="">Upload Photo</label>

                        <input type="file" class="form-control" placeholder=""  name="image" style="height:42px" required>

                    </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Following Details Are Correct.</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</body>
</html>
