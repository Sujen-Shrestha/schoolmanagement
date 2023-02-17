<?php

include '../connection.php';
if($con)
{

    $std_idd = $_POST['std_id'];
    $attend_v = $_POST['assign_id'];
    $marks = $_POST['mark'];
    $result = mysqli_query($con , "select *from module_assignment_grade where assignment_id ='$attend_v' and std_id='$std_idd'");
      $find = 0;                                  
    if($row = mysqli_fetch_array($result))
    {
        $query = "UPDATE module_assignment_grade SET grade='$marks'  where std_id='$std_idd' and  assignment_id ='$attend_v' ";
        mysqli_query( $con , $query );
         
    }
    else
    {
        $query = "INSERT INTO module_assignment_grade  ( assignment_id,grade , std_id) VALUES ('$attend_v' , '$marks' , '$std_idd')";
        mysqli_query( $con , $query );
    }
  
}
else
{
  
  echo " Database not connected ";
}
  

?>