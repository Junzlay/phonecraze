<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../src/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://css.gg/arrows-exchange-v.css' rel='stylesheet'>
<script src="../../src/js/admin.js"></script>
<link href='https://css.gg/log-off.css' rel='stylesheet'>
<link href='https://css.gg/menu-motion.css' rel='stylesheet'>
<link rel="stylesheet" href="../../src/css/admin-page.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
          <div class="sidebar-header">
            <h3>Admin Panel</h3>
          </div>
      

          <div class="sidecontent">
          <ul class="list-unstyled components">
            <p style="cursor:pointer;">Dashboard</p>
            <li class="active.">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-book m-2"></i>Products<i class="gg-arrows-exchange-v mt-2"></i></a>
              
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li  class=".sub-active view-all-products"><a href="#">View All Products</a></li>
                <li  class="add-product" ><a>Add Product</a></li>
                <li><a href="#">Categories</a></li>
              </ul>
            </li>
            <li>
              <!-- <a href="#">About</a> -->
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-users m-2"></i>Users<i class="gg-arrows-exchange-v mt-2"></i></a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href="#">View All Users</a></li>
                <li><a href="#">Add User</a></li>
                <li><a href="#">Page 3</a></li>
              </ul>
            </li>
            <li>
                <div class="dropdown-divider mt-4"></div>
                <p class="mt-2">Actions</p>
              
              <!-- <a href="#">Borrowed Book</a> -->
               <!-- <a href="#">About</a> -->
               <a href="#borrowed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-users m-2"></i>Orders<i class="gg-arrows-exchange-v mt-2"></i></a>
               <ul class="collapse list-unstyled" id="borrowed">
                 <li><a href="#"> <i class="fa fa-fighter-jet m-2"></i>Issued</a></li>
                 <li><a href="#"> <i class="fa fa-thumbs-up m-2"></i>Returned</a></li>
                 <li><a href="#"> <i class="fa fa-thumbs-down m-2"></i>Not Returned</a></li>
                 <li><a href="#"> <i class="fa fa-exclamation-triangle m-2"></i>Pending</a></li>
                 <!-- <li><a href="#">Page 3</a></li> -->
               </ul>
            </li>
            <li>
              <!-- <a href="#">Contact</a> -->
            </li>
          </ul>
         
          <ul class="list-unstyled CTAs">
           <li>  <a class="article">Login as <?php echo $_SESSION['name'];?></a></li>
          </ul>
        </div>
        </nav>
      
        <!-- Page Content Holder -->
        <div id="content" class="w-100">
      
        
          <nav class="navbar navbar-default " >
            <div class="container-fluid">
      
              <div class="navbar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-head navbar-btn">
                    <i class="gg-menu-motion "></i>
                                      <span>Phone Craze</span>
                                  </button>
              </div>
      
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Page</a></li>
                  <li><a href="#">Page</a></li>
                  <li><a href="#">Page</a></li>
                  <li><a href="#">Page</a></li>
                </ul>
              </div>

              <div class="dropdown">
                <button class="btn btn- dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://thumbs.dreamstime.com/b/vector-icon-user-avatar-web-site-mobile-app-man-face-flat-style-social-network-profile-45836554.jpg" class="avatar rounded-circle" style="width: 35px;" alt="Avatar"> <?php echo $_SESSION['name'];?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="z-index: 1;"> 
                    <a href="#" class="dropdown-item"><i class="fa fa-user-o m-2"></i> Profile</a></a>
					<!-- <a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></a>
					<a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></a>
					<div class="dropdown-divider"></div> -->
					<a href="../database/logout.php" class="dropdown-item"><i class="gg-log-off m-2"></i></i> Logout</a></a>
                </div>
              </div>


        
            
            </div>
          </nav>



<div id="dashboard" class="w-100">
  <div class="container">
    <div class="row">
    <div class="col-md-4">
      <div class="card-counter primary">
        <i class="fa fa-code-fork"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Categories</span>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card-counter danger">
        <i class="fa fa-book"></i>
        <span class="count-numbers">599</span>
        <span class="count-name">Books</span>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card-counter success">
        <i class="fa fa-users"></i>
        <span class="count-numbers">6875</span>
        <span class="count-name">Students</span>
      </div>
    </div>

    <!-- <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers">35</span>
        <span class="count-name">Users</span>
      </div>
    </div> -->
  </div>
</div>

</div>





          <div class="container-fluid " id="add-product" style="display: none;transition: 0.5s;">
          <?php include "add-product.php";?>
       
        </div>







        </div>
      
    </div>
   
</body>

</html>