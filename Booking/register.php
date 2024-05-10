<?php
include ('./includes/add_register.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>PALINIS PO | SERVICES</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="./uploads/cicon.png" />
  <!-- //for-mobile-apps -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link href="src/style.css" rel="stylesheet" type="text/css" media="all" />
  <!--modal script-->
  <script src="./js/bootstrap.min.js"></script>

  <!-- //  -->
</head>

<body>
  <header>
    <div class="container">
      <nav>
        <ul>
          <li class="current"><a href="index.php"><span> <span> HOME </span> </span></a></li>
          <!--<li><a href="about.php">ABOUT</a></li>-->
          <!--<li><a href="services.php">SERVICES</a></li>-->

        </ul>

      </nav>
      <div id="branding">
        <h1>
          <span class="highlight">HOME</span> |
          PALINIS PO
        </h1>
      </div>
    </div>
    <br />
  </header>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <!-- contents ---->
  <div class="container">
    <center>
      <div class="card mx-auto" style="width: 30rem; align-items: center;">
        <div class="card-header"
          style="background-color:#156699; color:#ffffff;font-weight: bold;font-size: 30px;text-align: center;">Register
        </div>
        &nbsp;&nbsp;
        <div class="card-body">
          <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform">
            <div class="form-group" style="text-align: left;">
              <label for="Profile">Profile</label>
              <input type="file" name="image" class="form-control" placeholder="Upload your Picture Profile">
            </div>
            <div class="form-group" style="text-align: left;">
              <label for="username">Full Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter Fullname">
            </div>
            <div class="form-group" style="text-align: left;">
              <label for="email">Email </label>
              <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group" style="text-align: left;">
              <label for="password1">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group" style="text-align: left;">
              <label for="Address">Address</label>
              <input type="text" name="address" class="form-control" placeholder="Your Address">
            </div>
            <div class="form-group" style="text-align: left;">
              <label for="Mobile" style="text-align: left;">Mobile No.</label>
              <input type="text" name="mobile" class="form-control" placeholder="Your Cell Phone No.">
            </div>


            <div class="form-group" style="text-align: left;">
              <button type="submit" name="submit" class="btn btn-primary pull-right"><span
                  class="fa fa-user"></span>&nbsp;Register</button>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </form>
        </div>
        <div class="card-footer text-muted">

        </div>
      </div>
    </center>
  </div>
  <!-- contents ---->
  <footer>
    <p>PALINIS PO | SERVICES &copy; 2024</p>
  </footer>
</body>

</html>