<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "announce";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST["dispname"];
$password = $_POST["pass"];
$esenummer = $_POST["idnum"];

// Insert data into MySQL table
$sql = "INSERT INTO datatable (permtype, name, password, esenum) VALUES (0, '$username', '$password', $ esenummer)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close MySQL connection
$conn->close();
?>