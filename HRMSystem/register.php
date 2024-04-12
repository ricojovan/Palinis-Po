<!doctype html>
<html class="no-js" lang="en">


<?php
        include 'db_connection.php'; // Include database connection script

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $full_name = $first_name . ' ' . $last_name; // Combine first and last name

            $username = $_POST['username'];
            $password = $_POST['password'];
            $position = $_POST['position'];
            $phone = $_POST['phone'];
            $date_hire = $_POST['date_hire'];
            $age = $_POST['age'];

            // SQL query to insert data into employees table
            $sql = "INSERT INTO employees (full_name, position, username, age, start_date, phone)
                    VALUES ('$full_name', '$position', '$username', '$age', '$date_hire', '$phone')";

            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("New record created successsfully!");</script>';
                echo '<script>window.location.href = "register.php";</script>';
                // Redirect to a success page or perform other actions
                // Example: header("Location: success.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Fetch data from employees table
        $sql_fetch_employees = "SELECT full_name, position, username, age, start_date, phone FROM employees";
        $result = $conn->query($sql_fetch_employees);

    ?>

<body style="overflow-x: hidden;">
    <?php include 'nav-and-footer/header-nav.php';?>
    <!-- No gutters start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="header-title">User Account</div>
                <div class="row no-gutters">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- Display user details here -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="col-12">
                            <div class="card mt-5">
                                <div class="card-body">
                                    <h4 class="header-title">Register Account</h4>
                                    <!-- Registration form -->
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation" novalidate="">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">First name</label>
                                                <input type="text" class="form-control" name="first_name" id="validationCustom01" placeholder="First name" required="">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" name="last_name" id="validationCustom02" placeholder="Last name" required="">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="username" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03">Password</label>
                                                <input type="password" class="form-control" name="password" id="validationCustom03" placeholder="Password" required="">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom04">Cellphone Number</label>
                                                <input type="text" class="form-control" name="phone" id="validationCustom04" placeholder="+63**********" required="">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="date-input">Date Hire</label>
                                                <input class="form-control" type="date" name="date_hire" id="validationCustom05" placeholder="2024-04-09" required="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label class="col-form-label">Position</label>
                                                <select class="form-control" name="position" style="height: 45px;">
                                                    <option>Select</option>
                                                    <option>Employee</option>
                                                    <option>Admin</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="example-number-input" class="col-form-label">Age</label>
                                                <input class="form-control" type="number" name="age" placeholder="##" id="example-number-input" required="">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01" required="">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </form>
                                    <!-- End of registration form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- Bootstrap Grid start -->
    <!-- Start 12 column grid system -->
        <div class="row">
            <div class="col-12">
            <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Table Dark</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Username</th>
                                                <th>Age</th>
                                                <th>Start Date</th>
                                                <th>Phone</th>
                                                <th scope="col">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row["full_name"] . "</td>";
                                                        echo "<td>" . $row["position"] . "</td>";
                                                        echo "<td>" . $row["username"] . "</td>";
                                                        echo "<td>" . $row["age"] . "</td>";
                                                        echo "<td>" . $row["start_date"] . "</td>";
                                                        echo "<td>" . $row["phone"] . "</td>";
                                                        echo "<td>
                                                                <ul class='d-flex justify-content-center'>
                                                                    <li class='mr-3'><a href='#' class='text-secondary edit-btn' data-name='" . $row["full_name"] . "' data-position='" . $row["position"] . "' data-username='" . $row["username"] . "' data-age='" . $row["age"] . "' data-start-date='" . $row["start_date"] . "' data-phone='" . $row["phone"] . "'><i class='fa fa-edit'></i></a></li>
                                                                    <li><a href='#' class='text-danger delete-btn' data-name='" . $row["full_name"] . "'><i class='ti-trash'></i></a></li>
                                                                </ul>
                                                            </td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='7'>No employees found</td></tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->
                </div>
            </div>      
        <!-- Bootstrap Grid end -->
        <!-- main content area end -->
    <br><br>
    <?php include 'nav-and-footer/footer-area.php';?>  
     
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Edit button click handler
            $('.edit-btn').click(function(e) {
                e.preventDefault();
                var fullName = $(this).data('name');
                var position = $(this).data('position');
                var username = $(this).data('username');
                var age = $(this).data('age');
                var startDate = $(this).data('start-date');
                var phone = $(this).data('phone');

                // Populate form fields with data
                $('#validationCustom01').val(fullName.split(' ')[0]);
                $('#validationCustom02').val(fullName.split(' ')[1]);
                $('#validationCustomUsername').val(username);
                $('#validationCustom03').val(""); // Password field - you may need to handle this differently
                $('#validationCustom04').val(phone);
                $('#validationCustom05').val(startDate);
                $('select[name="position"]').val(position);
                $('input[name="age"]').val(age);
            });

            // Delete button click handler
            $('.delete-btn').click(function(e) {
                e.preventDefault();
                var fullName = $(this).data('name');

                // Send an AJAX request to delete the record
                $.ajax({
                    method: 'POST',
                    url: 'delete_employee.php', // Create a new PHP file to handle deletion
                    data: { fullName: fullName },
                    success: function(response) {
                        if (response === 'success') {
                            alert('Employee record deleted successfully!');
                            window.location.reload(); // Refresh the page
                        } else {
                            alert('Error deleting employee record.');
                        }
                    },
                    error: function() {
                        alert('Error deleting employee record.');
                    }
                });
            });
        });
    </script>
    
</body>
</html>
