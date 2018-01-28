<!DOCTYPE html>
<html lang="en-US">
  <head>
  <?php
  session_start();
    include '../Shared/link.php';
    ?>
  </head>  
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON 
  	<a target="_blank" class="hide-s" href="../template/prospera-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>

<?php

  if(empty($_SESSION["id"]))
  {
    include '../Shared/header.php';
  }
  else
  {
    include '../Shared/header1.php';
  }
?>
    
    <!-- MAIN -->
      <!-- Bottom Footer -->
      <?php
            include '../Shared/indexfooter.php';
      ?>
   </body>
</html>