<?php


include '../connection.php';

session_start();

$id = $_SESSION['edit_mod_id'];
$id1 = $_POST['get_id'];

if($con)
{

  if (isset($_POST['submit-btn']))
  {
      $query = "UPDATE modules SET staff_id='$id1' where mod_id = '$id'";
      
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