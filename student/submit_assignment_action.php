<?php

include '../connection.php';
if($con)
{

    $std_idd = $_POST['std_id'];
    $attend_v = $_POST['assign_id'];
 
    $query = "UPDATE module_assignment_grade SET submitted='Yes'  where std_id='$std_idd' and  assignment_id ='$attend_v' ";
    mysqli_query( $con , $query );

}
else
{
  
  echo " Database not connected ";
}
  

?>