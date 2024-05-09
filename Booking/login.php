<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$status = '1';
if (isset($_POST['login'])) {
	$conn = new mysqli("localhost", "root", "", "activity") or die(mysqli_error());
	$query = $conn->query("SELECT *FROM `users` WHERE  `status` = '$status'  && `email` = '$email' && `password` = '$password'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$valid = $query->num_rows;
	if ($valid > 0) {
		$_SESSION['user_no'] = $fetch['user_no'];
		header("location:./appointment.php");
	} else {
		echo "<script>alert('Invalid email or password')</script>";
		echo "<script>window.location = 'index.php'</script>";
	}
	$conn->close();
}

?>