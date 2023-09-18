<?php
// Database connection settings
$hostname = "localhost";
$username = "root";
$password = "";
$database = "expensetracker";

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data from the 'users' table
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

// Create an associative array to store the data
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close the database connection
$conn->close();

// Return data as JSON
echo json_encode($data);

?>
