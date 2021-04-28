<?php
include('header.php');

?>


<style>
  <?php include_once('../../src/css/view-product.css'); ?>
</style>
<?php include "nav-login.php"; ?>

<?php
include '../database/connection.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM product WHERE productID='$id'");
$row  = mysqli_fetch_array($result);
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
if (is_array($row)) {
  $description = $row['productDescription'];
  $price = $row['productPrice'];
  $title = $row['productName'];
  $cover = $row['productCover'];
}
?>
<div class="wrapper mb-4">

  <div class="col-1-2">
    <div class="product-wrap">
      <div class="product-shot">
        <img src="<?php echo $cover; ?>" alt="" />
      </div>
    </div>
  </div>

  <div class="col-1-2">
    <div class="product-info">
      <h2><?php echo $title; ?></h2>
      <div class="desc">

        <?php echo $description; ?>

      </div>
      <br>
      <form action="" method="post">
        <p>Price: $<?php echo $price; ?></p>
        <p>Available item: <?php echo $row['productAmount']; ?></p>
        <div class="input-group w-25">

          <span class="input-group-btn">
            <button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]">
              <i class="fa fa-minus "></i>
            </button>
          </span>
         
          <input type="hidden" class="quantity" name="quantity" value="<?php echo htmlspecialchars($name); ?>">
          <input type="text" name="quant[2]" class="form-control input-number" value="0" min="0" max="<?php echo $row['productAmount']; ?>">
          <span class="input-group-btn">
            <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
              <i class="fa fa-plus "></i>
            </button>
          </span>
        </div>

        <button type="submit" name="submit" onclick='reloadDIV();' class="btn btn-primary mt-4 submit">Add to Cart</button>
      </form>
    </div>

  </div>
</div>

<?php

if (isset($_POST['submit'])) {
  $quantity = (int)$_POST['quantity'];
  $price = str_replace(',', '', $price);
  $total = (int)$quantity * intval($price);
  $sql = "INSERT INTO cart( productID, userID, quantity,price,total) 
  VALUES ('$id','" . $_SESSION['id'] . "', '$quantity','$price','$total')";
  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>toastr.success('Successfully Added to cart')</script>";
   
  } else {
    echo "<script type='text/javascript'>toastr.error('It seems there is an error adding to cart! Please try again later')</script>";
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
}

?>
<script>
  function reloadDIV () {document.getElementById("nav").innerHTML.reload}

  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
  
</script>

