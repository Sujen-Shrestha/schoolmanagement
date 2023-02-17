<?php


include '../connection.php';
if($con)
{

  if (isset($_POST['submit-btn']) || isset($_POST['submit-add-btn']))
  {
      $code = $_POST['code'];
      $title = $_POST['title'];
      $point = $_POST['c_point'];
      $level = $_POST['level'];
      $id =  $_POST['edit_staff_id']; 
      
      $query = "UPDATE modules SET module_title='$title' , credit_points='$point'  WHERE mod_id='$id'";
      if ( mysqli_query( $con , $query ))
      {

        if (isset($_POST['submit-btn']))
        {
          $query = "UPDATE last_button SET last_button_id='admin_module_btn' order by id desc limit 1";
          mysqli_query( $con , $query );
        }
        else
        {
          $query = "UPDATE last_button SET last_button_id='adm_add_mod_l_for_mod_btn' order by id desc limit 1";
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
