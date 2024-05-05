<?php
// Define variables and initialize with empty values
$course = $name = $email = $phone = $message = "";
$course_err = $name_err = $email_err = $phone_err = $message_err = "";
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

    echo "Name field s:-   " . $name;
    echo "Course field s:-   " . $course;
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
        echo "Course field s:-   " . $course;

        $sql = "SELECT login_id, password FROM user WHERE login_id = '$name' AND password = '$course'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            echo "inside if";
            $row = mysqli_fetch_assoc($result);

            $sqll = "SELECT * FROM contact ";

            $result = $conn->query($sqll);

            // Check if there are rows in the result
            if ($result->num_rows > 0) {
                // Initialize an empty array to store the data
                $usersArray = array();

                // Fetch associative array from each row and add it to the usersArray
                while ($row = $result->fetch_assoc()) {
                    $usersArray[] = $row;
                }

                // Display data in an HTML table
                echo '<table border="1">';
                echo '<tr><th>Name</th><th>Email</th><th>phone</th><th>message</th><th>course</th><th>TimeSTAMP</th></tr>';

                foreach ($usersArray as $user) {
                    echo '<tr>';
                    echo '<td>' . $user['name'] . '</td>';
                    echo '<td>' . $user['email'] . '</td>';
                    echo '<td>' . $user['phone'] . '</td>';
                    echo '<td>' . $user['message'] . '</td>';
                    echo '<td>' . $user['course'] . '</td>';
                    echo '<td>' . $user['message_timestamp'] . '</td>';
                    echo '</tr>';
                }

                echo '</table>';
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS */
        th,
        td {
            text-align: center;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="w3-section">
            <label><b>Login Id</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Login ID" name="name"
                id="name" required>
            <label><b>Password</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Password" id="course"
                name="course">
            <b></b>
            <button type="submit" name="submit" value="Submit"
                class="w3-button w3-block w3-green w3-margin-bottom">Submit</button>
        </div>
    </form>
</body>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

</html>