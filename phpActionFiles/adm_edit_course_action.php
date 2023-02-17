<?php
session_start();


include '../connection.php';
if($con)
{

  if (isset($_POST['submit-btn']) || isset($_POST['submit-add-btn']))
  {
      $course_code = $_POST['course_code'];
      $course_title = $_POST['course_title'];
      $course_duration = $_POST['course_duration'];
      $id =  $_POST['edit_course_id']; 
      $leader_id =  $_POST['leader'];
     
      $query = "UPDATE courses SET  course_title='$course_title' ,  staff_id='$leader_id' ,
      course_code='$course_code' ,  course_duration='$course_duration'  WHERE course_id='$id'";
       mysqli_query( $con , $query );
    
       
         if (isset($_POST['submit-btn']))
         {
           $query = "UPDATE last_button SET last_button_id='adm_course_btn' order by id desc limit 1";
           mysqli_query( $con , $query );
         }
         else
        {
          $query = "UPDATE last_button SET last_button_id='adm_edit_course_mod_btn' order by id desc limit 1";
          mysqli_query( $con , $query );
          $_SESSION["edit_course_id"] = $id;
        }
        
         header('Location:../admin_panel.php'); 
       
       
  }
}
else
{
  
  echo " Database not connected ";
}
  

?>