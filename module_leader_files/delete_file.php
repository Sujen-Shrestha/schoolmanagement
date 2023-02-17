<?php


$id = $_POST['id'];
$file_name = $_POST['file_name'];
$dir = "../uploads/".$file_name;
unlink($dir);
  
include '../connection.php';
if($con)
 {

     $sql = "delete from module_content_files WHERE id='$id'";
     $con->query($sql);
    
         
 }


?>