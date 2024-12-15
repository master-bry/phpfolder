<?php
// Database connection parameters
$host ='192.168.50.34';
$dbname ='users_db';
$dbuser ='admin';
$dbpass ='123_#45&Dxt';

// Create a connection to the MySQL database
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve username and password from POST request
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO user_tbl (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password); // "ss" means both are strings

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>