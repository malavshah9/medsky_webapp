<?php
session_start();
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
            echo '<div class="btn btn-dark btn-lg btn-block">PassWord is Updated </div>';
            header('location:../visitors/login.php');
        }
        else{
            header('location:../visitors/login.php');
            echo '<div class="btn btn-dark btn-lg btn-block">PassWord is incorrect </div>';
            //echo "Not done";
           // echo $result;
        }
        }
        else{
            header('location:../visitors/login.php');
            echo '<div class="btn btn-dark btn-lg btn-block">PassWord are not same.. </div>';
           // echo "Passwords are not same";
        }
    }

?>