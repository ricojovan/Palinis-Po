<?php
// Include the database connection
include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];

    // SQL query to check if the provided credentials exist in the admin table
    $sql_admin = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result_admin = $conn->query($sql_admin);

    if ($result_admin->num_rows == 1) {
        // Valid credentials for admin, redirect to dashboard and store username in session
        session_start(); // Start session if not already started
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Check if the credentials are valid for an employee
        $sql_employee = "SELECT * FROM employees WHERE username = '$username' AND e_password = '$password'";
        $result_employee = $conn->query($sql_employee);

        if ($result_employee->num_rows == 1) {
            // Valid credentials for employee, redirect to employee list
            session_start(); // Start session if not already started
            $_SESSION['username'] = $username;
            header("Location: employee_list.php");
            exit();
        } else {
            // Invalid credentials for both admin and employee
            echo '<script>alert("Invalid username or password. Please try again.");</script>';
            echo '<script>window.location.href = "login_and_sign-in_form.php";</script>';
            exit();
        }
    }
}
?>
