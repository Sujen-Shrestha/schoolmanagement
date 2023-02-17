<?php


include '../connection.php';
if($con)
{

  if (isset($_POST['submit-btn']) || isset($_POST['submit-add-btn']))
  {
      $title = $_POST['title'];
      $message = $_POST['message'];
      $time = $_POST['time'];
      $for = $_POST['for'];

      $query = "INSERT INTO announcements ( title, description , date , privilege) VALUES ('$title' , '$message' , '$time' , '$for')";
      if ( mysqli_query( $con , $query ))
      {

       
          $query = "UPDATE last_button SET last_button_id='admin_announc_btn' order by id desc limit 1";
          mysqli_query( $con , $query );
        
        
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