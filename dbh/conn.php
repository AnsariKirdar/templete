<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "";
// Create connection
$DBConnection =  mysqli_connect_error($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($DBConnection, $database);
// echo "Connected successfully";
