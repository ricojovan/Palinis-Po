<?php
include 'db_connection.php'; // Include database connection script

// Check if the POST request contains the employee's full name
if (isset($_POST['fullName'])) {
    $fullName = $_POST['fullName'];

    // Prepare SQL statement to delete the employee based on full name
    $sql = "DELETE FROM employees WHERE full_name = '$fullName'";

    if ($conn->query($sql) === TRUE) {
        echo 'success'; // Respond with success if deletion is successful
    } else {
        echo 'error'; // Respond with error if deletion fails
    }
} else {
    echo 'error'; // Respond with error if full name is not provided
}
?>
