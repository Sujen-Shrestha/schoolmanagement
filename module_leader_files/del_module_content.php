<?php


$id = $_GET['id'];


  
include '../connection.php';
if($con)
 {

     $sql = "delete from module_content WHERE content_id='$id'";
     $con->query($sql);
     
    header('Location:./module_content.php'); 
    
         
 }


?>