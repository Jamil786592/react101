<?php
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

$sql = "SELECT * FROM contact ";

$result = $conn->query($sql);

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

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>

<body>
    <h2>Welcome,
    </h2>
    <h3>User Data:</h3>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Course</th>
            <th>TimeStamp</th>
        </tr>
        <tr>
            <td>
                <?php echo $userData['name']; ?>
            </td>
            <td>
                <?php echo $userData['email']; ?>
            </td>
            <td>
                <?php echo $userData['phone']; ?>
            </td>
            <td>
                <?php echo $userData['message']; ?>
            </td>
            <td>
                <?php echo $userData['course']; ?>
            </td>
            <td>
                <?php echo $userData['message_timestamp']; ?>
            </td>
        </tr>
    </table>
</body>
</html>