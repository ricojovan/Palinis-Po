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
                $group = $_POST['group'];
                $phone = $_POST['phone'];
                $date_hire = $_POST['date_hire'];
                $age = $_POST['age'];

                // Generate a 4-digit random number for emp_id
                $emp_id = mt_rand(1000, 9999); // Generate a random number between 1000 and 9999

                // SQL query to insert data into employees table
                $sql = "INSERT INTO employees (emp_id, full_name, position, `group`, username, age, start_date, phone)
                        VALUES ('$emp_id', '$full_name', '$position', '$group', '$username', '$age', '$date_hire', '$phone')";

                if ($conn->query($sql) === TRUE) {
                    echo '<script>alert("New record created successfully!");</script>';
                    echo '<script>window.location.href = "register.php";</script>';
                    // Redirect to a success page or perform other actions
                    // Example: header("Location: success.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            // Fetch data from employees table
            $sql_fetch_employees = "SELECT emp_id, full_name, position, `group`, username, age, start_date, phone FROM employees";
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
                            <div class="media mb-5">
                                        <img class="img-fluid mr-4" src="assets/images/media/media1.jpg" alt="image">
                                            <div class="media-body">
                                                <h4 class="mb-3">First Name, Last Name</h4>
                                                <p>
                                                Emp ID: ##<br>
                                                Username: ######<br>
                                                Position: Admin<br>
                                                Cellphone Number: +639000000000<br>
                                                Date Hire: MM/DD/YYYY<br>
                                                Age: #<br>
                                                Group: #
                                                </p> 
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="col-12">
                            <div class="card mt-5">
                                <div class="card-body">
                                    <h4 class="header-title">Register Account</h4>
                                    <!-- Registration form -->
                                    
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation" novalidate="" >
                                    <div class="col-md-3 mb-3">
                                                <label for="validationCustom04">Emp ID</label>
                                                <input type="number" class="form-control" name="emp_id" id="validationCustom04" placeholder="0000" required="" style="width: 60px" id="disabledTextInput" disabled>
                                            </div>
                                    
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
                                                <label for="validationCustom08">Cellphone Number</label>
                                                <input type="tel" class="form-control" name="phone" id="validationCustom08" placeholder="+63**********" required="">
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
                                                <option value="" disabled selected>Select</option>
                                                    <option>Employee</option>
                                                    <option>Admin</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="example-number-input" class="col-form-label">Age</label>
                                                <input class="form-control" type="number" name="age" placeholder="##" id="example-number-input" required="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label class="col-form-label">Select Group</label>
                                                <select class="form-control" name="group" style="height: 45px;">
                                                <option value="" disabled selected>Select</option>
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                    <option>E</option>
                                                    <option>F</option>
                                                    <option>G</option>
                                                    <option>H</option>
                                                </select>
                                            </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="photo" id="inputGroupFile01" required="">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                        <button  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Submit form</button>

                                        <!-- Modal -->
                                        
                                <!-- <div class="modal fade" id="exampleModalCenter">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Message</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Please ensure that all input fields are filled before submitting.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" type="submit" >Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

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
                                                <th>EMP ID</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Group</th>
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
                                                        echo "<td>" . htmlspecialchars($row["emp_id"]) . "</td>";
                                                        echo "<td>" . htmlspecialchars($row["full_name"]) . "</td>";
                                                        echo "<td>" . htmlspecialchars($row["position"]) . "</td>";
                                                        echo "<td>" . htmlspecialchars($row["group"]) . "</td>";
                                                        echo "<td>" . htmlspecialchars($row["username"]) . "</td>";
                                                        echo "<td>" . htmlspecialchars($row["age"]) . "</td>";
                                                        echo "<td>" . htmlspecialchars($row["start_date"]) . "</td>";
                                                        echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";

                                                        echo "<td>
                                                                <ul class='d-flex justify-content-center'>
                                                                
                                                                <li class='mr-3'><a href='#' class='text-secondary edit-btn' 
                                                                data-name='" . htmlspecialchars($row["full_name"]) . "' 
                                                                data-position='" . htmlspecialchars($row["position"]) . "' 
                                                                data-username='" . htmlspecialchars($row["username"]) . "' 
                                                                data-age='" . htmlspecialchars($row["age"]) . "' 
                                                                data-start-date='" . htmlspecialchars($row["start_date"]) . "' 
                                                                data-phone='" . htmlspecialchars($row["phone"]) . "'>
                                                                <i class='fa fa-edit'></i></a></li>

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

    
</body>
</html>
