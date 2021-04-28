<?php include_once('public/html/header.php');?>
<?php
if(isset($_SESSION['id'])){
  header('location:public/html/shop.php?page=1');
}
?>
<?php include "public/html/nav-login.php";
?>
<style>
<?php include_once('src/css/index-nav.css');?>
</style>


  <section>
    <div class="container mt-4 ">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="(p-5)">
            <img class="img-fluid img-header"
              src="src/img/intro_head.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1 mt-4">
          <div class="header-display">
            <h2 class="display-4 title-header">For those about to learn...</h2>
            <p class="lead">Mobile Phone is often also called “cellular phone”.</p>
            <button class="btn signinBtn" onclick="window.location.href='public/html/signup.php'">Get Started</button>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- <br><br><br><br><br> -->
  <br>
  <section2 class=" ">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#DDDBFB" fill-opacity="1"
        d="M0,288L80,256C160,224,320,160,480,149.3C640,139,800,181,960,208C1120,235,1280,245,1360,250.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
      </path>
    </svg>
    <div class="container-fluid intro2 text-dark" style="background-color: #DDDBFB;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="">
              <img class="img-fluid img-header" src="src/img/intro_second.png" alt="Intro Image">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="header-display">
              <h2 class="display-4 title-header text-dark">For those about to rock</h2>
              <p class="lead text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid,
                mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis
                recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#DDDBFB" fill-opacity="1"
        d="M0,96L120,85.3C240,75,480,53,720,64C960,75,1200,117,1320,138.7L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
      </path>
    </svg>
  </section2>



  <br>
  <!-- <footer> -->
  <br><br>
  <!-- <div class="footer text-dark" style="background-color: #DDDBFB;">PhoneCraze | All Rights Reserved ©2021</div> -->
  <!-- </footer> -->
  <div class="made-with-love">
    Made with
    <i>♥</i> by
    <a target="_blank" href="https://codepen.io/Junzlay">PN Group 4</a>
</div>
</body>