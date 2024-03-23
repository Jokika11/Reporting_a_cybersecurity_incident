<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybersecurity_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the incident from the POST request
$incident = $_POST['incident'];

// Insert the incident into the database
$sql = "INSERT INTO incidents (description) VALUES ('$incident')";

if ($conn->query($sql) === TRUE) {
    echo "Incident reported successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

