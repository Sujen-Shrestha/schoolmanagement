<?php

include '../connection.php';
if($con)
 {
     $mod_id = $_POST['mod_leder_id'];
     $cource_id = $_POST['cource_id'];
     $sql = "UPDATE modules SET course_id='0' where mod_id = '$mod_id' and course_id = '$cource_id' ";

     $con->query($sql);

     $sql = "UPDATE last_button SET last_button_id='adm_course_btn' order by id desc limit 1";
    $con->query($sql);

     
         
 }
 
?>