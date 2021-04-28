<?php

if (isset($_POST['submit'])) {
  $quantity = (int)$_POST['quantity'];
  $price = str_replace(',', '', $price);
  $total = (int)$quantity * intval($price);
  $sql = "INSERT INTO cart( productID, userID, quantity,price,total) 
  VALUES ('$id','" . $_SESSION['id'] . "', '$quantity','$price','$total')";
  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>toastr.success('Successfully Added to cart')</script>";
    header('location:shop.php?page=1');
  } else {
    echo "<script type='text/javascript'>toastr.error('It seems there is an error adding to cart! Please try again later')</script>";
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
}

?>