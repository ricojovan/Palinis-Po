<!DOCTYPE html>
<html lang="en">
<body>


<?php include 'nav-and-footer/header-nav.php';?>

<!-- Bootstrap Grid start -->
<div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="header-title">Bootstrap Grid System</div>
                                
                                <!-- Start 6 column grid system -->
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                   <!-- Progress Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Time In</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table id="TimeIn" class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Time In</th>
                                                    <th scope="col">Time Out</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Employee Status</th>
                                                    <th scope="col">Total Hours</th>
                                                    
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                include 'db_connection.php';

                                                // SQL query
                                                $sql = "SELECT emp_id, full_name, timein, timeout, date, empstatus, total_hours FROM employees";

                                                // Execute the query
                                                $result = $conn->query($sql);

                                                // Check if any rows were returned
                                                if ($result->num_rows > 0) {
                                                    // Output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row["emp_id"] . "</td>";
                                                        echo "<td>" . $row["full_name"] . "</td>";
                                                        echo "<td>" . $row["timein"] . "</td>";
                                                        echo "<td>" . $row["timeout"] . "</td>";
                                                        echo "<td>" . $row["date"] . "</td>";
                                                        echo "<td>" . $row["empstatus"] . "</td>";
                                                        echo "<td>" . $row["total_hours"] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='7'>0 results</td></tr>";
                                                }

                                                // Close connection
                                                $conn->close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->









                    </div>
                    
<!-- Employee selection dropdown -->
<select id="employeeSelect" class="form-control">
    <option value="">Select Employee</option>
    <?php
     include 'db_connection.php';
    // Read all unique employee names from the clients table
    $sql = "SELECT DISTINCT full_name FROM employees";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['full_name'] . "'>" . $row['full_name'] . "</option>";
        }
    } else {
        echo "<option value='' disabled>No employees found</option>";
    }
    $conn->close();
    ?>
</select>
<!-- Button for Time In -->
<button id="timeInBtn" class="btn btn-primary">Time In</button>
<!-- Button for Time Out -->
<button id="timeOutBtn" class="btn btn-primary">Time Out</button>
<!-- Button for Time Out -->

<script>
$(document).ready(function() {
    // Time In button click handler
    $('#timeInBtn').click(function() {
        var selectedEmployee = $('#employeeSelect').val();
        if (selectedEmployee === "") {
            alert("Please select an employee.");
            return;
        }

        // AJAX request to record time in
        $.ajax({
            type: "POST",
            url: "record_attendance.php",
            data: { employeeName: selectedEmployee },
            success: function(response) {
                alert(response); // Alert the response from the server
                // Reload the page to update the table
                location.reload();
            }
        });
    });

    // Time Out button click handler
    $('#timeOutBtn').click(function() {
        var selectedEmployee = $('#employeeSelect').val();
        if (selectedEmployee === "") {
            alert("Please select an employee.");
            return;
        }

        // AJAX request to delete attendance record
        $.ajax({
            type: "POST",
            url: "update_attendance.php",
            data: { employeeName: selectedEmployee },
            success: function(response) {
                 // Alert the response from the server
                // Reload the page to update the table
                location.reload();
                
                // After successfully updating attendance, make AJAX request to calculate total hours
                $.ajax({
                    type: "POST",
                    url: "emphours.php",
                    data: { employeeName: selectedEmployee },
                    success: function(totalHours) {
                        alert("Time out success "); // Alert the total hours worked
                        location.reload();
                    }
                });
            }
        });
    });
});

</script>
                                        
                    <!-- Bootstrap Grid end -->
                    <br><br><br><br><br>







<?php include 'nav-and-footer/footer-area.php';?> 
    
</body>
</html>