<?php
include '../connection.php';
if($con)
{

    session_start();
    if (isset($_POST['time_table_btn']))
    {

       $_SESSION['timetabel_view_id'] = $_POST['view_time_table_id'];
       echo $_SESSION['timetabel_view_id'];
       $query = "UPDATE last_button SET last_button_id='time_table_btn' order by id desc limit 1";
       if(mysqli_query( $con , $query ))
       {
         
        header('Location:../admin_panel.php'); 

        
       }


    }
}
else
{
  
  echo " Database not connected ";
}

?>
