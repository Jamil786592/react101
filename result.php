<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Login</title>
</head>

<body>

    <style>
        .table-container {
            height: 300px;
            /* Adjust the height as needed */
            overflow-y: auto;
        }
        table,
        th,
        td {
            border: 1px solid black;
            border-radius: 10px;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: center;
            width: 1px;
            
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
            width: 10%;
        }

        th {
            background-color: #4CAF50;
            color: white;
            width: 10%;
        }
    </style>
    <script>
        // Initialize datepicker for start date
        $('#startDate').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });

        // Initialize datepicker for end date
        $('#endDate').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
    </script>
    <div>
        <div>
            <h2>result page</h2>
            <div class="container mt-5">
                <div style=" border: 1px solid black;">
                    <h2>Login</h2>
                    <form class="w3-container" method="post"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="w3-section">
                            <label><b>Login Id</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Login ID"
                                name="name" id="name" required>
                            <label><b>Password</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Password"
                                id="course" name="course">
                            <b></b>
                            <button type="submit" name="submit" value="Submit"
                                class="w3-button w3-block w3-green w3-margin-bottom">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container mt-5" style=" border: 1px solid black;">
                <h2>Date Range Picker</h2>
                <form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="startDate">Start Date:</label>
                            <input type="date" class="form-control" id="startDate" placeholder="Select Start Date"
                                name="startDate" id="startDate">

                        </div>
                        <div class="col-md-6">
                            <label for="endDate">End Date:</label>
                            <input type="date" class="form-control" id="endDate" placeholder="Select End Date"
                                name="endDate" id="endDate">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="submit" value="Submit"
                                class="w3-button w3-block w3-green w3-margin-bottom">Submit</button>
                        </div>
                    </div>
                </form>
            </div>




        </div>
        <div class="container mt-5">
            <div class="table-container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Course</th>
                            <th>TimeStamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Define variables and initialize with empty values  startDate endDate
                        $startDate = $endDate = $course = $name = $email = $phone = $message = "";
                        $startDate_err = $endDate_err = $course_err = $name_err = $email_err = $phone_err = $message_err = "";
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Validate name
                            if (empty($_POST["name"])) {
                                $name_err = "Please enter your name.";
                            } else {
                                $name = test_input($_POST["name"]);
                            }
                            // Validate course
                            if (empty($_POST["course"])) {
                                $course_err = "Please enter your message.";
                            } else {
                                $course = test_input($_POST["course"]);
                            }

                            if (empty($_POST["startDate"])) {
                                $startDate_err = "Please enter your startDate.";
                            } else {
                                $startDate = test_input($_POST["startDate"]);
                            }
                            // Validate course
                            if (empty($_POST["endDate"])) {
                                $endDate_err = "Please enter your endDate.";
                            } else {
                                $endDate = test_input($_POST["endDate"]);
                            }

                            // If all fields are filled, you can proceed further
                            if (empty($name_err) && empty($course_err)) {
                                $servername = "srv1111.hstgr.io:3306";
                                $database = "u925226643_contacts";
                                $username = "u925226643_contacts";
                                $password = "Contact7865";
                                // Create a connection
                                $conn = mysqli_connect($servername, $username, $password, $database);
                                // Check the connection
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
                                $sql = "SELECT login_id, password FROM user WHERE login_id = '$name' AND password = '$course'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) == 1) {

                                    $row = mysqli_fetch_assoc($result);

                                    $sqll = "SELECT * FROM contact ";

                                    $result = $conn->query($sqll);
                                    echo "Records Table";
                                    // Check if there are rows in the result
                                    if ($result->num_rows > 0) {
                                        // Initialize an empty array to store the data
                                        $usersArray = array();

                                        // Fetch associative array from each row and add it to the usersArray
                                        while ($row = $result->fetch_assoc()) {
                                            $usersArray[] = $row;
                                        }

                                        foreach ($usersArray as $user) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $user['name']; ?>
                                                </td>
                                                <td>
                                                    <?= $user['email']; ?>
                                                </td>
                                                <td>
                                                    <?= $user['phone']; ?>
                                                </td>
                                                <td>
                                                    <?= $user['message']; ?>
                                                </td>
                                                <td>
                                                    <?= $user['course']; ?>
                                                </td>
                                                <td>
                                                    <?= $user['message_timestamp']; ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }

                                    } else {
                                        echo "No records found";
                                    }
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                                mysqli_close($conn);
                            }
                        }


                        // Function to sanitize user input
                        function test_input($data)
                        {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>