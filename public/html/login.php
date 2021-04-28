<?php
session_start();
include_once('header.php');

$message = "";
if (count($_POST) > 0) {
    include '../database/connection.php';
    $password=md5($_POST["password"]);
    $result = mysqli_query($conn, "SELECT * FROM users WHERE userName='" . $_POST["userName"] . "' and userPassword = '" . $password . "'");
    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["id"] = $row['userID'];
        $_SESSION["name"] = $row['userName'];
        $_SESSION['status'] = 1;
        $_SESSION['type'] = $row['type'];
    } else {
        $message = "Invalid Username or Password!";
    }
}

if (isset($_SESSION["id"])) {
    if ($_SESSION["type"]==0) {
        header("Location:shop.php?page=1");
    } 
    if ($_SESSION["type"]==1) {
        header("Location:../admin/admin.php");
    }
        
}
?>
<script>
    <?php include_once('../../src/js/signup.js'); ?>
</script>
<style>
    <?php include_once('../../src/css/login.css'); ?>
</style>


<section class="header-intro">
    <div class="container mt-4 ">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 d-flex">
                <form action="#" method="post">
                <div class="message text-danger"><?php if ($message != "") {
                                echo $message;
                            } ?></div>
    <h3 align="center" class="mt-4 mb-4">Enter Login Details</h3>
                    <div class="form-group">
                        <input type="text" class="form-control user" name="userName" id="name" placeholder="Username" required="required">
                    </div>
                  
                    <div class="form-group">
                        <input type="password" class="form-control user" name="password" id="pass" placeholder="Password" required="required">
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between">
                            
                        <button class="btn btn-add btn-primary" type="submit">Log In</button>
                    </div>
                    <br>
                    <span class="small">Dont have an Account? </span><a class="small" href="signup.php" onMouseOver="this.style.color='#00F'"
   onMouseOut="this.style.color='black'" >Create Account Now</a>
                </form>
            </div>
            <div class="col-lg-6 order-lg-1 mt-4">
               <img src="../../src/img/logHeader.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>


</body>