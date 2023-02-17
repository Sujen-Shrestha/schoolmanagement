<?php

include '../connection.php';
if($con)
 {
     $id = $_POST['mod_id'];
     $sql = "delete from courses WHERE course_id='$id'";
     $con->query($sql);
     
     $query = "UPDATE last_button SET last_button_id='adm_course_btn' order by id desc limit 1";
           mysqli_query( $con , $query );
    
         
 }
 
?>