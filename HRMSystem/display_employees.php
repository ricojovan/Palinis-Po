<?php
include 'db_connection.php';

if (isset($_POST['group'])) {
    $group = $_POST['group'];

    // Prepare SQL query to fetch employees based on group
    $sql = "SELECT emp_id, full_name, phone FROM employees WHERE `group` = '$group'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["emp_id"] . "</td>";
            echo "<td>" . $row["full_name"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . date("Y-m-d") . "</td>"; // Automatically display today's date
            echo "<td>Status</td>"; // Example status column
            echo "<td>Action</td>"; // Example action column
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No employees found in this group</td></tr>";
    }
} else {
    echo "<tr><td colspan='6'>Invalid request</td></tr>";
}

$conn->close();
?>
