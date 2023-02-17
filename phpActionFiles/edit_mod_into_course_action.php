<?php


include '../connection.php';

if($con)
{

  if (isset($_POST['submit-btn']))
  {
      $allid = $_POST['get_edit_id'];
      $course_id = $_POST['edit_course_id'];
      $prev_mod_id = $_POST['prev_mod_id'];
      $ids = explode("-",$allid);
      $old_ids = explode("-",$prev_mod_id);
      for ($i  =0 ; $i < sizeof($old_ids); $i++)
      {
            $query = "UPDATE modules SET course_id='' where mod_id='$old_ids[$i]' ";
            mysqli_query( $con , $query );
      }
      for ($i  =0 ; $i < sizeof($ids); $i++)
      {
            $query = "UPDATE modules SET course_id='$course_id' where mod_id='$ids[$i]' ";
            mysqli_query( $con , $query );
      }

      $query = "UPDATE last_button SET last_button_id='adm_course_btn' order by id desc limit 1";
      mysqli_query( $con , $query );
   
      header('Location:../admin_panel.php'); 
  }
}
else
{
  
  echo " Database not connected ";
}
  

?>