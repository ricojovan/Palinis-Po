<?php
require_once 'logincheck.php';
?>
<?php include './includes/edit_query.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>PALINIS PO | SERVICES</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="./uploads/cicon.png" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="./css/style6.css">

</head>

<body style="margin:20px auto;" onLoad="setToday()">
  <?php include ('includes/header.php'); ?>
  <div class="ts-main-content">
    <?php include ('includes/leftbar.php'); ?>
    <div class="content-wrapper">
      <div class="container-fluid">
        <?php
        $conn = new mysqli("localhost", "root", "", "activity") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `users` WHERE `user_no` = '$_SESSION[user_no]'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        ?>
        <div class="row">
          <div class="col-md-12">

            <h2 class="page-title">Change Password</h2>

            <div class="row">
              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-heading">Form fields</div>
                  <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Current Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" name="password" id="password" required
                            value="<?php echo $fetch['password']; ?>">
                        </div>
                      </div>
                      <div class="hr-dashed"></div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label">New Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" name="newpassword" id="newpassword" required
                            value="<?php echo $fetch['password']; ?>">
                        </div>
                      </div>
                      <div class="hr-dashed"></div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label">Confirm Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" name="confirmpassword" id="confirmpassword"
                            required value="<?php echo $fetch['password']; ?>">
                        </div>
                      </div>
                      <div class="hr-dashed"></div>
                      &nbsp; &nbsp; &nbsp; &nbsp;
                      <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                          <button class="btn btn-primary" name="submit" type="submit">Save changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<script src="./js/main1.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    setTimeout(function () {
      $('.succWrap').slideUp("slow");
    }, 3000);
  });
</script>

</html>


<?php
require_once 'logincheck.php';
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "activity");
$query = "SELECT * FROM users WHERE `user_no`='$_SESSION[user_no]'";
$sql = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
  <title>PALINIS PO | SERVICES</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="./uploads/cicon.png" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.min.css">
  <link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./css/style3.css">
  <link rel="stylesheet" type="text/css" href="./css/style6.css">
  <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <script type="text/javascript" src="./js/jquery.dataTables.min.js"></script>

  <style>
    .errorWrap {
      padding: 10px;
      margin: 0 0 20px 0;
      background: #dd3d36;
      color: #fff;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
      padding: 10px;
      margin: 0 0 20px 0;
      background: #5cb85c;
      color: #fff;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }
  </style>
  <link rel="stylesheet" href="./css6/style.css">
</head>

<body>

  <?php include ('includes/header.php'); ?>
  <div class="ts-main-content">
    <?php include ('includes/leftbar.php'); ?>
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <?php require_once './includes/update_user.php' ?>

                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'activity') or die(mysqli_error());
                  $query = $conn->query("SELECT * FROM `users` WHERE `user_no`='$_SESSION[user_no]'") or die(mysqli_error());
                  $fetch = $query->fetch_array();
                  ?>
                  <div class="panel-heading"> <?php echo $fetch["email"]; ?> </div>
                  <div class="panel-body">
                    <?php
                    $conn = new mysqli('localhost', 'root', '', 'activity') or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `users` WHERE `user_no`='$_SESSION[user_no]'") or die(mysqli_error());
                    while ($fetch = $query->fetch_array()) {
                      ?>
                      <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <?php

                        while ($row = mysqli_fetch_array($sql)) {
                          ?>
                          <div class="form-group">
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4 text-center">
                              <img src="./uploads/<?php echo $fetch["image"]; ?>"
                                style="width:200px; border-radius:50%; margin:10px;">
                              <input type="file" name="image" class="form-control">
                              <input type="hidden" name="image" class="form-control" value="<?php echo $fetch["image"]; ?>">
                            </div>
                            <div class="col-sm-4">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Name<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                              <input type="text" name="name" class="form-control" required
                                value="<?php echo $fetch['name']; ?>">
                            </div>

                            <label class="col-sm-2 control-label">Email<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                              <input type="email" name="email" class="form-control" required
                                value="<?php echo $fetch['email']; ?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Address<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                              <input type="text" name="address" class="form-control" required
                                value="<?php echo $fetch['address']; ?>">
                            </div>


                            <label class="col-sm-2 control-label">Mobile<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                              <input type="text" name="mobile" class="form-control" required
                                value="<?php echo $fetch['mobile']; ?>">
                            </div>
                          </div>
                          <input type="hidden" name="user_no" class="form-control" required
                            value="<?php echo $fetch['user_no']; ?>">

                          <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                              <button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
                            </div>
                          </div>
                          <?php

                          $conn->close();
                        }
                        ?>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

  <script type="text/javascript" src="./js/jquery.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap.min.js"></script>
  <script src="./js/main.js"></script>


  </html>
<?php } ?>