<?php 
include_once('header.php');
include '../database/connection.php';
$message="";
if(isset($_POST['submit'])){
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
if($password!=$confirm){
    $message="Password did not Match!";
}else{
    $password=md5($password);
    $sql = "INSERT INTO users( userName, userEmail, userPassword,type) 
    VALUES ('$username','$email', '$password',0)";
if ($conn->query($sql) === TRUE) {
    header('location:login.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
}

}





?>
<script>
    <?php include_once('../../src/js/signup.js');?>
</script>
<style>
<?php include_once('../../src/css/login.css');?>

</style>

<section class="header-intro">
    <div class="container mt-4 ">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 d-flex">
                <form action="#" method="post">
                <div class="message text-danger"><?php if ($message != "") {
                                echo $message;
                            } ?></div>
    <h3 align="center" class="mt-4 mb-4">Create Account Now</h3>
    <div class="form-group">
                        <input type="email" class="form-control user" name="email" id="name" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control user" name="username" id="name" placeholder="Username" required="required">
                    </div>
                    
                    <div class="form-group">
                        <input type="password" class="form-control user" name="password" id="pass" placeholder="Password" required="required">
                    </div>
 
                    <div class="form-group">
                        <input type="password" class="form-control user" name="confirm" id="pass" placeholder="Confirm Password" required="required">
                    </div>

                    <div class="d-flex flex-row align-items-center justify-content-between">

                        <button class="btn btn-add btn-primary" name="submit" type="submit">Create Account</button>
                    </div>
                    <br>
                    <span class="small">Already have an Account? </span><a class="small" href="login.php" onMouseOver="this.style.color='#00F'"
   onMouseOut="this.style.color='black'" >Log In Now</a>
                </form>
            </div>
            <div class="col-lg-6 order-lg-1 mt-4">
               <img src="../../src/img/logHeader.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

</body>