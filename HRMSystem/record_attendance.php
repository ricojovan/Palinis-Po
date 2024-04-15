<?php
date_default_timezone_set('America/Chicago');

include 'db_connection.php';

// Function to record time in and update clients table
function recordTimeIn($conn, $employeeName) {
    $timestamp = date('Y-m-d H:i:s'); // Current timestamp
    $date = date('Y-m-d'); // Current date

    // Insert record into attendance_logs table
    $sql_attendance1 = "INSERT INTO attendance_logs (name, timein, timeout, date) VALUES ('$employeeName', '$timestamp', '00:00:00', '$date')";
    
    // Update record in employees table
    $sql_clients = "UPDATE employees SET empstatus='Available' WHERE full_name='$employeeName'";
    $clients_result = $conn->query($sql_clients);    
    
    // Check if both queries were successful
    if ($conn->query($sql_attendance1) === TRUE && $clients_result === TRUE) {
        echo "Time in recorded successfully";
    } else {
        echo "Error: " . $sql_attendance1 . "<br>" . $conn->error;
    }
}

// Get parameter from AJAX request
$employeeName = $_POST['employeeName'];

// Call function to record time in and update clients table
recordTimeIn($conn, $employeeName);

// Close connection
$conn->close();
?>
