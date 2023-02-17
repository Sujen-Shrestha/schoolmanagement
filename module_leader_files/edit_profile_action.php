<?php


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
      $id =  $_POST['edit_staff_id']; 
      
      $query = "UPDATE staff SET staff_first_name ='$fname' , login_password='$pass', staff_middlename='$lname' ,email='$email' ,contact_no='$phone' WHERE staff_id=$id";
       mysqli_query( $con , $query );
    
        
        header('Location:./edit_profile.php'); 
    }
}
else
{
  
  echo " Database not connected ";
}
  

?>