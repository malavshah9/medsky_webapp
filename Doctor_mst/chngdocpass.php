<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
	

      <meta charset="utf-10">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      

         
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../shared/assets1/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../shared/assets1/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../shared/assets1/css/form-elements.css">
        <link rel="stylesheet" href="../shared/assets1/css/style.css">

            
    
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
<?php
//session_start();
$_email=$_SESSION['id'];
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $_newpass=$_POST["np"];
        $_oldpass=$_POST["op"];
        $_repepass=$_POST["cp"];
        if($_newpass==$_repepass){
            require '../Shared/Classes/classdoc.php';
        $obj=new doc_all();
        $result=$obj->chngpass($_email,$_oldpass,$_newpass);
        //echo "update user_tbl set user_pass='".$_newpass."' where email_id='".$_email."' ";
        if($result===true){
            //$obj=new doc_all();
            //$conn->verify($did,$na,$token);
            echo '<div class="btn btn-dark btn-lg btn-block">Password is Successfully Updated </div>';
           // header('location:../visitors/login.php');
        }
        else{
           
            echo '<div class="btn btn-dark btn-lg btn-block">Password is incorrect </div>';
           // header('location:../visitors/login.php');
            //echo "Not done";
           // echo $result;
        }
        }
        else{
            //header('location:../visitors/login.php');
            echo '<div class="btn btn-dark btn-lg btn-block">Password are not same.. </div>';
           // echo "Passwords are not same";
        }
    }

?>
    </head>

    <body>
	  
  <body>
   
    
<br><br>
<br>
<div class="col-sm-4"></div>
 
<div class="col-md-5">
 
 <div class="form-box">
     <div class="form-top">
         <div class="form-top-left">
             <h3>Change Password Form</h3>
             <p>Click on button for Change your Password....</p>
         </div>
         <div class="form-top-right">
         
         </div>
     </div>
     <div class="form-bottom">
         <form role="form" action="chngdocpass.php" method="post" class="registration-form">
             <div class="form-group">
                 <label class="sr-only" for="form-email">Old Password</label>
                 <input type="password" name="op"  value="" placeholder="Enter Old Password..."class="form-email form-control"required>
             </div>
             <div class="form-group">
                 <label class="sr-only" for="form-email">new Password</label>
                 <input type="password" name="np"  value="" placeholder="Enter New Password..."class="form-email form-control"required>
             </div>
             <div class="form-group">
                 <label class="sr-only" for="form-email">Confirm Password</label>
                 <input type="password" name="cp"  value="" placeholder="Confirm Your Password..."class="form-email form-control"required>
             </div>
           
          <div class="control-group">
									<button type="submit"name="num1">Change Password</button>
                                    </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      &nbsp;&nbsp;&nbsp;
      
      <a href="../visitors/login.php"align="Right"><u>Log In..??</u></a>
            

