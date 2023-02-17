<?php

include '../connection.php';
if($con)
 {
     $id = $_POST['mod_leder_id'];
     $sql = "delete from modules WHERE mod_id='$id'";
     $con->query($sql);

     $sql = "UPDATE last_button SET last_button_id='admin_module_btn' order by id desc limit 1";
    $con->query($sql);

     
         
 }
 
?>