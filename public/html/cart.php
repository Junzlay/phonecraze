<?php
include('header.php');
$ORDER_STATUS = array(
  0 => "No Order",
  1 => "Interested",
  2 => "Refunded",
  3 => "Payment Received",
  4 => "Free of Charge",
  5 => "Order Placed"

);
?>



<?php include "nav-login.php"; ?>
<style>
    <?php include_once('../../src/css/cart.css'); ?>
    <?php include_once('../../src/css/popout.css'); ?>
</style>
<script src="../../src/js/popout.js"></script>
<?php
$id=$_SESSION['id'];
$totalAll=0;
$sql = "SELECT * FROM cart WHERE userID=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $price=$row['price'];
    $total=$row['total'];
    $prodID=$row['productID'];
    $qty=$row['quantity'];
    $totalAll+=$total;
$sqls = "SELECT * FROM product WHERE productID= $prodID";
$results = $conn->query($sqls);

if ($result->num_rows > 0) {
  while($rows = $results->fetch_assoc()) {
    $cover=$rows['productCover'];
   $price=$rows['productPrice'];
   $desc=$rows['productDescription'];
   $name=$rows['productName'];
    ?>

<div class="card">
   <img class="card__image" src="<?=$cover?>" />
   <main class="card__content">
      <small class="card__tag">Technology</small>
      <h1 class="card__head"><?=$name?>
      </h1>
      <span class="card__date font-weight-bold">Price: $<?=number_format($price)?></span>
      <p class="card__text"><?=$desc?></p>
      <p class="font-weight-bold">Quantity: <?=$qty?></p>
      <p class="font-weight-bold">Total: $<?=number_format($total)?></p>
   </main>
</div>

    <?php }
} else {?>
 <div class="container text-center mx-auto justify-content-center">
  <h1>There is no Product as of Now</h1>
 </div>
 <?php
}
     }
} else {?>
  <div class="container text-center mx-auto justify-content-center">
   <h1>Your cart is empty</h1>
  </div>


    
<?php
}
$conn->close();

?>

<div class="popout">
  <div class="btn">
    Checkout
    <!-- <i class="icon ion-ios-glasses"></i> -->
  </div>
  <div class="panel">
    <div class="container-fluid">
      <i class="fa fa-close close  mb-4 m-4"></i>
    </div>
    <div class="panel-header">
      Are you sure to placed your order?<br>
      Your overall total is: $<?=number_format($totalAll)?>
    </div>
    <div class="panel-body container">
      <form action="" method="post">
     <button type="submit" name="submit" class=" btn-order float-right btn-sm btn-primary mt-2 mb-2">Order Now</button>
     </form>
    </div>
  </div>
</div>

<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>

<?php

if (isset($_POST['submit'])) {
  $quantity = (int)$_POST['quantity'];
  $price = str_replace(',', '', $price);
  $total = (int)$quantity * intval($price);
  $sql = "INSERT INTO orders( productID, userID, quantity,price,total) 
  VALUES ('$id','" . $_SESSION['id'] . "', '$quantity','$price','$total')";
  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>toastr.success('Your order was succesfully placed.')</script>";
   
  } else {
    echo "<script type='text/javascript'>toastr.error('It seems there is an error adding to cart! Please try again later')</script>";
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
}

?>
