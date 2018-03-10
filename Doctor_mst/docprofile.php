<?php
     session_start();
?>
<!DOCTYPE html>

<html lang="en-US">
  <head>
  <?php
  //  include '../Shared/Assets/links.php';
  include '../Shared/link.php';
    ?>

    <link rel="stylesheet" href="style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="choosen.js"></script>


  </head>  
  
  <body class="size-1140">
  	<!-- HEADER -->
    
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


    <head>
	

      <meta charset="utf-10">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      

         
        
       <!-- <link rel="stylesheet" href="../shared/assets1/bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../shared/assets1/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../shared/assets1/css/form-elements.css">
        <link rel="stylesheet" href="../shared/assets1/css/style.css">-->

        
  


        
    
  <!--  <link rel="stylesheet" href="../shared/css/components.css">
    <link rel="stylesheet" href="../shared/css/icons.css">
    <link rel="stylesheet" href="../shared/css/responsee.css">
    <link rel="stylesheet" href="../shared/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../shared/owl-carousel/owl.theme.css">
     
    <link rel="stylesheet" href="../shared/css/template-style.css">
    
    <script type="text/javascript" src="../shared/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../shared/js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="../shared/js/validation.js"></script> 
  
    <script type="text/javascript" src="../shared/js/responsee.js"></script>
    <script type="text/javascript" src="../shared/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../shared/js/template-scripts.js"></script>   -->


            
    
<style>
body
{
    background-color:#002633 ;
}
button {
    background-color: #49BF4C;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.cancelbtn {
       width: 100%;
       background-color: #f44336;
    }

</style>

    </head>
    <body>
   




    <?php
  if(empty($_SESSION["id"]))
	{
//header('location:../Visitors/usrloginandregister.php');
$name="Please Sign In";
$id="0";
	}
    else
    {

 
$id=$_SESSION["id"];
    }
    
    require '../Shared/Classes/classdoc.php';
    //require '../Shared/Classes/classspeci.php';
    require '../Shared/Classes/classdeg.php';
    ?>
    <?php
      include '../Shared/link.php';
     // require '../shared/header.php';
    
       
    ?>
    

	<?php

$id=$_SESSION["id"];
$conn=new doc_all;
$result=$conn->selectbyid($id);
$row=$result->fetch_assoc();
$lno=$row["doc_lic_no"];
$name=$row["doc_name"];
$mob=$row["doc_mno"];
$gen=$row["doc_gen"];

?>
<?php
    if(isset($_POST["btn1"]))
    {
        echo '<form action="a.php"method="post"> </form>';
    }
?>
 
 <div class="col-sm-4"></div>
 
<div class="col-md-5">
 
 <div class="form-box">
     <div class="form-top">
         <div class="form-top-left">
             <font size="5"color="white">Profile...</font>
             <p></p>
         </div>
         <div class="form-top-right">
         
         </div>
     </div>
     <div class="form-bottom" align="left">
         <form role="form" action="adddetails.php" method="post" class="registration-form">
         <table height="60%"width="100%">
             <div>
                <tr>
                <td><font size=""><b> <label class="sr-only" for="form-email">Name :- </label></td>
                 <td><input type="text" name="nm" size="100"cols="5" value="<?php echo $name; ?>"readonly>&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;</td>
                 </tr>
             </div>
            <div class="form-group">
                <tr>            
                 <td><b><label class="sr-only" for="form-password">Email id :-</label></td>
                 <td><input type="text" name="id"size="100" value="<?php echo $id; ?>" class="form-passwd form-control" readonly></td>
                 </tr>
             </div>
             <div class="form-group">
                <tr>
                 <td><b><label class="sr-only" for="form-doclic-no">Licence No :-</label></td>
                 <td><input type="text" name="lno" size="100" value="<?php echo $lno; ?>"placeholder="Licence no..." class="form-lno form-control" id="form-email"readonly></td>
                 </tr>
             </div>

             <div class="form-group">
             <tr>
                 <td><b><label class="sr-only" for="form-name">Mobile No :-</label></td>
                 <td><input type="text" name="mno"size="100" value="<?php echo $mob; ?>" placeholder="Name..." class="form-name form-control" id="form-name"readonly></td>
                 </tr>
             </div>
             <div class="form-group">
             <tr>
             <td><b><label class="sr-only" for="form-name">Gender :-</label></td>
             <td><input type="text" value="<?php echo $gen; ?>"size="100" placeholder="" id="" name="gen"class="form-control" class="input-text " readonly></center></td>
             </tr>
        
             </div>
           
             <div class="form-group">
             <tr>
             <td><b><label class="sr-only" for="form-name">Specialist :-</label></td>
             
            <?php
               require '../Shared/Classes/classspeci.php';
               $cn1=new spec_all();
               $res=$cn1->select_all();
           
            echo '<td>';
            echo '<select class="chosen" name="spec" style="width:500px;">';

                
             
             while($rw=$res->fetch_assoc())
             {
                            echo '<option value="'.$rw["pk_spec_id"].'">'.$rw["spec_name"].'</option>';
             }
             echo ' </select></td>'
                ?>
           

             
             <!--<input type="text" value=""size="100" placeholder="Specialist..." id="" name="spec"class="form-control" class="input-text ">-->
             </td>
            </tr>
             </div>
            
             <div class="form-group">
            <tr>
             <td><b><label class="sr-only" for="form-name">Degree :-</label></td>
             <td><input type="text" value=""size="100" placeholder="Degree..." id="" name="deg"class="form-control" class="input-text "></td>
             </tr>
        
             </div>
           <!--  <div class="form-group">
             <label class="sr-only" for="form-name">Profile Pic</label>
             <input type="file" value="" placeholder="profile picture.." id="" name="pc"class="form-control" class="input-text ">
        
             </div>-->
             <div class="form-group">
             <tr>
            <td><b><label class="sr-only" for="form-name">Address :-</label></td>
            <td><textarea rows="5" cols="50"size="100"placeholder="Address..."name="add"></textarea></td>
            </tr>
        
             </div>
             <tr>
             <td>
           <center><font size="12"><button type="submit"name="btn">Add Details</button></center>
          <td><font size="3"color="#49BF4C"><a href="chngdocpass.php">Change Password??</a></td>
             </tr>
             </table>
            </form>
           <!-- <form role="form" method="post" action="a.php">
            <table>
            <tr>
            <td>
            <center> <font size="12"><button type="submit"name="btn"size="20">Change Password</button></center></td>
            </td>
            </tr>
            </table>
            </form>-->
         
     </div>
 </div>
 
</div>
</div>

</div>
</div>
<?php
  include '../shared/indexfooter.php';
    ?>

</div>

<script type="text/javascript">
$(".chosen").chosen();
</script>
</body>

  </html>
   
