<?php

include '../connection.php';
if($con)
 {
     $id = $_POST['mod_leder_id'];
     $sql = "delete from staff WHERE staff_id='$id'";
     $con->query($sql);

     $sql = "UPDATE last_button SET last_button_id='admin_module_l_btn' order by id desc limit 1";
    $con->query($sql);

     
         
 }
 
?>