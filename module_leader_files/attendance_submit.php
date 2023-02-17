<?php

include '../connection.php';
if($con)
{
    session_start();
    $id = $_SESSION['take_attendc_new_id'];
    $mod_id = $_SESSION['module_id'];
    $std_idd = $_POST['std_idd'];
    $attend_v = $_POST['attend_v'];
    $result = mysqli_query($con , "select *from attendance_data where attendance_id ='$id'");
      $find = 0;                                  
    while($row = mysqli_fetch_array($result))
    {
        if($row['student_id'] == $std_idd){
            $find++;

        }
         
    }

    if ($find == 0)
    {
        $query = "INSERT INTO attendance_data  ( student_id,status , attendance_id ) VALUES ('$std_idd' , '$attend_v' , '$id')";
        mysqli_query( $con , $query );
    }
    else
    {
        $query = "UPDATE attendance_data SET status='$attend_v'  where student_id='$std_idd'";
        mysqli_query( $con , $query );
    }
   

    $query = "UPDATE attendance SET  student_added = 'yes'  , module_code = '$mod_id' where attendance_id = '$id'";
    mysqli_query( $con , $query );
    
      
        
    
  
}
else
{
  
  echo " Database not connected ";
}
  

?>