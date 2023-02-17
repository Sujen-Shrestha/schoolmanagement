<?php


include '../connection.php';

if($con)
{

  if (isset($_POST['submit-btn']))
  {
      $id = $_POST['get_id'];
    
      $query = "UPDATE modules SET staff_id='$id' order by mod_id desc limit 1";
      
      if ( mysqli_query( $con , $query ))
      {
            echo " Data entered successfully";
            $query = "UPDATE last_button SET last_button_id='admin_module_btn' order by id desc limit 1";
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