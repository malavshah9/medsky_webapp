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
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner"></div>
  <div class="carousel-item active">
      <img class="d-block w-100"height="60%" src="../Shared/img/medi.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Write Online Precription</h5>
        <p>By this Site you can write Precription to any Patient.</p>
      </div>
    </div>
    
    <div class="carousel-item">
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
<table>
<tr>
<td align="center">
<video data-keepplaying="controls loop" id="consultAnimation" class="" width="320" height="480" autoplay="" controls loop>
<source id="consultAnimationSource" src="../Shared/img/video.webm" type="video/webm"></td>

<td align="left">
<div class="home-details-section-title">
                                        <h1 class="u-d-inline">Skip the waiting room.</h2>
                                        <h1 class="u-d-inline u-t-bold">Chat With Us.</h2>
                                    </div>

<div class="home-details-section-title">
                                            <i class="icon-ic_done_open_system"></i>
                                            <span class="u-t-bold">3M+</span>
                                            <span>patients helped</span>
                                        </div>
</td>                                    
</tr>

<tr>
<td rowspan="9">
<h1>All your medical records</h1>
<h2><b>In one secure app.</h2>
<p size="5">
 <!--<font size="3">&#8680;-->Prescription Become Paperless.Your data will be secure.View all past prescription on one click.All Process is Online.<br/>
 Its main aim is to reduce paper prescriptions, and the risk of error associated with written prescriptions.<br/>
 The main risk of a handwritten prescription is that it may be illegibly written, <br/>which might lead to being improperly interpreted by the pharmacist, ultimately proving fatal to the patient.<br/>Also, a paper prescription runs the risk of being misplaced or be damaged.
<br/>
E-prescriptions do not have the risk of being misinterpreted or damaged. Hence, medical records can be maintained accurately.
</p>
</td>
<td>
<div class="home-consult-section home-illustration">
<img id="consultDefaultImage" src="../shared/img/phr.svg" class="hide"></br>
</div>
</td>

                               
</table>

      <!-- Bottom Footer -->
      <?php
      include '../Shared/indexfooter.php';
      ?>
   </body>
</html>