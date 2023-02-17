<?php


include '../connection.php';

if($con)
{

  if (isset($_POST['submit-btn']))
  {
      $allid = $_POST['get_id'];
      $course_id = $_POST['course_id'];
      $ids = explode("-",$allid);
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