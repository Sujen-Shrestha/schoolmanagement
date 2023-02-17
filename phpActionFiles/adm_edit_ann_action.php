<?php

session_start();

include '../connection.php';
if($con)
{

  if ( isset($_POST['submit-btn']))
  {
    $title = $_POST['title'];
    $description = $_POST['message'];
   
    $id =  $_POST['mod_id']; 


      $query = "UPDATE announcements SET title='$title' , description='$description'  WHERE announcement_id='$id'";
      mysqli_query( $con , $query );
      
        if (isset($_POST['submit-btn']))
        {
          $query = "UPDATE last_button SET last_button_id='admin_announc_btn' order by id desc limit 1";
          mysqli_query( $con , $query );
        }
        
        header('Location:../admin_panel.php'); 
      
      
  }
}
else
{
  
  echo " Database not connected ";
}
  

?>