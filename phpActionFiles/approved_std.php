<?php

include '../connection.php';

function generateRandomString($length = 10) 
{
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
if($con)
 {

    $sql = "UPDATE last_button SET last_button_id='admin_student_btn' order by id desc limit 1";
    $con->query($sql);

    
     // updating student record here
     $id = $_POST['std_id'];
     $sql = "UPDATE students SET status='live' WHERE student_id='$id'";
     $con->query($sql);



     // getting email of the student using and assigning him/her random password

     $result = mysqli_query($con , "select *from students where student_id='$id'");
     $row = mysqli_fetch_array($result);   
     if($row)
     {
         
         $email = $row['email'];
         $name = $row['student_firstname'] ." ". $row['student_surname'];
         $password = generateRandomString();
         // updating password 
         $sql = "UPDATE students SET login_password='$password' WHERE student_id='$id'";
         $con->query($sql);


         // sending mail to the student
         include 'verify-mail.php';
      //   header('Location:../admin_panel.php'); 


        
     }                   
 
         
 }
 
?>