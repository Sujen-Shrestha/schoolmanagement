<?php


include '../connection.php';
if($con)
{

  if (isset($_POST['submit-btn']) || isset($_POST['submit-add-btn']))
  {
      $code = $_POST['code'];
      $title = $_POST['title'];
      $leader = $_POST['leader'];
      $duration = $_POST['duration'];

      
      $query = "INSERT INTO courses ( course_title, staff_id , course_code , course_duration) VALUES ('$title' , '$leader' , '$code' , '$duration')";
      if ( mysqli_query( $con , $query ))
      {

        if (isset($_POST['submit-btn']))
        {
          $query = "UPDATE last_button SET last_button_id='adm_course_btn' order by id desc limit 1";
          mysqli_query( $con , $query );
        }
        else
        {
          $query = "UPDATE last_button SET last_button_id='adm_add_course_mod_btn' order by id desc limit 1";
          mysqli_query( $con , $query );
        }
        
        header('Location:../admin_panel.php'); 
      }
      else
      {
          echo " Data entered fail";
      }
  }
}
else
{
  
  echo " Database not connected ";
}
  

?>