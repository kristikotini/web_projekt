<?php
$servername   = "remotemysql.com";
$database = "t4ZSxtui3F";
$username = "t4ZSxtui3F";
$password = "4pXphD300B";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
$test ="test";
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>