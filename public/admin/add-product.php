<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<?php
include '../database/connection.php';
if(isset($_POST['submit'])){
$productName=$_POST['productName'];
$productType=$_POST['productType'];
$productDescription=$_POST['productDescription'];
$productQuantity=$_POST['productQuantity'];
$productPrice=$_POST['productPrice'];
$productCover=$_POST['productCover'];

    $sql = "INSERT INTO product( productName, productDescription, productType,productPrice,productAmount,productCover) 
    VALUES ('$productName','$productDescription', '$productType','$productPrice','$productQuantity', '$productCover')";
if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>toastr.success('Successfully Added Products')</script>";
} else {
    echo "<script type='text/javascript'>toastr.error('It seems there is an error adding the products!')</script>";
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
}

?>

<script>
    $(document).ready(function(){
        $("input").prop('required',true);
    })
</script>
<section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title ml-2">Add Product</h3> 
</div> 
<div class="panel-body">
  
<form action="#" method="post" class="form-horizontal" role="form">

<!-- <div class="form-group">
  <label for="name" class="col-sm-3 control-label">Тип заказа</label>
  <div class="col-sm-9">
    <label class="radio-inline">
    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Внешный заказ
  </label>
  <label class="radio-inline">
    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Внутренный заказ
  </label>
  </div>
</div>  -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Product Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="productName" id="name" placeholder="Name">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Product Type</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="productType" id="name" value="Android Phone" placeholder="Type">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="about" class="col-sm-3 control-label">Description</label>
    <div class="col-sm-9">
      <textarea class="form-control" name="productDescription"></textarea>
    </div>
  </div> <!-- form-group // -->
  <div class="form-row">
    <div class="col">
    <label for="qty" class="col-sm-4 control-label">Quantity</label>
  
    <div class="col-sm-6">
   <input type="text" class="form-control" name="productQuantity" id="qty" placeholder="Amount">
    </div>
 
    </div>
    <div class="col">
    <label for="qty" class="col-sm-4 control-label">Price</label>
   
    <div class="col-sm-6">
   <input type="text" class="form-control" name="productPrice" id="price" placeholder="Dollar">
    </div>
 
   
    </div>
  </div>
  <br>
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Product Cover</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="productCover" id="name" placeholder="Paste URL Here">
    </div>
  </div>

<!--   
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Product Cover</label>
    <div class="col-sm-3">
      <label class="control-label small" for="file_img">File (jpg/png):</label> <input type="file" name="file_img">
    </div>
   -->
 
  <hr>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9 ">
      <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </div>
  </div> <!-- form-group // -->
</form>
  
</div><!-- panel-body // -->
</section><!-- panel// -->
