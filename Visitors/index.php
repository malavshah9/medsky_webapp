<!DOCTYPE html>
<html lang="en-US">
  <head>
  <?php
  session_start();
  include '../Shared/link.php';
  ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

</style>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>  
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON 
  	<a target="_blank" class="hide-s" href="../template/prospera-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
-->
<?php

if (empty($_SESSION["id"])) {
  include '../Shared/header.php';
} else {
  include '../Shared/header1.php';
}
?>
    
    <!-- MAIN -->


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner"></div>
    <div class="carousel-item active">
      <img class="d-block w-100" src="../Shared/img/MainImgs/MedicalImg1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Write Online Precription</h5>
        <p>By this Site you can write Precription to any Patient.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Shared/img/MainImgs/MedicalImg2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>View Prescription Online with One Tap</h5>
        <p>Out Android/Ios App for Viewing Precription online</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Shared/img/MainImgs/MedicalImg3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Paperless Process</h5>
        <p>All medical information are online on digital platform.So it becomes easy and paperless in terms of Availability and Accessbility.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>














      <!-- Bottom Footer -->
      <?php
      include '../Shared/indexfooter.php';
      ?>
   </body>
</html>