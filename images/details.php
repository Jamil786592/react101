<?php

// Database configuration
$servername = "your_database_host";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if userid and password are provided
if (isset($_POST['userid']) && isset($_POST['password'])) {
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    // Validate user credentials
    $sql = "SELECT * FROM users WHERE userid = '$userid' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User authenticated, fetch data from the database table
        $data = array();
        $table = "your_table_name"; // Replace with your actual table name
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo "No data found in the table.";
        }
    } else {
        echo "Invalid userid or password.";
    }
} else {
    echo "Please provide both userid and password.";
}

// Close the database connection
$conn->close();

?>