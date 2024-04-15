<?php
// Database connection parameters
include 'db_connection.php';

// Function to calculate total hours worked for an employee
function calculateTotalHours($conn, $employeeName) {
    // Query to retrieve time in and time out records for the employee
    $sql = "SELECT timein, timeout FROM attendance_logs WHERE name='$employeeName' ORDER BY timein";

    // Execute the query
    $result = $conn->query($sql);

    // Initialize total hours to 0
    $totalHours = 0;

    // Iterate through the records to calculate the duration between each pair of time in and time out
    while ($row = $result->fetch_assoc()) {
        $timeIn = strtotime($row['timein']);
        $timeOut = strtotime($row['timeout']);

        // If both time in and time out are valid, calculate the duration
        if ($timeIn !== false && $timeOut !== false) {
            // Calculate the duration between time in and time out
            $duration = $timeOut - $timeIn;

            // Add the duration to total hours
            $totalHours += $duration / 3600; // Convert duration from seconds to hours
        }
    }

    // Close the result set
    $result->close();

    // Get the old total hours from the database
    $sql = "SELECT total_hours FROM attendance_logs WHERE name='$employeeName'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $oldTotalHours = $row['total_hours'];

    // Calculate the new total hours by adding the old total hours and the hours worked in this session
    $newTotalHours = $oldTotalHours + $totalHours;

    // Return the new total hours worked
    return $newTotalHours;
}

// Get parameter from AJAX request
$employeeName = $_POST['employeeName'];

// Call function to calculate total hours
$newTotalHours = calculateTotalHours($conn, $employeeName);

// Update the total_hours column in the clients table
$updateSql = "UPDATE attendance_logs SET total_hours = $newTotalHours WHERE name = '$employeeName'";
if ($conn->query($updateSql) === TRUE) {
    // Check if the request is an AJAX request
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        // If it's an AJAX request, echo the new total hours
        echo "";
    }
} else {
    echo "Error updating total hours: " . $conn->error;
}


// Close connection
$conn->close();
?>
