<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "student12345";
$dbname = "pract";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert data into the database
$sql = "INSERT INTO pract (name, email, phone) VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
