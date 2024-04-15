<?php
date_default_timezone_set('Asia/Singapore');
include 'db_connection.php';
// Function to update time out and empstatus
function updateTimeOut($conn, $employeeName) {
    $timestamp = date('Y-m-d H:i:s'); // Current timestamp
    
    // Update timeout in attendance1 table
    $sql_attendance1 = "UPDATE attendance_logs SET timeout='$timestamp' WHERE name='$employeeName' AND timeout='00:00:00'";
    $attendance1_result = $conn->query($sql_attendance1);

    // Update timeout and empstatus in clients table
    $sql_clients = "UPDATE employees SET  empstatus='Unavailable' WHERE full_name='$employeeName";
    $clients_result = $conn->query($sql_clients);

    // Check if both queries executed successfully
    if ($attendance1_result === TRUE && $clients_result === TRUE) {
        echo "Time out and empstatus updated successfully";
    } else {
        $error_message = "Error updating time out and empstatus: " . $conn->error;
        error_log($error_message); // Log error to file
        echo $error_message; // Return error message to client-side JavaScript
    }
}

// Get parameter from AJAX request
$employeeName = $_POST['employeeName']; 
// Call function to update time out
updateTimeOut($conn, $employeeName);

// Close connection
$conn->close();
?>


