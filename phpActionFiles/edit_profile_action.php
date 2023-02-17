<?php

session_start();
include '../connection.php';
if($con)
{

  if (isset($_POST['submit-btn']))
  {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $pass = $_POST['pass'];
      $id = $_SESSION['adm_id'];
      
      $query = "UPDATE staff SET staff_first_name ='$fname' , login_password='$pass', staff_surname='$lname' ,email='$email' ,contact_no='$phone' WHERE staff_id=$id";
       mysqli_query( $con , $query );
    
       $query = "UPDATE last_button SET last_button_id='admin_edit_btn' order by id desc limit 1";
       mysqli_query( $con , $query );

        header('Location:../admin_panel.php'); 
    }
}
else
{
  
  echo " Database not connected ";
}
  

?>