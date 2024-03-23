<?php
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

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, phone, email)
VALUES ('$name', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    // Redirect to another page after successful insertion
    header('Location: index.html');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
