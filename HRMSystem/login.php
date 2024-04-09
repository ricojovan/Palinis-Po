<?php
// Include the database connection
include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['login_username'];
  $password = $_POST['login_password'];

  // SQL query to check if the provided credentials exist in the admin table
  $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // Valid credentials, redirect to dashboard and store username in session
    session_start(); // Start session if not already started
    $_SESSION['username'] = $username;

    header("Location: dashboard.php");
    exit();
  } else {
    // Invalid credentials, redirect back to login page with customized alert message
    echo '<script>alert("Invalid username or password. Please try again.");</script>';
    echo '<script>window.location.href = "login_and_sign-in_form.php";</script>';
    exit();
  }
}
?>