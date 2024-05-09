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

    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                $('.succWrap').slideUp("slow");
            }, 3000);
        });
    </script>
    <script src="./js/main1.js"></script>

    </html>
<?php } ?>

<?php
$date_in = isset($_POST['date_in']) ? $_POST['date_in'] : date('Y-m-d');
$date_out = isset($_POST['date_out']) ? $_POST['date_out'] : date('Y-m-d', strtotime(date('Y-m-d') . ' + 3 days'));
?>

<!-- Masthead-->
<header class="masthead">
</header>

<section class="page-section bg-dark">

    <div class="container">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="index.php?page=list" id="filter" method="POST">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Chech-in Date</label>
                                <input type="text" class="form-control datepicker" name="date_in" autocomplete="off"
                                    value="<?php echo isset($date_in) ? date("Y-m-d", strtotime($date_in)) : "" ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="">Chech-out Date</label>
                                <input type="text" class="form-control datepicker" name="date_out" autocomplete="off"
                                    value="<?php echo isset($date_out) ? date("Y-m-d", strtotime($date_out)) : "" ?>">
                            </div>
                            <div class="col-md-3">
                                <br>
                                <button class="btn-btn-block btn-primary mt-3">Check Availability</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <hr>

            <?php

            $cat = $conn->query("SELECT * FROM room_categories");
            $cat_arr = array();
            while ($row = $cat->fetch_assoc()) {
                $cat_arr[$row['id']] = $row;
            }
            $qry = $conn->query("SELECT distinct(category_id),category_id from rooms where id not in (SELECT room_id from checked where '$date_in' BETWEEN date(date_in) and date(date_out) and '$date_out' BETWEEN date(date_in) and date(date_out)  )");
            while ($row = $qry->fetch_assoc()):

                ?>
                <div class="card item-rooms mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="assets/img/<?php echo $cat_arr[$row['category_id']]['cover_img'] ?>" alt="">
                            </div>
                            <div class="col-md-5" height="100%">
                                <h3><b><?php echo '$ ' . number_format($cat_arr[$row['category_id']]['price'], 2) ?></b><span>
                                        / per day</span></h3>

                                <h4><b>
                                        <?php echo $cat_arr[$row['category_id']]['name'] ?>
                                    </b></h4>
                                <div class="align-self-end mt-5">
                                    <button class="btn btn-primary  float-right book_now" type="button"
                                        data-id="<?php echo $row['category_id'] ?>">Book now</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<style type="text/css">
    .item-rooms img {
        width: 23vw;
    }
</style>
<script>
    $('.book_now').click(function () {
        uni_modal('Book', 'admin/book.php?in=<?php echo $date_in ?>&out=<?php echo $date_out ?>&cid=' + $(this).attr('data-id'))
    })
</script>