<?php
include '../Shared/Assets/conditionforlogin.php';
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
  <?php
   include '../Shared/link.php';
    ?>
  </head>  
  <?php
if(!(isset($_POST["sub1"])))
{
   header('location:writepresc1.php');
}

  ?>
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
    
    <!-- MAIN -->
    <main role="main">
    <!--<header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Confirm Prescription</h1>
        </header>-->
        <text align="center"><h1>Confirm Prescription</h1></text>
        <table>
        <form class="customform" name="writepresc2" action="writepresc3.php" method="post">
        <div class="line">
            <?php
                    $notes="-";
                    $j=0;
                    $mcnt=0;
                    for($cnt=1;$cnt<=5;$cnt++)
                    {
                      $mcnt++;
                      $mname="med".$cnt;
                      $iname="instr".$cnt;
                      $morname="mor".$cnt;
                      $nonname="non".$cnt;
                      $nigname="nig".$cnt;
                      $day="day".$cnt;
                    if($_POST["$mname"]==null)
                    {
                      $mcnt--;
                      break;
                    }

                    echo '<input type="hidden" name="mor'.$cnt.'" value="'.$_POST["$morname"].'">';
                    
                    echo '<input type="hidden" name="non'.$cnt.'" value="'.$_POST["$nonname"].'">';

                    echo '<input type="hidden" name="nig'.$cnt.'" value="'.$_POST["$nigname"].'">';

                    echo '<input type="hidden" name="ins'.$cnt.'" value="'.$_POST["$iname"].'">';

                    echo '<input type="hidden" name="day'.$cnt.'" value="'.$_POST["$day"].'">';

                    echo '<input type="hidden" name="med'.$cnt.'" value="'.$_POST["$mname"].'">';
                    echo '<div class="margin">'.
                      '<div class="s-12 m-12 l-6">'.
                      '<tr><td>Medicine'.$cnt.':</td><td>'.$_POST["$mname"].'</td></tr>';
                     echo '<tr rowspan="3"><td>Timings</td><td>Morning</td><td>'.$_POST["$morname"].'</td></tr>';
                     echo '<tr><td></td><td>Afternoon</td><td>'.$_POST["$nonname"].'</td></tr>';
                     echo '<tr><td></td><td>Night</td><td>'.$_POST["$nigname"].'</td></tr>';
                     echo '<tr><td>Days:</td><td>'.$_POST["$day"].'</td></tr>';
                     echo '<tr><td>Instructions</td><td>'.$_POST["$iname"].'</td></tr>';
                     
                      
                     echo '</div>'.
                    '</div>';
                  }
            ?>
                  <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <tr><td><label>Notes</label></td><td>
                          <strong>
                        <?php
                               echo '<input type="hidden" name="mcnt" value="'.$mcnt.'">';
                               
                       /* if($_POST["notes"]==null)  
                        {
                          echo '<input type="hidden" name="note" value="No Notes">';
                          
                          echo '<label>No Notes</label>';
                        }
                        else
                        {
                          echo '<input type="hidden" name="note" value="'.$_POST["notes"].'">';
                          
                          echo '<label>'.$_POST["notes"].'</label>';
                        }*/
                        ?>
                      </strong>
                      </td></tr>
                      </div>
                    </div>

                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <tr><td></td><td colspan="2"><button name="sub1" class="submit-form button background-primary border-radius text-white" type="submit">Submit Precription</button></td></tr>
                      </div>
                    </div>

</div>
                </form>
        </table>
          </main>
    
     <!-- FOOTER -->
     <?php
            include '../Shared/indexfooter.php';
      ?>
   </body>
</html>