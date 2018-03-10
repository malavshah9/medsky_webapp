<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include '../Shared/styleofdoclog.php';
	if(!(empty($_SESSION["id"])))
	{
		header('location:index.php');
	}
?>
	<?php
      session_start();
	if(isset($_POST["sub"]))
	{
	$id=$_POST["eid"];
	$pass=$_POST["pass"];
	require '../Shared/classes/classdoc.php';
$cnn=new doc_all;
$result=$cnn->loginselect($id,$pass);
    
    
if($result->num_rows===1)
{
	
	$row=$result->fetch_assoc();
	
	/*	$_SESSION["eid"]=$id;*/
		
	$id=$id;
	$name=$row["doc_name"];
	$token=$row["doc_token"];
	$flag=1;
	if($row["doc_verify"]==$flag)
	{
	//	echo $row["user_verify"];
	$_SESSION["id"]=$id;
	$_SESSION["name"]=$row["doc_name"];
		
	header('location:../visitors/index.php');
	}
	else
	{
		
	//	header('location:notverified.php');	
		echo "You had not verified your account.";
		
	echo "<h1>We had sent you verification mail.Kindly check your email and verify your account to proceed further.</h1>";
	
echo '<h1><p class="reset"><a tabindex="4" href="../doctor_mst/verifyrepeat.php?token='.$token.'&eid='.$id.'&name='.$name.'" title="Click here to resend the email.">Resend Email.</a></p></h1>';

		
	}
} 
	else
	{
		
		
  echo '<script language="javascript">';
  echo 'alery(Enter Appropriate Password)'; 
  echo '</script>';
  
echo '<div class="btn btn-dark btn-lg btn-block">Enter Appropriate Username and PassWord </div>';

	}		
}	
	else
	{
		//header('location:../visitor/index.php');
		
	}
    ?>
	  <script type="text/javascript">
	   function validate_form() {
	    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.sign.eid.value)) {
                alert("You have entered an invalid email address!")
                return (false)
            }
			var p=document.getElementById("passw").value;
			if(p.length<6)
			{
				alert("Password must be at least 6 characters long.");
				return (false);
			}
		
		
			var mnum=documnet.sign.mno.value;
			
			//var na = /^[a-zA-Z]+$/;
			if((mnum.length < 1) || (mnum.length > 15))
			{
				alert(" Your Mobile Number must be 1 to 15 Integers.");
				return (false);
			}	
			var right= /^[A-Za-z]+$/;
	var a=document.getElementById("una").value;
	if(!(a.match(right)))
	{
		alert("Username must have alphabet characters only");
		return (false);
	}
	
	   }
	   function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31 &&
                (charCode < 48 || charCode > 57)) {
                alert("Enter Number");
                return false;
            }
            return true;
        }
		/*function passvalid()
		{
			var p=document.getElementById("passw").value;
			if(p.length<6)
			{
				alert("Password must be at least 6 characters long.");
			}
		

		}*/
		/*var na=documnet.sign.name.value;
		function allLetter(na)
	{
	 var letters = /^[A-Za-z]+$/;
    if(!(na.value.match(letters.value)))
    {
		alert('Username must have alphabet characters only');
        //return true;
    }
}*/
/*function uname()
{
	var right= /^[A-Za-z]+$/;
	var a=document.getElementById("una").value;
	if(!(a.match(right)))
	{
		alert("Username must have alphabet characters only");
		return (false);
	}
	//else{
	//	alert("Username must have alphabet characters only");
	//}
}*/
/*function f(){
var el=document.sign.name.value;
var re=/^[a-z]+$/;
if(!re.test(el.value))
 {
	alert("Please enter char only");
	//errors[errors.length] = "You valid Name .";
 }
}*/

		/*var inputtext=document.name.value;
function inputAlphabet(inputtext, alertMsg){
//var alphaExp = /^[a-zA-Z]+$/;
var ck_name = /^[A-Za-z]+$/;
var name = sign.name.value;
if (!ck_name.test(name)) {
  errors[errors.length] = "You valid Name .";
 }
if(inputtext.value.match(alphaExp)){
return true;
}else{
document.getElementById('p1').innerText = alertMsg;
inputtext.focus();
return false;
}
}*/

</script>
</head>

    <body>
	
	
    <?php
   
  
 /*   $conn=new product_all;
    $result=$conn->select_all();*/
	if(isset($_POST["btn"]))
{
	$did=$_POST["eid"];
	$pas=$_POST["pass"];
	$lc=$_POST["lno"];
	$na=$_POST["name"];
	$spec=" ";
	$deg=" ";
	$img=" ";
	$add=" ";
	$gend=$_POST["gen"];
	$mob=$_POST["mno"];
	$r=md5(rand());
	$token=substr($r,0,10);
	/*if($gend=='chacked')
	{
		echo 'male';
	}   
	else
	{
		echo 'female';
	}*/

require '../Shared/Classes/classdoc.php';

$conn=new doc_all;
$result=$conn->insert($did,$pas,$lc,$na,$spec,$deg,$img,$add,$gend,$mob,$token);
if($result===true)
{
	echo "<h1>We had sent you verification mail.Kindly check your email and verify your account to proceed further.</h1>";
	$conn->verify($did,$na,$token);
echo '<h1><p class="reset"><a tabindex="4" href="../doctor_mst/verifyrepeat.php?token='.$token.'&eid='.$did.'&name='.$na.'" title="Click here to resend the email.">Resend Email.</a></p></h1>';
	
}
else
{
    echo "Entered User id Already taken";
}
}
?>

	<form action="login.php" method="post"name="doc" >
        <div class="top-content">
        	
           <!-- <div class="inner-bg">-->
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Doctor Login &amp; Signup Forms</h1>
                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        		
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" enctype="multipart/form-data" action="login.php" method="post" class="login-form">
				                    	<div class="form-group">
											
				                    		<label class="sr-only" for="form-username">Email id</label>
				                        	<input type="text" name="eid" placeholder="Email id..." class="form-username form-control" id="form-username"required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password"required>
				                        </div>
										<button type="submit" name="sub">Sign in!!</button> </br>  
										<span class="pull-right"><a href="../doctor_mst/forgot.php">Forgot Password ??</a></span>
				                    </form>
			                    </div>
		                    </div>
		                
		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-2" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-2" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-2" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>
	                        
                        </div>
                        </form>
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-md-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        		
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" onsubmit="return validate_form();"action="" method="post" class="registration-form"name="sign">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-email">Email id</label>
				                        	<input type="text" name="eid" placeholder="Email id..." class="form-email form-control"required >
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="pass" placeholder="Password..." pattern="[A-Za-z0-9]{6,10}" title="Password must be at least 6 to 10 characters long." class="form-passwd form-control"id="passw" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-doclic-no">Licence No</label>
				                        	<input type="text" name="lno" placeholder="Licence no..." class="form-lno form-control" id="form-email">
				                        </div>
	
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-name">Name</label>
				                        	<input type="text" name="name" placeholder="Name..."id="una" pattern="[A-Za-z]" class="form-control">
				                        </div>
										<div class="form-group">
										<center>
				                        	<label class="sr-only" for="form-name">Gender</label>
				                        	<input type="radio" name="gen"  value="male" id="form-gen">Male
											<input type="radio" name="gen" value="female"  class="form-name" id="form-gen">Female
										</center>
				                        </div>
										
										<div class="form-group">
				                        	<label class="sr-only" for="form-mobile-no">Mobile No</label>
				                        	<input type="text" name="mno" onkeypress="return isNumberKey(event)"placeholder="Mobile no..." class="form-mno form-control" id="form-email">
				                        </div>
									
	
									 <button type="submit"name="btn" >Sign me up!</button>
									 
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

  <?php
	include '../Shared/footerofdoclog.php';
 ?> <!-- Footer -->
  
        <!-- Javascript -->
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>