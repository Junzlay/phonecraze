<?php
include 'connection.php';
$fname = $_POST['lname'];
$lname = $_POST['fname'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$sql = "INSERT INTO customerDetails( customerFirstName, customerLastName, customerAddress, customerNumber) 
    VALUES ('$fname','$lname','$city','$phone')";
if ($conn->query($sql) === TRUE) {
  header('location: ../../index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>