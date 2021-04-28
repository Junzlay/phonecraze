<?php
$servername = "remotemysql.com:3306";
$username = "QS0Kc3Ap8c";
$password = "tveZrwznrq";
$dbname = "QS0Kc3Ap8c";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
      ?>